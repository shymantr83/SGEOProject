<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use App\Models\company;
use App\Models\User;
use App\Models\specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\allCompanies;
use App\Traits\ImageTrait;

class AuthController extends Controller
{
    use ImageTrait;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register','refresh','logout','company_register','message']]);
    }
public function company_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:companies',
            'password' => 'required',
           // 'specialization' => 'required'
        ]);

        if($request->logo){
       $file = $request->file('logo');
            $ext = $file->getClientOriginalName();
            $filename = "company-" . uniqid() . ".$ext";
            $file->move(public_path('images/company_image'), $filename);
        }
        else {
            $filename=null;
        }
      
        $company = company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'location' => $request->location,
            'overview' => $request->overview,
            'logo' => $filename,
            'specialization_id' =>$request->specialization ,
        ]);
        $token = Auth::guard('api')->login($company);
        return response()->json([
            'status' => 'success',
            'message' => new allCompanies($company),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
 ]);
    }
    

public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
          if($request->image){
       $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $filename = "user-" . uniqid() . ".$ext";
            $file->move(public_path('images/user_image'), $filename);
        }
        else {
            $filename=null;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=> $request->phone,
            'country'=> $request->country,
            'image'=> $filename,
        ]);

        $token = Auth::guard('api')->login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' =>new userResource($user),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
         'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::guard('api')->user();
        return response()->json([
            'status' => 'success',
            'user' => new userResource($user),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

    }

public function logout()
    {
        Auth::guard('api')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }


public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::guard('api')->user(),
            'authorisation' => [
                'token' => Auth::guard('api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }



}

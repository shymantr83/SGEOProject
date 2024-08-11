<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\allCompanies;
use App\Http\Resources\companyDetials;
use App\Http\Resources\userResource;
use App\Models\company;
use App\Models\project;
use App\Models\social_media;
use App\Models\specialization;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\error;
use App\Http\Resources\projectResource;
use App\Http\Resources\specializations;

class companyController extends Controller
{ 
    use ImageTrait;
public function changePassword (Request $request){
        $user=Auth::guard('api')->user();
        $company=Auth::guard('company_api')->user();
        if($user){
            if($request->password)
            $user->update([
                'New password'=>Hash::make($request->password),
            ]);
            return response()->json([
            'status' => 'success',
            'message' =>' Password changed successfully' ,
        ]);
        }
        elseif($company){
            if($request->password)
            $company->update([
                'New password'=>Hash::make($request->password),
            ]);
            return response()->json([
            'status' => 'success',
            'message' =>' Password changed successfully' ,
        ]);
        }
        else{
        return response()->json([
            'status' => 'Erorr',
            'message' =>' Token invaild!' ,
        ]);}
    }

public function profile(){
        $user=Auth::guard('api')->user();
        $company=Auth::guard('company_api')->user();
        if($user){
            return response()->json([
                'status' => 'success',
                'user' => new userResource($user),]);
        }
        elseif($company){
            return response()->json([
                'status' => 'success',
                'message' => new companyDetials($company),]);
        }
        else{
            return response()->json([
                'status' => 'success',
                'message' =>' Token invaild!' ,
            ]);
        }
    }
   
   public function company_login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
       
      $token = Auth::guard('company_api')->attempt($credentials);
      if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }
        $company=Auth::guard('company_api')->user();
    //   dd($company);
        
        if ($company) {
            //$token = Auth::guard('api')->login($company);
            return response()->json([
                'status' => 'success',
                'message' => new companyDetials($company),
                'token'=>$token,
            ]);
        } 
    }
    public function DeleteProject($id){
        $project=project::find($id);
        if(!$project){
            return response()->json([
            'status' => 'error',
                'message' => 'the project not found',
            ], 404);
        }
        $project->delete();
        if($project)
            return response()->json([
                'status' => 'success',
                'message' => 'the project is deleted',
            ], 200);

    }
    public function updateProject($id,Request $request){
        $project=project::find($id);
        if(!$project){
            return response()->json([
                'status' => 'error',
                'message' => 'the project not found',
            ], 404);
        }
        if($request->image1){
       $file = $request->file('image1');
            $ext = $file->getClientOriginalName();
            $filename = "project-" . uniqid() . ".$ext";
            $file->move(public_path('images/project_image'), $filename);
        }
       
            else {
                $filename=$project->image1;
            }
            $name=($request->name)?$request->name:$project->name;
            $description=($request->description)?$request->description:$project->description;
        $project->update([
            'name'=>$name,
            'description'=>$description,
            'image1'=>$filename,
        ]);
        if($project){
            return response()->json([
                'status' => 'success',
                'message' => new projectResource($project),
            ]);
        }
        return response()->json([
            'status' => 'Not save',
            'message' => new projectResource($project),
        ]);
    }
 public function updataUser(Request $request)
    {


       $user=Auth::guard('api')->user();
        if(!$user)
        {return response()->json([
            'status' => '404',
            'message' => 'Token invalid',
        ]);}
        else{
       if($request->image){
           $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                $filename = "project-" . uniqid() . ".$ext";
                $file->move(public_path('images/user_image'), $filename);
            }
        else{
            $filename=$user->image;
        }

        $user->update([
            'name'=>($request->name)?$request->name:$user->name,
            'email'=>($request->email)?$request->email:$user->email,
            'phone'=>($request->phone)?$request->phone:$user->phone,
            'country'=>($request->country)?$request->country:$user->country,
            'image'=>$filename,]);
        if($user){
            return response()->json([
                'status' => 'success',
                'message' => 'User update successful',
                'user' => new userResource($user),
            ]);

        }
        return response()->json([
            'status' => '404',
            'message' => 'User update not save',
        ]);
}
        }
    public function show_project($id){
        $project=project::whereId($id)->get()->first();
        if($project){
         return response()->json([
                'status' => 'success',
                'message' => new projectResource($project),
            ]);}
            else{
                return response()->json([
                'status' => 'error',
                'message' => 'the project not found',
            ], 404);
            }
            }
    
    public function updataCompany(Request $request)
{

    $company=Auth::guard('company_api')->user();
    //dd($company);
    if(!$company)
    {return response()->json([
            'status' => '404',
            'message' => 'Token invalid',
        ]);}
        else{
            
    $social=social_media::where('company_id',$company->id)->get()->first();
   if($request->logo){
   $file = $request->file('logo');
        $ext = $file->getClientOriginalName();
        $filename = "company-" . uniqid() . ".$ext";
        $file->move(public_path('images/company_image'), $filename);
    }


    else{
        $filename=$company->logo;
    }
    $company->update([
        'name'=>($request->name)?$request->name:$company->name,
        'email'=>($request->email)?$request->email:$company->email,
        'overview'=>($request->overview)?$request->overview:$company->overview,
        'logo'=>$filename,

        'specialization_id'=>($request->specialization)?$request->specialization:$company->specialization_id,
        ]);
        if($social){
    $social->update([
        'whatsapp'=>($request->whatsapp)?$request->whatsapp:$social->whatsapp,
        'facebook'=>($request->facebook)?$request->facebook:$social->facebook,
        'linkedin'=>($request->linkedin)?$request->linkedin:$social->linkedin,
         ]);}
         else{
             
         $socail=social_media::create([
            'whatsapp'=>($request->whatsapp)?$request->whatsapp:null,
            'facebook'=>($request->facebook)?$request->facebook:null,
            'linkedin'=>($request->linkedin)?$request->linkedin:null,
            'company_id'=>$company->id,    
        ]);
         }
    if($company){
        return response()->json([
            'status' => 'success',
            'message' => 'company update successful',
            'company' => new allCompanies($company),
        ]);

    }
    return response()->json([
        'status' => '404',
        'message' => 'Company update not save',
    ]);

}}
    public function specializations(){
        $specializations=specialization::get()->all();
        foreach ($specializations as $specialization){
            $mess[]=new specializations($specialization);}
        return response()->json([
        'status' => 'success',
        'message' =>$mess ,
    ]);
    }
    public function all_companies()
    {
        $companies = company::get()->all();

        foreach ($companies as $company){
            $mess[]=new allCompanies($company);}
        return response()->json([
        'status' => 'success',
        'message' =>$mess ,
    ]);
    }
    public function search($data)
    {
        $specialization=specialization::where('name','like',$data.'%')->get()->first();
        $company=company::where('name','like',$data.'%')->get()->first();
        if($specialization){
            $companies=company::where('specialization_id',$specialization->id)->get();
            foreach ($companies as $company){
                $mess[]=new allCompanies($company);}
            if( $companies)
                return response()->json([
                    'status' => 'success',
                    'message' => $mess,
                ]);
            else
                return response()->json([
                    'status' => 'success',
                    'message' => 'No company registered yet!',
                ]);
        }
        elseif($company){
            if( $company){
                $mess[]=new companyDetials($company);
                return response()->json([
                    'status' => 'success',
                    'message' =>$mess,
                ]);}
            else
                return response()->json([
                    'status' => 'success',
                    'message' => 'No company registered yet!',
                ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'not found',
        ]);



    }
    public  function specialization_companies($id)
    {
//        $specialization_id=specialization::find($id);
        $companies =company::with('projects','specialization')->whereSpecialization_id($id)->get();
        foreach ($companies as $company){
            $mess[]=new allCompanies($company);}
        if( $companies)
        return response()->json([
            'status' => 'success',
            'message' => $mess,
        ]);
        else
            return response()->json([
                'status' => 'success',
                'message' => 'No company registered yet!',
            ]);

    }
    public function add_project($id ,Request $request)
    {
        //$data['image'] = $this->uploadImage(request()->file('image'), 'project_image');
        //$fk=company::whereName($request->company_name)->first();
       
       $file = $request->file('image1');
            $ext = $file->getClientOriginalName();
            $filename = "project-" . uniqid() . ".$ext";
            $file->move(public_path('images/project_image'), $filename);
        
        $new_project=project::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image1'=>$filename,
            'company_id'=>$id,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => new projectResource($new_project),
        ]);
    }
    public function show_company($id)
    {

//        $project=project::whereCompany_id ($id)->get();
        $company = company::where('id' ,$id )->with('projects','specialization')->first();
        //$specialization_id= specialization::find($company->specialization_id);

        //$company=[$company ,$project ,["specialization"=>$specialization_id->name]];
        return response()->json([
            'status' => 'success',
            'message' =>new companyDetials($company),
        ]);
    }
    public function add_social_links($id, Request $request)
    {
        $socail=social_media::create([
            'whatsapp'=>($request->whatsapp)?$request->whatsapp:null,
            'facebook'=>($request->facebook)?$request->facebook:null,
            'linkedin'=>($request->linkedin)?$request->linkedin:null,
            'company_id'=>$id,    
        ]);
        $company =company::where('id',$id)->with('projects','specialization','social')->first();
        
        return response()->json([
            'status' => 'success',
            'message' => new companyDetials($company),
        ]);
    }

}


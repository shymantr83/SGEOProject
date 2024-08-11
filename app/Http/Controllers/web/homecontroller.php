<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\trait\Imagetrait;
use App\Models\company;
use App\Models\project;
use App\Models\social_media;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\specialization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class homecontroller extends Controller
{use Imagetrait;
    public function Company_logout(){
        $specializations=specialization::get();
        $companies=company::get()->all();
        session_start();
        session_unset();
        session_destroy();
        return view('welcome',compact('specializations','companies'));
    }

    public function dialogPage_login()
    {
        return view('frontend.dialog_login');
    }
    public function dialogPage_register()
    {
        return view('frontend/dialog_register');
    }
public function companyprofile($id){

            $company=company::find($id);
$social=social_media::whereCompany_id($id)->get()->first();
            return view('frontend/companyprofil',compact('company','social'));



}
    public function userprofile(){
        if(Auth::user()){
            $user=User::find( Auth::user()->id );
            return view('frontend/userprofile',compact('user'));}
    }
public function company_loginPage()
{
    return view('frontend.company_login');
}
public function company_login(Request $request)
{
    $specializations=specialization::get();
   $companies=company::get()->all();


    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);
    $credentials = $request->only('email', 'password');
    $company = company::whereEmail($credentials['email'])->get()->first();
//    dd($company);
    if ($credentials)
        return view('/home',compact('companies','specializations','company'));

}
    public function company_registerPage()
    {
        return view('frontend/company_register');
    }
    public function company_register(Request $request)
    {    $specializations=specialization::get();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $file=$request->logo;
        $filename=time().'company.jpg';
        $this->uplodeImage('company_image',$filename,$file);
        $specialization = specialization::whereName($request->specialization)->first();
        $company = company::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'location' => $request->location,
            'overview' => $request->overview,
            'logo'     => $request->$filename,
            'specialization_id' => $specialization->id,
        ]);
        return view('/home',compact('company',    'specializations'));
    }
    public function about($id){
        $specializations=specialization::get();
        $company=company::find($id);
        return view('frontend/About',compact('specializations','company'));
    }
    public function about_user(){
        $specializations=specialization::get();

        return view('frontend/About',compact('specializations'));
    }
    public function contact($id){
        $specializations=specialization::get();
        $company=company::find($id);
        return view('frontend/contact',compact('specializations','company'));
    }
    public function contact_user(){
        $specializations=specialization::get();

        return view('frontend/contact',compact('specializations'));
    }
    public function company_contact($id){
        $specializations=specialization::get();
       $social_media=social_media::whereCompany_id($id)->get()->first();
$company=company::find($id);
//dd($social_media->whatsapp);
        return view('frontend/contactcom',compact('specializations','social_media','company'));
    }

    public function company_page($id)
    {
        $company=company::find($id);
        $projects=project::whereCompany_id ($id)->get();
        $specializations=specialization::get()->all();


        return view('frontend.Company',compact("company","projects",'specializations'));
    }
    public function index()
    {
        $specializations=specialization::get()->all();
        $companies=company::get()->all();

        return view('home',compact("specializations","companies"));
    }
    public function specialization_links($id){
        $specializations=specialization::get()->all();
        $companies =company::whereSpecialization_id($id)->get();
//dd( $specialisation->id);
            return view('home',compact("specializations","companies"));

    }

}

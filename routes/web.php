<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\company;
use App\Models\specialization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\homecontroller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

 Route::get('/', function () {
     $specializations=specialization::get()->all();
     $companies=company::get()->all();

     return view('welcome',compact("specializations","companies"));
 });
route::get('/Company/logout',[homecontroller::class,'Company_logout'])->name('Company_logout');
 route::get('/dialogPage/login',[homecontroller::class,'dialogPage_login'])->name('dialogPage_login');
route::get('/dialogPage/register',[homecontroller::class,'dialogPage_register'])->name('dialogPage_register');
 route::get('/companyprofile/{id}',[homecontroller::class,'companyprofile'])->name('companyprofile');
  route::get('/userprofile/',[homecontroller::class,'userprofile'])->name('user_profile');
 // route::get('/companyprofil',[homecontroller::class,'userprofile'])->name('company_profile');
 route::get('/company/loginPage',[homecontroller::class,'company_loginPage'])->name('company_loginPage');
 route::post('/company/login',[homecontroller::class,'company_login'])->name('company_login');
route::get('/company/registerPage',[homecontroller::class,'company_registerPage'])->name('company_registerPage');
route::post('/company/register',[homecontroller::class,'company_register'])->name('company_register');
//route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [homecontroller::class,'about_user'])->name('frontend.about');
Route::get('/about/{id}', [homecontroller::class,'about'])->name('frontend.about_compant');
Route::get('/contact', [homecontroller::class,'contact_user'])->name('frontend.contact');
Route::get('/contact/{id}', [homecontroller::class,'contact'])->name('frontend.contact_company');
route::get('/company/page/{id}',[homecontroller::class,'company_page'])->name('company_page');
route::get('/company/contact/{id}',[homecontroller::class,'company_contact'])->name('company_contact');
Route::get('/specialization/links/{id}', [App\Http\Controllers\HomeController::class,'specialization_links'])->name('specialization_links');
//route::post('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Auth::routes();
Route::get('/home', [App\Http\Controllers\homecontroller::class, 'index'])->name('home');

});

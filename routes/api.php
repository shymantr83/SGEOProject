<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\companyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\Api\messagController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('changePassword',[companyController::class,'changePassword']);
Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
Route::post('image/{id}', [AuthController::class,'image']);
Route::post('refresh', [AuthController::class,'refresh']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('company/register',[AuthController::class,'company_register']);
Route::post('company/login',[companyController::class,'company_login']);
Route::get('all/companies',[companyController::class,'all_companies']);
Route::get('all/specializations',[companyController::class,'specializations']);
Route::get('specialization/companies/{id}',[companyController::class,'specialization_companies']);
Route::post('add/project/{id}',[companyController::class,'add_project']);
Route::get('show/company/{id}',[companyController::class,'show_company']);
Route::get('show/project/{id}',[companyController::class,'show_project']);
Route::get('search/{data}',[companyController::class,'search']);
Route::get('profile',[companyController::class,'profile']);
Route::post('updataCompany',[companyController::class,'updataCompany']);
Route::post('updataUser',[companyController::class,'updataUser']);
Route::post('updateProject/{id}',[companyController::class,'updateProject']);
Route::delete('DeleteProject/{id}',[companyController::class,'DeleteProject']);
Route::post('add/social/links/{id}',[companyController::class,'add_social_links']);
route::post('message/{id}',[messagController::class ,'message']);
route::get('messages/{id}',[messagController::class ,'allmessage']);
route::get('get_all_chat',[messagController::class ,'get_all_chat']);

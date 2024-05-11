<?php

use App\Http\Controllers\CarRequestsController;
use App\Http\Controllers\DonateRequestsController;
use App\Models\CarRequests;
use App\Models\DonateRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/save-user-personal-info', 'App\Http\Controllers\UserPersonalInfoController@saveUserPersonalInfo');
Route::get('/get-users-personal-info', 'App\Http\Controllers\UserPersonalInfoController@getUsersPersonalInfo');
Route::post('/save-user-medical-info', 'App\Http\Controllers\UserMedicalInfoController@saveUserMedicalInfo');
Route::get('/get-users-medical-info', 'App\Http\Controllers\UserMedicalInfoController@getUsersMedicalInfo');
Route::get('/get-user-medical-info/{id}', 'App\Http\Controllers\UserMedicalInfoController@getUserMedicalInfo');
Route::put('/update-user-medical-info/{id}', 'App\Http\Controllers\UserMedicalInfoController@updateUserMedicalInfo');
Route::post('/save-hospital-personal-info', 'App\Http\Controllers\HospitalPersonalInfoController@saveHospitalPersonalInfo');
Route::get('/get-hospitals-personal-info', 'App\Http\Controllers\HospitalPersonalInfoController@getHospitalsPersonalInfo');
Route::post('/save-hospital-medical-info', 'App\Http\Controllers\HospitalMedicalInfoController@saveHospitalMedicalInfo');
Route::get('/get-hospitals-medical-info', 'App\Http\Controllers\HospitalMedicalInfoController@getHospitalsMedicalInfo');
Route::get('/get-hospital-medical-info/{id}', 'App\Http\Controllers\HospitalMedicalInfoController@getHospitalsMedicalInfoById');
Route::put('/update-hospital-medical-info/{id}', 'App\Http\Controllers\HospitalMedicalInfoController@updateHospitalMedicalInfo');
Route::get('/merge-user-data', 'App\Http\Controllers\UserPersonalInfoController@mergeUserData');
Route::get('/merge-hospital-data', 'App\Http\Controllers\HospitalPersonalInfoController@mergeUserData');
Route::put('/update-user-info/{id}', 'App\Http\Controllers\UserPersonalInfoController@updateUserInfo');
Route::put('/update-hospital-info/{id}', 'App\Http\Controllers\HospitalPersonalInfoController@updateHospitalInfo');
Route::post('/request-blood', 'App\Http\Controllers\BloodRequestController@makeRequest');
Route::get('/get-requests', 'App\Http\Controllers\BloodRequestController@getRequests');
Route::put('/update-request/{id}', 'App\Http\Controllers\BloodRequestController@updateRequest');
Route::delete('/delete-request/{id}', 'App\Http\Controllers\BloodRequestController@deleteRequest');
Route::post('/donate-request',[DonateRequestsController::class, 'saveDonateRequest']);
Route::get('/get-donate-requests', [DonateRequestsController::class, 'getDonateRequests']);
Route::delete('/delete-donate-request/{id}', [DonateRequestsController::class, 'deleteDonateRequest']);
Route::put('/update-donate-request/{id}', [DonateRequestsController::class, 'updateDonateRequest']);


// car section
Route::post('/car/make-requests',[CarRequestsController::class , 'MakeRequest']);
Route::get('/car/get-requests',[CarRequestsController::class , 'GetRequests']);
Route::get('/car/get-request/{id}',[CarRequestsController::class , 'GetRequest']);
Route::delete('/car/delete-request/{id}',[CarRequestsController::class , 'deleteRequest']);
Route::put('/car/update-request/{id}',[CarRequestsController::class , 'updateRequest']);
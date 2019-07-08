<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\ClientController;

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

Route::get('/user', function (Request $request) {
    return App\User::all();
});

Route::post('/user/register', 'UserController@register');


Route::apiResources(['/technicians' => 'TechnicianController']);
Route::put('/technicians/image/update/{id}', 'TechnicianController@updateProfileImage');
Route::post('/technicians/location/update', 'TechnicianController@updateLocation');
Route::post('/technicians/nearby', 'TechnicianController@getNearByTechnicians');
Route::get('/technicians/total', 'TechnicianController@getTotalTechnicians');
Route::post('/technicians/search', 'TechnicianController@searchTechnicianByName');
Route::post('/technicians/search/detailed', 'TechnicianController@searchTechnicianByNameWithRating');
Route::get('/technician/profile/{id}', 'TechnicianController@getTechnicianProfileData');

//Work Category controller routes
Route::apiResources(['/work-category' => 'WorkCategoryController']);
Route::post('/work-category/search', 'WorkCategoryController@searchByCategory');

//Work Routes
Route::apiResources(['/work' => 'WorkController']);
Route::get('/work/suggestions/{id}', 'WorkController@getWorkSuggestions');
Route::get('/user/work/{id}', 'WorkController@getUserAllPostedWork');


//technicianWork(and Work Applications) Routes
Route::apiResources(['/technician-work' => 'TechnicianWorkController']);

Route::get('/work/applications/{id}', 'TechnicianWorkController@getUserAllWorksApplications');
Route::get('/work/technician/applications/{id}', 'TechnicianWorkController@getTechnicianAllWorksApplications');

Route::post('/register', 'UserController@register');
Route::post('/admin/login', 'UserController@authenticateAdminAndTechnicians');
Route::post('/user/login', 'UserController@authenticateUsers');
Route::get('/user/work/applications/{id}', 'WorkController@getApplications');

Route::post('/technicians/search/rating', 'TechnicianController@searchTechnicianByNameWithRating');
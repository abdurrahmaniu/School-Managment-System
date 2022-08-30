<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Group ROUTE 
// Route::group(['middlware'=>"customAuth"]);
    // Login (HOME PAGE) Route 

Route::get('/', function () {
    return view('auth.login');
})->middleware('alreadyLoggedIn');
// After The user wants to login 
route::post('loginToTheDashboard','accountController@loginFunction')->middleware('alreadyLoggedIn');
// Register Route
route::get('signup',function() {
    return view('auth.signup');
});
route::post('createAnAccount', 'accountController@signUpFunction');

// LOGOUT User 
route::get('logout','accountController@logOutUser');
// Main Dashboard
route::get('MainDashboard','studentController@index')->middleware('isLogged');


// START Routes For Student Section
route::get('addNewStudent', function() {
    return view('addNewStudent');
});
route::post('insertStudentToDatabase','studentController@store')->middleware('isLogged');
route::get('/edit/{students}/edit','studentController@edit')->middleware('isLogged');
route::put('/edit/{students}','studentController@update')->middleware('isLogged');
route::delete('/delete/{students}','studentController@destroy')->middleware('isLogged');
// END Routes For Student Section

// START Routes For Teacher Section
 route::get('teachers','teacherController@index')->middleware('isLogged');
 route::get('addNewTeacher', function() {
    return view('addNewTeacher');
})->middleware('isLogged');
route::post('insertTeacherToDatabase','teacherController@store')->middleware('isLogged');
route::get('/teachers/{teachers}/teachers','teacherController@edit')->middleware('isLogged');
route::put('/teachers/{teachers}','teacherController@update')->middleware('isLogged');
route::delete('/teacher/{teachers}','teacherController@destroy')->middleware('isLogged');
// END Routes For Teacher Section

// START Routes For Subject Section
route::get('subject','subjectController@index')->middleware('isLogged');
route::get('addNewSubject', function() {
    return view('addNewSubject');
})->middleware('isLogged');
route::post('insertSubjectToDatabase','subjectController@store')->middleware('isLogged');
route::get('/subject/{subjects}/subject','subjectController@edit')->middleware('isLogged');
route::put('/subject/{subjects}','subjectController@update')->middleware('isLogged');
route::delete('/subject/{subjects}','subjectController@destroy')->middleware('isLogged');
// END Routes For Subject Section

// START Routes For Class Section
route::get('class','classesController@index')->middleware('isLogged');
route::get('addNewClass', function(){
    return view('addNewClass');
})->middleware('isLogged');
route::post('insertClassToDatabase','classesController@store')->middleware('isLogged');
route::get('/class/{classes}/class','classesController@edit')->middleware('isLogged');
route::put('/class/{classes}','classesController@update')->middleware('isLogged');
route::delete('class/{classes}','classesController@destroy')->middleware('isLogged');
// END Routes For Class Section

// START Route For Setting Section
route::get('settings','accountController@settingFunction');
route::get('EditAccount', function() {
    return view('settingsDashboard');
})->middleware('isLogged');
route::get('settings',function() {
    return view('settingsDashboard');
})->middleware('isLogged');
route::get('/settings/{account}/settings','accountController@editSettings')->middleware('isLogged');
route::put('/settings/{account}','accountController@updateSettings')->middleware('isLogged');
route::delete('settingsDelete/{account}','accountController@deleteAccount')->middleware('isLogged');
// END Route For Setting Section
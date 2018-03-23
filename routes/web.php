<?php

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

Route::get('/', function () {
    return view('dashboard');
});

// scl
Route::get('/scl/login', function () {
    return view('scl_data/scl_login');
});

Route::get('/scl/index', 'StudentController@Index' );

Route::post('/scl/login/submit', 'LoginSclController@submit' );

Route::get('/scl/addstudents', function () {
    return view('scl_data/addStudents');
});

Route::post('/scl/addstudents/submit','AddStudentDetailsController@submit');


Route::resource('students', 'AddStudentController');

Route::get('scl/addStudentDetails', 'AddStudentDetailsController@showStudents');


Route::get('/scl/addStudentDetails/{Gr_No}',['uses' =>'AddStudentDetailsController@addStudents']);


// govt
// Route::get('/govt/login', function () {
//     return view('govt_data/logingovt');
// });

// Route::get('/govt/dashboard', function () {
//     return view('govt_data/dashboard');
// });

// Route::get('/govt/viewSchool', function () {
//     return view('govt_data/viewSchool');
// });

// Route::get('/govt/ViewMeritorious', function () {
//     return view('govt_data/ViewMeritoriousStudent');
// });

// Route::get('/govt/showFilteredSchools', function () {
//     return view('govt_data/showFilteredSchools');
// });

// Route::get('/govt/showschools', function () {
//     return view('govt_data/showAllSchools');
// });

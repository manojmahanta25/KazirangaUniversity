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

use App\Department;
use App\Faculty;
use App\School;

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::middleware(['auth','web'])->group(function () {
        Route::get('/faculty', ['as'=>'admin.Faculty','uses'=>'FacultyController@index']);
        Route::get('/faculty/priority', ['as'=>'admin.priorityFaculty','uses'=>'FacultyController@priorityIndex']);
        Route::put('/faculty/priority/set', ['as'=>'admin.prioritysetFaculty','uses'=>'FacultyController@updatePriority']);
        Route::get('/faculty/create', ['as'=>'admin.addFaculty','uses'=>'FacultyController@create']);
        Route::post('/faculty/create', ['as'=>'admin.addFacultydb','uses'=>'FacultyController@store']);
        Route::get('/faculty/{fid}/edit', ['as'=>'admin.editFaculty','uses'=>'FacultyController@edit']);
        Route::put('/faculty/{fid}/edit', ['as'=>'admin.editFacultydb','uses'=>'FacultyController@update']);
        Route::delete('/faculty/{fid}/delete', ['as'=>'admin.deleteFaculty','uses'=>'FacultyController@destroy']);
        Route::put('/faculty/{fid}/restore', ['as'=>'admin.restoreFaculty','uses'=>'FacultyController@restore']);
        Route::put('/dean/set', ['as'=>'admin.setDean','uses'=>'DeanHodController@deanSet']);
        Route::put('/hod/set', ['as'=>'admin.setHod','uses'=>'DeanHodController@hodSet']);

        Route::get('/school', ['as'=>'admin.School','uses'=>'SchoolController@index']);
        Route::get('/school/create', ['as'=>'admin.addSchool','uses'=>'SchoolController@create']);
        Route::post('/school/create', ['as'=>'admin.addSchooldb','uses'=>'SchoolController@store']);
        Route::get('/school/{sid}/edit', ['as'=>'admin.editSchool','uses'=>'SchoolController@edit']);
        Route::put('/school/{sid}/edit', ['as'=>'admin.editSchooldb','uses'=>'SchoolController@update']);
        Route::delete('/school/{sid}/delete', ['as'=>'admin.deleteSchool','uses'=>'SchoolController@destroy']);
        Route::put('/school/priority/set', ['as'=>'admin.prioritysetSchool','uses'=>'SchoolController@updatePriority']);

        Route::get('/department', ['as'=>'admin.Dept','uses'=>'DepartmentController@index']);
        Route::get('/department/create', ['as'=>'admin.addDept','uses'=>'DepartmentController@create']);
        Route::post('/department/create', ['as'=>'admin.addDeptdb','uses'=>'DepartmentController@store']);
        Route::get('/department/{did}/edit', ['as'=>'admin.editDept','uses'=>'DepartmentController@edit']);
        Route::put('/department/{did}/edit', ['as'=>'admin.editDeptdb','uses'=>'DepartmentController@update']);
        Route::delete('/department/{did}/delete', ['as'=>'admin.deleteDept','uses'=>'DepartmentController@destroy']);

        Route::get('/designation', ['as'=>'admin.Desig','uses'=>'DesignationController@index']);
        Route::post('/designation/create', ['as'=>'admin.addDesgndb','uses'=>'DesignationController@store']);
        Route::get('/designation/{des}/edit', ['as'=>'admin.editDesgn','uses'=>'DesignationController@edit']);
        Route::put('/designation/{des}/edit', ['as'=>'admin.editDesgndb','uses'=>'DesignationController@update']);
        Route::delete('/designation/{des}/delete', ['as'=>'admin.deleteDesgn','uses'=>'DesignationController@destroy']);
        Route::put('/designation/priority/set', ['as'=>'admin.prioritysetDesgn','uses'=>'DesignationController@updatePriority']);

        Route::post('/profilepic/{fid}/upload', ['as'=>'admin.addprofilPic','uses'=>'FileUpload@profilePic']);

        Route::get('/collaboration', ['as'=>'admin.Cl','uses'=>'CollaborationController@index']);
        Route::get('/collaboration/create', ['as'=>'admin.addCl','uses'=>'CollaborationController@create']);
        Route::post('/collaboration/create', ['as'=>'admin.addCldb','uses'=>'CollaborationController@store']);
        Route::get('/collaboration/{cid}/edit', ['as'=>'admin.editCl','uses'=>'CollaborationController@edit']);
        Route::put('/collaboration/{cid}/edit', ['as'=>'admin.editCldb','uses'=>'CollaborationController@update']);
        Route::put('/collaboration/priority/set', ['as'=>'admin.prioritysetCl','uses'=>'CollaborationController@updatePriority']);
        Route::delete('/collaboration/{cid}/delete', ['as'=>'admin.deleteCl','uses'=>'CollaborationController@destroy']);
        Route::put('/collaboration/{cid}/restore', ['as'=>'admin.restoreCl','uses'=>'CollaborationController@restore']);

        Route::get('/course', ['as'=>'admin.Course','uses'=>'CourseController@index']);
        Route::get('/course/create', ['as'=>'admin.addCourse','uses'=>'CourseController@create']);
        Route::post('/course/create', ['as'=>'admin.addCoursedb','uses'=>'CourseController@store']);
        Route::get('/course/{cid}/edit', ['as'=>'admin.editCourse','uses'=>'CourseController@edit']);
        Route::post('/course/{cid}/edit', ['as'=>'admin.editCoursedb','uses'=>'CourseController@update']);
        Route::delete('/course/{cid}/delete', ['as'=>'admin.deleteCourse','uses'=>'CourseController@destroy']);
        Route::put('/course/{cid}/restore', ['as'=>'admin.restoreCourse','uses'=>'CourseController@restore']);

        Route::get('/notification/readall', ['as'=>'admin.notificationReadAll','uses'=>'NotificationController@readAll']);
        Route::get('/notification/{id}/read', ['as'=>'admin.notificationRead','uses'=>'NotificationController@read']);

    });
});


Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'apiFacultyController@create');
Route::get('/fac/{id}', function (Faculty $id) {
    return $id->isDean;
});

Route::get('/school', function () {
    $faculty = School::with('faculty')->OrderBy('s_order')->get();
    return $faculty;
});
Route::get('/dept', function () {
    $faculty = Department::with('faculty')->get();
    return $faculty;
});

<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user_management', function () {
    return view('user_management');
});

Route::get('/test', function () {
    return view('admin-dashboard-ui-template');
});

//student

Route::get('/user_management/add-student', function () {
    return view('add-student');
});

Route::post('/user_management/add-student/save', 'studentController@store');

Route::get('/user_management/student', function () {
    //return view('student');
    //$data=App\student::all();
    return view('student')->with('student', $data);
});

Route::get('/user_management/delete-student/{id}', 'studentController@delete');

Route::get('/user_management/update-student/{id}', 'studentController@updateview');

Route::post('/user_management/update-student/update', 'studentController@update');

Route::get('/user_management/student/download/{id}', 'studentController@download');

//Teachers

Route::get('/user_management/add-teacher', function () {
    return view('add-teacher');
});

Route::post('/user_management/add-teacher/save', 'teacherController@store');

Route::get('/user_management/teacher', function () {

    //$data=App\teacher::all();
    return view('teacher');//->with('teacher', $data);
});

Route::get('/user_management/delete-teacher/{id}', 'teacherController@delete');

Route::get('/user_management/update-teacher/{id}', 'teacherController@updateview');

Route::post('/user_management/update-teacher/update', 'teacherController@update');

Route::get('/user_management/teacher/download/{id}', 'teacherController@download');

//Admin

Route::get('/user_management/add-admin', function () {
    return view('add-admin');
});

Route::post('/user_management/add-admin/save', 'adminController@store');

Route::get('/user_management/admin', function () {

    //$data=App\admin::all();
    return view('admin');//->with('admin', $data);
});

Route::get('/user_management/delete-admin/{id}', 'adminController@delete');

Route::get('/user_management/update-admin/{id}', 'adminController@updateview');

Route::post('/user_management/update-admin/update', 'adminController@update');

Route::get('/user_management/admin/download/{id}', 'adminController@download');


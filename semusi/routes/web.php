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
    return view('welcome');
});
Route::get('/main','MainController@index');
Route::post('/main/checklogin','MainController@checklogin');
Route::get('/main/successlogin','MainController@successLogin');
Route::get('/main/logout','MainController@logout');

Route::get('/main/empForm', function () {
    return view('empForm');
});

Route::post('/main/addEmp','EmpController@addEmp');

Route::get('/main/updateId', function () {
    return view('updateId');
});

Route::post('/update/employee/',[
    'uses'  =>  'EmpController@update',
    'as'    =>  'update.employee'
]);

Route::post('/update/employeeForm','EmpController@updateSubmit');

Route::get('/main/deleteId', function () {
    return view('deleteId');
});

Route::post('/delete/employee','EmpController@delete');


Route::get('/main/viewId', function () {
    return view('viewId');
});

Route::post('/view/employee','EmpController@view');

Route::get('/mail/addEmp', 'EmpController@mailAddEmp');
Route::get('/mail/updateEmp', 'EmpController@mailUpdEmp');
Route::get('/mail/delEmp', 'EmpController@mailDelEmp');







//Employee Routes


Route::get('/main/Emplogin','MainController@Emplogin');
Route::post('/main/Empchecklogin','MainController@Empchecklogin');
Route::get('/main/StudForm', function(){
    return view('addStudForm');
});
Route::post('/main/studAddSuccess','StudController@studAddSuccess');
Route::get('/mail/AddStud', 'StudController@mailAddStud');
Route::get('/main/StudEdit', function(){
    return view('StudViewId');
});

Route::post('/main/StudentEditForm','StudController@EditId');

Route::post('/main/studUpdateSuccess','StudController@updateSubmitStudent');
Route::get('/mail/updateStud', 'StudController@mailUpdStud');
Route::get('/main/StudDel', function () {
    return view('StudDeleteId');
});

Route::post('/main/StudentDelete','StudController@delete');
Route::get('/mail/delStud', 'StudController@mailDelStud');
Route::get('/main/StudView', function () {
    return view('StudentViewId');
});
Route::post('/main/StudentViewForm','StudController@view');
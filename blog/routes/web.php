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

Route::get('/todo',[
   'uses'=>'firstController@index', 
    'as'=>'todo'
]);

Route::post('/add/todo',[
   'uses'=>'firstController@addTodo' 
]);

Route::get('/todo/delete/{id}',[
    'uses'=>'firstController@delete',
    'as'=>'todo.delete'
]);

Route::get('/todo/update/{id}',[
    'uses'=>'firstController@update',
    'as'=>'todo.update'
]);

Route::post('/update/save/{id}',[
   'uses'=>'firstController@todoSave', 
    'as'=>'update.save'
]);

Route::get('/todo/completed/{id}',[
    'uses'=>'firstController@todoCompleted',
    'as'=>'todo.completed'
]);
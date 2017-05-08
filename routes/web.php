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

Route::resource('admin/teachers', 'TeacherController');
Route::resource('admin/current-groups', 'CurrentGroupsController');
Route::resource('admin/dashboard', 'DashboardController');
Route::resource('admin/payments-incoming', 'PaymentsIncomingController');
Route::resource('admin/payments-outgoing', 'PaymentsOutgoingController');
Route::resource('admin/knowledge-groups', 'KnowledgeGroupsController');
Route::resource('admin/awards', 'AwardsController');
Route::resource('admin/students', 'StudentsController');

<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/file-manager', 'Backend\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('/dashboard/help-center', 'Backend\DashboardController@help_center')->name('dashboard.help-center');
Route::get('/dashboard/logout', 'Backend\DashboardController@logout')->name('dashboard.logout');
Route::get('/lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// ACCOUNT PROFILES
// Route::get('/dashboard/profile', 'Backend\ProfileController@index')->name('profile.index');
// Route::get('/dashboard/profile/account-information', 'Backend\ProfileController@account_information')->name('profile.account-information');
// Route::get('/dashboard/profile/change-password', 'Backend\ProfileController@change_password')->name('profile.change-password');

// PROFILE
Route::group([
  'as' => 'dashboard.profile.',
  'prefix' => 'dashboard/profile',
  'namespace' => 'Backend',
], function(){
  Route::get('about', 'ProfileController@about')->name('about');
  Route::get('change-password', 'ProfileController@change_password')->name('change-password');
  Route::post('update-password', 'ProfileController@update_password')->name('update-password');
  Route::get('account-information', 'ProfileController@account_information')->name('account-information');
  Route::get('timeline', 'ProfileController@timeline')->name('timeline');
  Route::resource('/', 'ProfileController')->parameters(['' => 'id']);
});

// DUMMY - TABLE GENERALS
Route::group([
  'as' => 'system.dummy.table.generals.',
  'prefix' => 'dashboard/dummy/table/generals',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'GeneralController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'GeneralController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'GeneralController@enable')->name('enable');
  Route::get('disable/{id}', 'GeneralController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'GeneralController@status')->name('status');
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
  Route::get('deleteall', 'GeneralController@deleteall')->name('deleteall');
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});

// DUMMY - TABLE RELATIONS
Route::group([
  'as' => 'system.dummy.table.relations.',
  'prefix' => 'dashboard/dummy/table/relations',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'RelationController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'RelationController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'RelationController@enable')->name('enable');
  Route::get('disable/{id}', 'RelationController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'RelationController@status')->name('status');
  Route::get('delete/{id}', 'RelationController@delete')->name('delete');
  Route::get('deleteall', 'RelationController@deleteall')->name('deleteall');
  Route::resource('/', 'RelationController')->parameters(['' => 'id']);
});

Route::group([
  'as' => 'system.management.role.',
  'prefix' => 'dashboard/management/roles',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'RoleController@deleteall')->name('deleteall');
  Route::get('/', 'RoleController@index');
  Route::get('create', 'RoleController@create');
  Route::post('/', 'RoleController@store');
  Route::get('{id}/edit', 'RoleController@edit');
  Route::patch('{id}', 'RoleController@update');
  Route::get('{id}', 'RoleController@show');
  Route::delete('/{id}','RoleController@destroy');
  Route::get('enable/{id}', 'RoleController@enable');
  Route::get('disable/{id}', 'RoleController@disable');
  Route::get('status-done/{id}', 'RoleController@status_done');
  Route::get('status-pending/{id}', 'RoleController@status_pending');
  Route::get('status/{id}/{slug}', 'RoleController@status')->name('status');
  Route::get('delete/{id}', 'RoleController@delete')->name('delete');
});

Route::group([
  'as' => 'system.management.user.',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::get('/', 'UserController@index');
  Route::get('create', 'UserController@create');
  Route::post('/', 'UserController@store');
  Route::get('{id}/edit', 'UserController@edit');
  Route::patch('{id}', 'UserController@update');
  Route::get('{id}', 'UserController@show');
  Route::delete('/{id}','UserController@destroy');
  Route::get('enable/{id}', 'UserController@enable');
  Route::get('disable/{id}', 'UserController@disable');
  Route::get('status-done/{id}', 'UserController@status_done');
  Route::get('status-pending/{id}', 'UserController@status_pending');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
});

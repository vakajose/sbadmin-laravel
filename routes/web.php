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

// Route::get('/', function () {
//     return view('admin.home');
// });

/* REDIRECCION A LOGIN*/
Route::redirect('/','login');

Route::get('/admin', function () {
    return view('admin.home');
});

/*Route::get('/login', function () {
    return view('admin.auth.login');
});*/

Route::get('/charts', function () {
    return View::make('admin.charts');
});

Route::get('/tables', function () {
    return View::make('admin.table');
});

Route::get('/forms', function () {
    return View::make('admin.form');
});

Route::get('/grid', function () {
    return View::make('admin.grid');
});

Route::get('/buttons', function () {
    return View::make('admin.buttons');
});

Route::get('/icons', function () {
    return View::make('admin.icons');
});

Route::get('/panels', function () {
    return View::make('admin.panel');
});

Route::get('/typography', function () {
    return View::make('admin.typography');
});

Route::get('/notifications', function () {
    return View::make('admin.notifications');
});

Route::get('/blank', function () {
    return View::make('admin.blank');
});

Route::get('/documentation', function () {
    return View::make('admin.documentation');
});

Route::get('/stats', function() {
   return View::make('admin.stats');
});

Route::get('/progressbars', function() {
    return View::make('admin.progressbars');
});

Route::get('/collapse', function() {
    return View::make('admin.collapse');
});



//Proceso  
Route::get('/procesos', 'ProcesoController@listProcesos')->name('listProcesos');
Route::get('/procesos/crear', 'ProcesoController@addProceso')->name('addProceso');//create
Route::post('/procesos','ProcesoController@saveProceso')->name('saveProceso');//store

Route::get('/procesos/{proceso}/edit','ProcesoController@editProceso')->name('editProceso');//edit
Route::put('/procesos/{proceso}','ProcesoController@updateProceso')->name('updateProceso');//update
Route::delete('/procesos/{proceso}','ProcesoController@deleteProceso')->name('deleteProceso');//delete

//autentificacion

//Auth::routes();
        Route::get('login', function () {return view('admin.auth.login');})->name('Login');
        //Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login')->name('login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register')->name('register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//
Route::get('/home', 'HomeController@index')->name('home');

//Rutas Sistema de Autenticacion

Route::middleware(['auth'])->group(function(){
    //Roles
    Route::post('role/store','RoleController@store')
        ->name('role.store')
        ->middleware('permission:role.create');

    Route::get('role','RoleController@index')
        ->name('role.index')
        ->middleware('permission:role.index');

    Route::get('role/create','RoleController@create')
        ->name('roles.create')
        ->middleware('permission:role.create');

    Route::put('role/{role}','RoleController@update')
        ->name('role.update')
        ->middleware('permission:role.edit');

    Route::get('role/{role}','RoleController@show')
        ->name('role.show')
        ->middleware('permission:role.show');

    Route::delete('role/{role}','RoleController@destroy')
        ->name('role.destroty')
        ->middleware('permission:role.destroy');

    Route::get('role/{role}/edit','RoleController@edit')
        ->name('role.edit')
        ->middleware('permission:role.edit');

    //Modulos
    Route::post('module/store','RoleController@store')
        ->name('role.store')
        ->middleware('permission:role.create');

    Route::get('module','ModuleController@index')
        ->name('role.index')
        ->middleware('permission:role.index');

    Route::get('module/create','ModuleController@create')
        ->name('roles.create')
        ->middleware('permission:role.create');

    Route::put('module/{role}','ModuleController@update')
        ->name('role.update')
        ->middleware('permission:role.edit');

    Route::get('module/{role}','ModuleController@show')
        ->name('role.show')
        ->middleware('permission:role.show');

    Route::delete('module/{role}','ModuleController@destroy')
        ->name('role.destroty')
        ->middleware('permission:role.destroy');

    Route::get('module/{role}/edit','ModuleController@edit')
        ->name('role.edit')
        ->middleware('permission:role.edit');

    //Users
        
    /*Route::post('user/store','RoleController@store')
        ->name('role.store')
        ->middleware('permission:role.create');*/

    Route::get('user','ModuleController@index')
        ->name('role.index')
        ->middleware('permission:role.index');

    /*Route::get('user/create','ModuleController@create')
        ->name('roles.create')
        ->middleware('permission:role.create');*/

    Route::put('user/{role}','ModuleController@update')
        ->name('role.update')
        ->middleware('permission:role.edit');

    Route::get('user/{role}','ModuleController@show')
        ->name('role.show')
        ->middleware('permission:role.show');

    Route::delete('user/{role}','ModuleController@destroy')
        ->name('role.destroty')
        ->middleware('permission:role.destroy');

    Route::get('user/{role}/edit','ModuleController@edit')
        ->name('role.edit')
        ->middleware('permission:role.edit');
});


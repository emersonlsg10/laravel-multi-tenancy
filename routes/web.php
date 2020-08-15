<?php

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

// Route::get('/', function () {
//     return redirect('/index');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '/system', 'as' => 'system.'], function () {
    Auth::routes();

    Route::group(['middleware' => 'auth:system'], function () {
        Route::get('home', function () {
            return view('system.home');
        });
    });
});

// rotas dos Tenants
Route::group(['prefix' => '/{prefix}', 'as' => 'tenant.'], function () {
    Auth::routes();

    Route::group(['middleware' => 'auth:tenant'], function () {

        // Route::name('home')->get('home', function () {
        //     return view('tenant.home');
        // });

        Route::name('index')->get('index', function () {
            return view('tenant.index');
        });

        // rota de users
        Route::resource('users', 'UserController');
        Route::resource('users/cadastro', 'UserController@create');
        Route::post('/users/cadastro', 'UserController@register')->name('users.register');

        Route::get('/users/editar/{id}', 'UserController@edit')->name('users.edit');
        Route::resource('users/update', 'UserController@update');
        Route::post('/users/update', 'UserController@updateRegister')->name('users.updateRegister');
        Route::get('/users/deletar/{id}', 'UserController@delete')->name('users.delete');
        // rota de users

        // rota de Collaborator
        Route::resource('collaborators', 'CollaboratorController');
        Route::resource('collaborators/cadastro', 'CollaboratorController@create');
        Route::post('/collaborators/cadastro', 'CollaboratorController@register')->name('collaborators.register');

        Route::get('/collaborators/editar/{id}', 'CollaboratorController@edit')->name('collaborators.edit');
        Route::resource('collaborators/update', 'CollaboratorController@update');
        Route::post('/collaborators/update', 'CollaboratorController@updateRegister')->name('collaborators.updateRegister');
        Route::get('/collaborators/deletar/{id}', 'CollaboratorController@delete')->name('collaborators.delete');
        // rota de Collaborator

        // rota de clients
        Route::resource('clients', 'ClientController');
        Route::resource('clients/cadastro', 'ClientController@create');
        Route::post('/clients/cadastro', 'ClientController@register')->name('clients.register');

        Route::get('/clients/editar/{id}', 'ClientController@edit')->name('clients.edit');
        Route::resource('clients/update', 'ClientController@update');
        Route::post('/clients/update', 'ClientController@updateRegister')->name('clients.updateRegister');
        Route::get('/clients/deletar/{id}', 'ClientController@delete')->name('clients.delete');
        // rota de clients

        // rota de providers
        Route::resource('providers', 'ProviderController');
        Route::resource('providers/cadastro', 'ProviderController@create');
        Route::post('/providers/cadastro', 'ProviderController@register')->name('providers.register');

        Route::get('/providers/editar/{id}', 'ProviderController@edit')->name('providers.edit');
        Route::resource('providers/update', 'ProviderController@update');
        Route::post('/providers/update', 'ProviderController@updateRegister')->name('providers.updateRegister');
        Route::get('/providers/deletar/{id}', 'ProviderController@delete')->name('providers.delete');
        // rota de providers

        // rota de materials
        Route::resource('materials', 'MaterialController');
        Route::resource('materials/cadastro', 'MaterialController@create');
        Route::post('/materials/cadastro', 'MaterialController@register')->name('materials.register');

        Route::get('/materials/editar/{id}', 'MaterialController@edit')->name('materials.edit');
        Route::resource('materials/update', 'MaterialController@update');
        Route::post('/materials/update', 'MaterialController@updateRegister')->name('materials.updateRegister');
        Route::get('/materials/deletar/{id}', 'MaterialController@delete')->name('materials.delete');
        // rota de materials

        Route::resource('categories', 'CategoryController');
    });
});

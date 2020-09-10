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

Route::get('/', function () {
    return view('plans');
});

// rota de registro
Route::get('/register-plan/{plan}', 'RegisterPlanController@create')->name('register-plan.create');
Route::post('/register-plan/cadastro', 'RegisterPlanController@register')->name('register-plan.register');
// rota de registro

// rota de contato
Route::post('/register-contact/cadastro', 'ContactController@register')->name('register-contact.register');
// rota de contato

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
        Route::get('index', 'HomeController@index')->name('index');
        Route::get('calendar', 'HomeController@calendar')->name('calendar');

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

        // rota de estoque
        Route::resource('stocks', 'StockController');
        Route::resource('stocks/cadastro', 'StockController@create');
        Route::post('/stocks/cadastro', 'StockController@register')->name('stocks.register');

        Route::get('/stocks/editar/{id}', 'StockController@edit')->name('stocks.edit');
        Route::resource('stocks/update', 'StockController@update');
        Route::post('/stocks/update', 'StockController@updateRegister')->name('stocks.updateRegister');
        Route::get('/stocks/deletar/{id}', 'StockController@delete')->name('stocks.delete');
        // rota de estoque

        // rota de brindes - gifts
        Route::resource('gifts', 'GiftController');
        Route::resource('gifts/cadastro', 'GiftController@create');
        Route::post('/gifts/cadastro', 'GiftController@register')->name('gifts.register');

        Route::get('/gifts/editar/{id}', 'GiftController@edit')->name('gifts.edit');
        Route::resource('gifts/update', 'GiftController@update');
        Route::post('/gifts/update', 'GiftController@updateRegister')->name('gifts.updateRegister');
        Route::get('/gifts/deletar/{id}', 'GiftController@delete')->name('gifts.delete');
        // rota de brindes - gifts

        // rota de maquinas
        Route::resource('machines', 'MachineController');
        Route::resource('machines/cadastro', 'MachineController@create');
        Route::post('/machines/cadastro', 'MachineController@register')->name('machines.register');

        Route::get('/machines/editar/{id}', 'MachineController@edit')->name('machines.edit');
        Route::resource('machines/update', 'MachineController@update');
        Route::post('/machines/update', 'MachineController@updateRegister')->name('machines.updateRegister');
        Route::get('/machines/deletar/{id}', 'MachineController@delete')->name('machines.delete');
        // rota de maquinas

        // rota de serviços
        Route::resource('services', 'ServiceController');
        Route::resource('services/cadastro', 'ServiceController@create');
        Route::post('/services/cadastro', 'ServiceController@register')->name('services.register');

        Route::get('/services/editar/{id}', 'ServiceController@edit')->name('services.edit');
        Route::resource('services/update', 'ServiceController@update');
        Route::post('/services/update', 'ServiceController@updateRegister')->name('services.updateRegister');
        Route::get('/services/deletar/{id}', 'ServiceController@delete')->name('services.delete');
        // rota de serviços

        // rota de orçamento
        Route::resource('budgets', 'BudgetController');
        Route::resource('budgets/cadastro', 'BudgetController@create');
        Route::post('/budgets/cadastro', 'BudgetController@register')->name('budgets.register');

        Route::get('/budgets/editar/{id}', 'BudgetController@edit')->name('budgets.edit');
        Route::resource('budgets/update', 'BudgetController@update');
        Route::post('/budgets/update', 'BudgetController@updateRegister')->name('budgets.updateRegister');
        Route::get('/budgets/deletar/{id}', 'BudgetController@delete')->name('budgets.delete');
        // rota de orçamento

        // rota de vestuário
        Route::resource('clothings', 'ClothingController');
        Route::resource('clothings/cadastro', 'ClothingController@create');
        Route::post('/clothings/cadastro', 'ClothingController@register')->name('clothings.register');

        Route::get('/clothings/editar/{id}', 'ClothingController@edit')->name('clothings.edit');
        Route::resource('clothings/update', 'ClothingController@update');
        Route::post('/clothings/update', 'ClothingController@updateRegister')->name('clothings.updateRegister');
        Route::get('/clothings/deletar/{id}', 'ClothingController@delete')->name('clothings.delete');
        // rota de vestuário

        // rota de contas a pagar
        Route::resource('accounts', 'AccountController');
        Route::resource('accounts/cadastro', 'AccountController@create');
        Route::post('/accounts/cadastro', 'AccountController@register')->name('accounts.register');

        Route::get('/accounts/editar/{id}', 'AccountController@edit')->name('accounts.edit');
        Route::resource('accounts/update', 'AccountController@update');
        Route::post('/accounts/update', 'AccountController@updateRegister')->name('accounts.updateRegister');
        Route::get('/accounts/deletar/{id}', 'AccountController@delete')->name('accounts.delete');
        // rota de contas a pagar

        // rota de contas a receber
        Route::resource('receipts', 'ReceiptController');
        Route::resource('receipts/cadastro', 'ReceiptController@create');
        Route::post('/receipts/cadastro', 'ReceiptController@register')->name('receipts.register');

        Route::get('/receipts/editar/{id}', 'ReceiptController@edit')->name('receipts.edit');
        Route::resource('receipts/update', 'ReceiptController@update');
        Route::post('/receipts/update', 'ReceiptController@updateRegister')->name('receipts.updateRegister');
        Route::get('/receipts/deletar/{id}', 'ReceiptController@delete')->name('receipts.delete');
        // rota de contas a receber

        // rota de compra
        Route::resource('shoppings', 'ShoppingController');
        Route::resource('shoppings/cadastro', 'ShoppingController@create');
        Route::post('/shoppings/cadastro', 'ShoppingController@register')->name('shoppings.register');

        Route::get('/shoppings/editar/{id}', 'ShoppingController@edit')->name('shoppings.edit');
        Route::resource('shoppings/update', 'ShoppingController@update');
        Route::post('/shoppings/update', 'ShoppingController@updateRegister')->name('shoppings.updateRegister');
        Route::get('/shoppings/deletar/{id}', 'ShoppingController@delete')->name('shoppings.delete');
        // rota de compra

        // rota de caixa
        Route::resource('cashiers', 'CashierController');
        Route::resource('cashiers/cadastro', 'CashierController@create');
        Route::post('/cashiers/cadastro', 'CashierController@register')->name('cashiers.register');

        Route::get('/cashiers/editar/{id}', 'CashierController@edit')->name('cashiers.edit');
        Route::resource('cashiers/update', 'CashierController@update');
        Route::post('/cashiers/update', 'CashierController@updateRegister')->name('cashiers.updateRegister');
        Route::get('/cashiers/deletar/{id}', 'CashierController@delete')->name('cashiers.delete');
        // rota de caixa

        // rota de pagamentos
        Route::resource('payments', 'PaymentController');
        Route::resource('payments/cadastro', 'PaymentController@create');
        Route::post('/payments/cadastro', 'PaymentController@register')->name('payments.register');

        Route::get('/payments/editar/{id}', 'PaymentController@edit')->name('payments.edit');
        Route::resource('payments/update', 'PaymentController@update');
        Route::post('/payments/update', 'PaymentController@updateRegister')->name('payments.updateRegister');
        Route::get('/payments/deletar/{id}', 'PaymentController@delete')->name('payments.delete');
        // rota de pagamentos

        Route::resource('categories', 'CategoryController');
    });
});

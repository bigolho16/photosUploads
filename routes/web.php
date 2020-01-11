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

Route::group(["namespace" => "RoutesController"], function () {
	Route::match(["get", "post"],"loja/uploadb", "TrackRoutes@index")->name("uploadb.index");

});

//Route::middleware("auth:api", 'throttle:60,1')->group(function () {
Route::group(['namespace' => 'Validacoes'], function () {
	Route::resource("loja/uploadb/validacoes", "ValidateTablesController")->parameters(["validacoes" => "id?"])->middleware("auth");

});

//});
// Route::match(["get", "post"], "shippingPlace", "AplicacaoCentral\shippingPlace@mainFormValidate");

//

// Route::get("test", "tests/Unit/methods@testExample");

// Rotas geradas por Auth::routes()
// $this->get("login", "Auth\LoginController@showLoginForm")->name("login");
// $this->post("login", "Auth\LoginController@login");
// $this->post("logout", "Auth\LoginController@logout")->name("logout");

// // Registration Routes...
// $this->get("register", "Auth\RegisterController@showRegistrationForm")->name("register");
// $this->post("register", "Auth\RegisterController@register");

// // Password Reset Routes...
// $this->get("password/reset", "Auth\ForgotPasswordController@showLinkRequestForm");
// $this->post("password/email", "Auth\ForgotPasswordController@sendResetLinkEmail");
// $this->get("password/reset/{token}", "Auth\ResetPasswordController@showResetForm");
// $this->post("password/reset", "Auth\ResetPasswordController@reset");
Auth::routes();
Route::get("accounts/login", "Accounts\LoginController@index")->name("home")->middleware("auth");



// Route::group(['auth'], function() {
//         Route::get('/', 'ProductsController@index')->name('home');

//         Route::get('product_lines','ProductLinesController@index')->name('product_line_index');

//         Route::get('product_lines/{product_line}','ProductLinesController@show')->name('product_line_show');

//         Route::post('product_lines/{product_line}/add_product','ProductLinesController@productStore')->name('product_line_product_store');

//         Route::get('products','ProductsController@index')->name('product_index'); Route::post('products','ProductsController@store')->name('product_store');Route::get('products/{product}','ProductsController@show')->name('product_show');

//         Route::get('products/{product}/edit','ProductsController@edit')->name('product_edit');

//         Route::patch('products/{product}','ProductsController@update')->name('product_update');
        
//         Route::get('products/{product}/delete','ProductsController@delete')->name('product_delete');
// });
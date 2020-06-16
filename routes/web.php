<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();


// Route::get('/', function () {
//     return view('site.home');
// })->name('site.home');

Route::get('/', 'HomeController@index')->name('home');
//Rota para criar o usuario
Route::get('usuarios/novo','UserController@create')->name('user.add');

Route::get('usuarios','UserController@index')->name('users.listAll');

Route::get('usuarios/editar/{user}','UserController@formEditUser')->name('user.formEdit');

Route::get('usuarios/{user}','UserController@listUser')->name('user.list');

//post
Route::post('usuarios/salvar', 'UserController@store')->name('user.store');

//put/patch
Route::put('usuarios/edit/{user}','UserController@editar')->name('user.editar');

// //Delete
Route::delete('usuarios/destroy/{user}', 'UserController@deletar')->name('user.deletar');



//Rota para a lista de setores do sistema
Route::get('/setores', 'SetorController@show');
Route::get('/setores/json', 'SetorController@index');




Route::get('session', 'SessionController@session')->name('session');

//Route::view('admin', 'admin.home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

// Route::get('/cursos', function () {
//    return view('site.cursos');
// })->name('site.curses');

// Route::get('/contato', function () {
//    return view('site.contato');
// })->name('site.contact');


// Route::get('/painel', function () {
//    return view('admin.home');
// })->name('admin.home');


// Route::get('/con',function (Request $request) {
//    return $request->all();
// } )->name('con');

// Route::view('form', 'site.upload.form');
// Route::post('/upload', 'UploadController@upload')->name('site.upload');

// Route::resource('produtos', 'ProductsController')->names('products')->parameters(['produtos' => 'products']);



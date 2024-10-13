<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

//Rotas SITE

//index
Route::get('/', [HomeController::class, 'index']);

// about
Route::get('/about', [HomeController::class, 'showAboutPage']);

//Controlador de ação única, sem metodos.
Route::get('/single-action', SingleActionController::class);


/* - Controlador de recursos (C.R.U.D) 
 * - Não precisa declarar as rotas separadas para cada operação.
 * - Ao criar o controlador de recurusos, ele já com os metodos.
 * - Route Resource - Rota de Recursos (CRUD)
*/
Route::resource('/blog', BlogController::class);

/*Ao Criar essa rota, apontando para o controlador de recursos, automaticamente o laravel vai gerar
Todas essas rotas:
GET|HEAD        blog ....................................... blog.index › BlogController@index
  POST            blog ....................................... blog.store › BlogController@store
  POST            blog ....................................... blog.store › BlogController@store
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  GET|HEAD        blog/{blog} .................................. blog.show › BlogController@show
  PUT|PATCH       blog/{blog} .............................. blog.update › BlogController@update
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  GET|HEAD        blog/{blog} .................................. blog.show › BlogController@show
  PUT|PATCH       blog/{blog} .............................. blog.update › BlogController@update
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  GET|HEAD        blog/{blog} .................................. blog.show › BlogController@show
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  POST            blog ....................................... blog.store › BlogController@store
  POST            blog ....................................... blog.store › BlogController@store
  GET|HEAD        blog/create .............................. blog.create › BlogController@create
  GET|HEAD        blog/{blog} .................................. blog.show › BlogController@show
  PUT|PATCH       blog/{blog} .............................. blog.update › BlogController@update
  DELETE          blog/{blog} ............................ blog.destroy › BlogController@destroy
  GET|HEAD        blog/{blog}/edit ............................. blog.edit › BlogController@edit
 */

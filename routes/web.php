<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});






/* EXEMPLOS DE ROTAS COM VARIÁVEIS DINAMICAS PARA O ARQUIVO DE VIEW, 
PASSANDO COMO PARAMETRO UMA MATRIZ */

/* Route::get('/contact', function () {

    $title = "Página de contato";
    $description = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod accusantium saepe laborum eaque molestias incidunt
        placeat id, aliquam et aut! Velit non officiis unde cupiditate maiores sint harum magnam illo.";
    $books = ["Deep Work", "Steal like a artist", "Story Brand"];
    return view('contact.index', ['title' => $title, 'description' => $description, 'books' => $books]);
})->name('contact'); */


//EXEMPLOS DE ROTAS PARA ESTUDOS E REFERÊNCIAS

/** 
 * Métodos de Rotas
 *
 * 1 - Get - Usado para obter dados.
 * 2 - POST - Usado para enviar/armazenar novos dados.
 * 3 - PUT - Usado para atualizar todos os dados de um recurso (atualiza a linha inteira do BD).
 * 4 - PATH - Usado para atualizar parcialmente os dados de um recurso (atualiza parte de uma linha no BD).
 * 5 - DELETE - Usado para remover um recurso (deletar algo do BD).
 */

/**
 * Rotas de fallback
 *
 * Route::fallback(function () {
 *     // Rota que substitui a página 404 padrão por uma mensagem ou view personalizada.
 *     return "Ops, página não encontrada";
 * });
 */

/**
 * EXEMPLOS
 *
 * Route::get('get-route', function () {
 *     // Acessado diretamente pela URL, por exemplo, acessando http://my-laravel.test/get-route
 *     return;
 * });
 *
 * Route::post('post-route', function () {
 *     // Não pode ser acessado diretamente pela URL no navegador.
 *     // Deve ser enviado através de um formulário ou uma requisição POST via API.
 *     return;
 * });
 *
 * Route::put('put-route', function () {
 *     // Utilizado para atualizar todos os dados de um recurso.
 *     return;
 * });
 *
 * Route::patch('path-route', function () {
 *     // Utilizado para atualizar parcialmente os dados de um recurso.
 *     return;
 * });
 *
 * Route::delete('delete-route', function () {
 *     // Utilizado para remover um recurso do servidor.
 *     return;
 * });
 */

/**
 * Rotas Comuns
 *
 * Route::get('/about', function () {
 *     // Retorna a página sobre.
 *     return "Esta é a página sobre";
 * })->name('about');
 *
 * Route::get('/user/{id}/{slug}', function ($id, $slug) {
 *     // Exemplo de rota com parâmetros dinâmicos.
 *     return "Olá usuário" . " " . "ID:" . $id  . " " . $slug;
 * })->name('usuario');
 */

/**
 * GRUPO DE ROTAS BLOG -> PREFIX VAI NA URL E AS SERVE COM NOME DA ROTA
 *
 * Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
 *     Route::get('/create', function () {
 *         // Página de criação de blogs
 *         return "Página de criação de blogs";
 *     })->name('create');
 *     Route::get('/edit', function () {
 *         // Página de edição de blogs
 *         return "Página de edição de blogs";
 *     })->name('edit');
 *     Route::get('/show', function () {
 *         // Página de exibição do blog
 *         return "Página de exibição do blog";
 *     })->name('show');
 * });
 */

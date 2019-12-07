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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rota Main 
Route::get('/', 'MainController@index')->name('main');
Route::get('{$id}', 'MainController@pager')->name('main');

//Rotas das Categorias
/* Rotas com middlewares só serão acessadas por usuarios autenticados */
Route::get('categorias' ,'CategoriasController@index')->middleware('auth');
Route::get('categorias/{id}/create', 'CategoriasController@create')->middleware('auth');
Route::post('categorias/{id}/store', 'CategoriasController@store')->middleware('auth');
Route::get('categorias/{id}/show', 'CategoriasController@show'); // Rota para exibir as categorias
Route::get('categorias/{id}/edit', 'CategoriasController@edit')->middleware('auth');
Route::put('categorias/{id}/update', 'CategoriasController@update')->middleware('auth');
Route::get('categorias/search','CategoriasController@search');  //Rota da busca de categorias
Route::get('categorias/{id}/remove','CategoriasController@remove')->middleware('auth'); //passagem de parametro pela rota
Route::get('categorias/{id}/destroy','CategoriasController@destroy')->middleware('auth');


//Rotas das Noticias
/* Rotas com middlewares só serão acessadas por usuarios autenticados */
Route::get('noticias', 'NoticiasController@index')->middleware('auth');
Route::get('noticias/{id}/show', 'NoticiasController@show');
Route::get('noticias/{id}/create', 'NoticiasController@create')->middleware('auth');
Route::post('noticias/{id}/store',  'NoticiasController@store')->middleware('auth');
Route::get('noticias/search', 'NoticiasController@search')->middleware('auth');
Route::get('noticias/autocomplete', 'NoticiasController@autocomplete')->name('autocomplete')->middleware('auth');
Route::get('noticias/{id}/edit','NoticiasController@edit')->middleware('auth');
Route::put('noticias/{id}/update', 'NoticiasController@update')->middleware('auth');
Route::get('noticias/{id}/remove','NoticiasController@remove')->middleware('auth');
Route::get('noticias/{id}/destroy','NoticiasController@destroy')->middleware('auth');
Route::get('noticias/{id}/modal', 'NoticiasController@modal');
Route::get('noticias/{id}/sendmail','NoticiasController@sendmail');

//Rotas das imagens
Route::get('imagens', 'ImagensController@index')->middleware('auth');
Route::get('imagens/{id}/create',  'ImagensController@create')->middleware('auth');
Route::post('imagens/{id}/upload',  'ImagensController@upload')->middleware('auth');
Route::post('imagens/{id}/store',  'ImagensController@store')->middleware('auth');
Route::get('imagens/{id}/remove', 'ImagensController@remove')->middleware('auth');
route::get('imagens/{id}/destroy', 'ImagensController@destroy')->middleware('auth');

//Rotas do Profile_users
#Route::get('profile/{id}', 'Profile_UsersController@index');
#Route::get('profile/{id}/create', 'Profile_UsersController@create');
#Route::post('profile/store', 'Profile_UsersController@store');
#Route::get('profile/{id}/edit', 'Profile_UsersController@edit');
#Route::put('profile/{id}/update', 'Profile_UsersController@update');
#Route::get('profile/{id}/remove', 'Profile_UsersController@remove');
#Route::get('profile/{id}/destroy', 'Profile_UsersController@destroy');

//Rotas do upload de imagens do profile
Route::get('imagem_profile', 'Imagem_ProfileController@index');
Route::get('imagem_profile/{id}/create', 'Imagem_ProfileController@create');
Route::post('imagem_profile/{id}/upload', 'Imagem_ProfileController@upload');
Route::get('imagem_profile/{id}/remove', 'Imagem_ProfileController@remove');
Route::get('imagem_profile/{id}/destroy', 'Imagem_ProfileController@destroy');

//Rotas da NewsLetter
/* Rotas com middlewares só serão acessadas por usuarios autenticados */	
Route::get('newsletter', 'NewsLetterController@index');
Route::get('newsletter/create', 'NewsLetterController@create');
Route::post('newsletter/store',  'NewsLetterController@store');
Route::get('newsletter/{id}/edit',  'NewsLetterController@edit')->middleware('auth');
Route::put('newsletter/{id}/update', 'NewsLetterController@update')->middleware('auth');
Route::get('newsletter/{id}/remove',  'NewsLetterController@remove')->middleware('auth');
Route::get('newsletter/{id}/destroy',  'NewsLetterController@destroy')->middleware('auth');
Route::post('newsletter/sendmail', 'NewsLetterController@sendmail')->middleware('auth');

//Rotas Dos Parceiros
Route::get('parceiros', 'ParceirosController@index');
Route::get('parceiros/create', 'ParceirosController@create');
Route::post('parceiros/store', 'ParceirosController@store');
Route::get('parceiros/{id}/edit', 'ParceirosController@edit');
Route::put('parceiros/{id}/update', 'ParceirosController@update');
Route::get('parceiros/{id}/remove', 'ParceirosController@remove');
Route::get('parceiros/{id}/destroy', 'ParceirosController@destroy');

//Rotas do upload de imagem dos parceiros
Route::get('imagem_parceiros', 'Imagem_ParceirosController@index');
Route::get('imagem_parceiros/{id}/create', 'Imagem_ParceirosController@create');
Route::post('imagem_parceiros/{id}/upload', 'Imagem_ParceirosController@upload');
Route::get('imagem_parceiros/{id}/remove', 'Imagem_ParceirosController@remove');
Route::get('imagem_parceiros/{id}/destroy', 'Imagem_ParceirosController@destroy');

//Rotas Da Galeria de Imagens
Route::get('galeria_imagens/index', 'Galeria_ImagensController@index');
Route::get('galeria_imagens/{id}/create', 'Galeria_ImagensController@create');
Route::post('galeria_imagens/{id}/upload', 'Galeria_ImagensController@upload');
Route::get('galeria_imagens/{id}/remove', 'Galeria_ImagensController@remove');
Route::get('galeria_imagens/{id}/destroy', 'Galeria_ImagensController@destroy');

//Rota Comentarios
Route::get('comentarios', 'ComentariosController@index')->middleware('auth');
Route::get('comentarios/create', 'ComentariosController@create');
Route::post('comentarios/{id}/store', 'ComentariosController@store');
Route::get('comentarios/{id}/remove', 'ComentariosController@remove')->middleware('auth');
Route::get('comentarios/{id}/destroy', 'ComentariosController@destroy')->middleware('auth');

//Rotas do Eventos
Route::get('eventos', 'EventosController@index')->middleware('auth');
Route::get('eventos/{id}/create', 'EventosController@create')->middleware('auth');
Route::post('eventos/{id}/store', 'EventosController@store')->middleware('auth');
Route::get('eventos/{id}/edit', 'EventosController@edit')->middleware('auth');
Route::put('eventos/{id}/update', 'EventosController@update')->middleware('auth');
Route::get('eventos/{id}/remove', 'EventosController@remove')->middleware('auth');
Route::get('eventos/{id}/destroy', 'EventosController@destroy')->middleware('auth');
Route::get('eventos/show', 'EventosController@show');
Route::get('eventos/{id}/display', 'EventosController@display');

//Upload de imagens dos Eventos
Route::get('imagem_eventos', 'Imagem_EventosController@index')->middleware('auth');
Route::get('imagem_eventos/{id_evento}/create', 'Imagem_EventosController@create')->middleware('auth');
Route::post('imagem_eventos/{id_evento}/upload', 'Imagem_EventosController@upload')->middleware('auth');
Route::get('imagem_eventos/{id_evento}/remove', 'Imagem_EventosController@remove')->middleware('auth');
Route::get('imagem_eventos/{id_evento}/destroy', 'Imagem_EventosController@destroy')->middleware('auth');

//Rotas De Videos que não tem noticia ou materia -->
Route::get('videos', 'VideosController@index')->middleware('auth');
Route::get('videos/{id}/create', 'VideosController@create')->middleware('auth');
Route::post('videos/{id}/upload', 'VideosController@upload')->middleware('auth');
Route::get('videos/{id}/remove', 'VideosController@remove')->middleware('auth');
Route::get('videos/{id}/destroy', 'VideosController@destroy')->middleware('auth');

//Rota Sobre Tarcísio Padua
Route::get('sobre', 'SobreController@index');

//Rotas de Contato
Route::get('contacts', 'ContactsController@index');

//Rotas Contatos de Noticias
Route::get('contacts_news', 'Contacts_NewsController@index');
Route::get('contacts_news/create', 'Contacts_NewsController@create');
Route::get('contacts_news/store', 'Contacts_NewsController@store');
Route::get('contacts_news/{id}/show', 'Contacts_NewsController@show');
Route::get('contacts_news/{id}/edit', 'Contacts_NewsController@edit');
Route::get('contacts_news/{id}/update', 'Contacts_NewsController@update');
Route::get('contacts_news/{id}/remove', 'Contacts_NewsController@remove');
Route::get('contacts_news/{id}/destroy', 'Contacts_NewsController@destroy');


/*
*
*Rotas de Estudo
*/



//Rotas do Vue
//Route::get('/{any}', 'SpaController@index')->where('any', '.*');




Route::get('users/{id}/edit', ['uses' => 'UsersController@edit', 'as' => 'users.edit']);
Route::put('users/{id}/update', ['uses' => 'UsersController@update', 'as' => 'users.update']);
Route::get('users/all_users', ['uses' => 'UsersController@allUsers', 'as' => 'users.all_users']);
	
										



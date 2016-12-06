<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
	GET;POST;PUT;DELETE;RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
	  'uses' => 'UsersController@destroy',
	  'as' => 'admin.users.destroy'
	]);
});
/*Al agregar el ? en el parametro nombre , queda como null*/

/*Route::get('articles/{nombre?}',function($nombre){
	echo "El nombre que has colocado es : ".$nombre;
});*/

/*Route::get('articles',[
	'as' => 'articles'
	'uses' =>'UserController@index0'
]);*/


// Route::group(['prefix' => 'articles'],function(){
// 	Sirve para agregar subprefijos a las rutas 
// 	Route::get('view/{id}',[
// 		'uses' => 'TestController@view',
// 		'as'   => 'articlesView'
// 	]);
// });
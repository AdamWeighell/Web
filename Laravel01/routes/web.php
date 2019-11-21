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

/* GET /goalscorer (goalscorer)
GET /goalscorer/create (create)
POST /goalscorer (store)
GET /goalscorer/1 (show)
GET /goalscorer/edit(edit)
PATCH /goalscorer/1 (update)
DESTROY /goalscorer/1 (destroy)



*/
Route::get('/', 'PagesController@home');
Route::get('/score', 'PagesController@score');
Route::get('/players', 'PagesController@players');

Route::resource('goalscorers','goalscorerController');

Route::post('goalscorers/{goalscorer}/fixture','GoalscorerFixtureController@store');
Route::patch('/fixture/{fixtures}','GoalscorerFixtureController@update');
//Route::get('/goalscorers/goalscorer', 'goalscorerController@goalscorer');
//Route::get('/goalscorers/create', 'goalscorerController@create');
//Route::get('/goalscorers/{goalscorer}', 'goalscorerController@show');
//Route::post('/goalscorers', 'goalscorerController@store');
//Route::get('/goalscorers/{goalscorer}/edit', 'goalscorerController@edit');
//Route::patch('/goalscorers/{goalscorer}', 'goalscorerController@update');
//Route::delete('/goalscorers/{goalscorer}', 'goalscorerController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

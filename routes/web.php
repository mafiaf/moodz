<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return realpath(base_path('resources/views'));
    return view('welcome');
});

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);

/* Een route creeren voor crud. actie is users en actie is de type route die er gebruikt wordt.


Route::get('users', function () {
  $users = [
      '0' => [
            'first_name' => 'Baris',
            'last_name' => 'Firat',
            'location' => 'Netherlands'
    ],
    '1' => [
          'first_name' => 'Carolien',
          'last_name' => 'Said',
          'location' => 'Netherlands'
  ]
];
  return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');

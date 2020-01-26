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

use App\Events\pusherevent;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', [
    'uses' => 'AccessController@user',
    'as' => 'user',
    'middleware' => 'checkrole',
    'roles' => ['User', 'Admin', 'Administrator'],

]);
Route::get('/admin', [
    'uses' => 'AccessController@admin',
    'as' => 'admin',
    'middleware' => 'checkrole',
    'roles' => ['Admin', 'Administrator'],

]);
Route::get('/administrator', [
    'uses' => 'AccessController@administrator',
    'as' => 'administrator',
    'middleware' => 'checkrole',
    'roles' => ['Administrator'],

]);

Route::post('/assighrole/{user}', [
    'uses' => 'AccessController@assighrole',
    'as' => 'assighrole', //route name
    'middleware' => 'checkrole',
    'roles' => ['Administrator'],

]);


//pusher practice

Route::get('/pusherpractice', function () {

    return view('pusherdata');
});

class text
{

    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
}

Route::post('/pusherevent', function () {

    $text =  request('text');

    event(new pusherevent(new text($text)));

    return back();
});

Route::get('/filterdatapusher', function () {

    return view('filterdatapusher');
});

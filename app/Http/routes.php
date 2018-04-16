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

//不知道為什麼沒有用?session
Route::group(['middleware' => ['web']], function () {

});

	// Authentication Routes
 	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
 	Route::post('auth/login', 'Auth\AuthController@postLogin');
 	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
 	// Registration Routes
 	Route::get('auth/register', 'Auth\AuthController@getRegister');
 	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password Reset Routes
 	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
 	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
 	Route::post('password/reset', 'Auth\PasswordController@reset');

	// Categories
 	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
 	Route::resource('tags', 'TagController', ['except' => ['create']]);

	// Comments
 	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
 	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
 	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
 	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
    Route::post('contact', 'PagesController@postContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts','PostController');


/*
Route::get('foo', function () {
    return 'Hello World';
});

Route::get('test', function () {
	phpinfo();
});

Route::get('test2', function () {
	//$bdd = new PDO ('mysql:host=127.0.0.1:3306;dbname:l53_crud', 'homestead', 'secret');
$dsn = 'mysql:dbname=l53_crud;host=localhost';
$user = 'homestead';
$password = 'secret';

try
{
    $dbh = new PDO($dsn, $user, $password);
    echo 'abc';
}
catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}

});



Route::post('/submitContact', 'ContactUsController@store');

Route::get('blade', function () {
    return view('child');
});
*/



/*
	Route::get('/', function () {
	    return view('welcome');
	});
*/
/*
	Route::get('/contactUs', 'ContactUsController@index');

	Route::get('/about', function () {
		$first = 'Alex';
		$last = 'Curles';
		$full = $first . " ". $last;
		$email = 'a@a.com';

		$data=[];
		$data['abc']='abc';
		$data['def']='def';
	    //return view('about')->with("fullname", $full);
	    return view('about')->withfullname($full)->withemail($email)->withdata($data);
	});
*/


Route::auth();

Route::get('/home', 'HomeController@index');

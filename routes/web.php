<?php
use App\Comment;
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


//pages routes
Route::get('/', ['uses'=>'PagesController@index', 'as'=>'pages.index']);
Route::post('contact', ['uses'=>'PagesController@contact','as'=>'pages.contact']);

//members routes
Route::get('members', ['uses'=>'MembersController@index', 'as'=>'members']);
Route::get('members/show/{id}', ['uses'=>'MembersController@show','as'=>'members.show']);

//Login Routes
Route::get('login', ['uses'=>'LoginController@index','as'=>'login.index']);
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');

//Dashboard routes for members
Route::get('dashboard', ['uses'=>'DashboardController@index', 'as'=>'dashboard']);
Route::get('dashboard/create-members', ['uses'=>'DashboardController@create', 'as'=>'dashboard.create']);
Route::post('dashboard/store-members', ['uses'=>'DashboardController@store', 'as'=>'dashboard.store-members']);
Route::get('dashboard/show-members/{id}', ['uses'=>'DashboardController@show','as'=>'dashboard.show-members']);
Route::get('dashboard/index-members', ['uses'=>'DashboardController@indexm','as'=>'dashboard.index-members']);
Route::get('dashboard/edit-members/{id}/edit',['uses'=>'DashboardController@edit', 'as'=>'dashboard.edit-members']);
Route::put('dashboard/update-members/{id}',['uses'=>'DashboardController@update', 'as'=>'dashboard.update-members']);
Route::delete('dashboard/delete-members/{id}',['uses'=>'DashboardController@delete', 'as'=>'dashboard.delete-members']);


//Dashboard routes for make we talk
Route::get('dashboard/create-mwt', ['uses'=>'DashboardController@create2', 'as'=>'mwt.create-mwt']);
Route::post('dashboard/store-mwt', ['uses'=>'DashboardController@store2', 'as'=>'dashboard.store-mwt']);
Route::get('dashboard/show-mwt/{id}',['uses'=>'DashboardController@show2','as'=>'dashboard.show-mwt']);
Route::get('dashboard/index-mwt', ['uses'=>'DashboardController@index2','as'=>'dashboard.index-mwt']);
Route::get('dashboard/edit-mwt/{id}/edit',['uses'=>'DashboardController@edit2', 'as'=>'dashboard.edit-mwt']);
Route::put('dashboard/update-mwt/{id}',['uses'=>'DashboardController@update2', 'as'=>'dashboard.update-mwt']);
Route::delete('dashboard/delete-mwt/{id}',['uses'=>'DashboardController@delete2', 'as'=>'dashboard.delete-mwt']);

//dashboard routes for posts
Route::get('dashboard/index-posts',['uses'=>'DashboardController@index3','as'=>'dashboard.index-posts']);
Route::get('dashboard/create-posts', ['uses'=>'DashboardController@create3', 'as'=>'dashboard.create-posts']);
Route::post('dashboard/store-posts', ['uses'=>'DashboardController@store3', 'as'=>'dashboard.store-posts']);
Route::get('dashboard/show-posts/{id}', ['uses'=>'DashboardController@show3','as'=>'dashboard.show-posts']);
Route::get('dashboard/edit-posts/{id}/edit',['uses'=>'DashboardController@edit3', 'as'=>'dashboard.edit-posts']);
Route::put('dashboard/update-posts/{id}',['uses'=>'DashboardController@update3', 'as'=>'dashboard.update-posts']);
Route::delete('dashboard/delete-posts/{id}',['uses'=>'DashboardController@delete3', 'as'=>'dashboard.delete-posts']);


//dashboard routes for categories
Route::get('dashboard/create-categories', ['uses'=>'DashboardController@create4', 'as'=>'dashboard.create-categories']);
Route::post('dashboard/store-categories', ['uses'=>'DashboardController@store4', 'as'=>'dashboard.store-categories']);
Route::get('dashboard/{category}', ['uses'=>'DashboardController@show4','as'=>'dashboard.show-categories']);
Route::get('dashboard/edit-categories/{id}/edit',['uses'=>'DashboardController@edit4', 'as'=>'dashboard.edit-categories']);
Route::put('dashboard/update-categories/{id}',['uses'=>'DashboardController@update4','as'=>'dashboard.update-categories']);




//Make we talk routes
Route::get('mwt/show-mwt/{id}', ['uses'=>'MwtController@show2','as'=>'mwt.show2']);
Route::get('mwt/index2', ['uses'=>'MwtController@index2','as'=>'mwt.index2']);


//Post routes
Route::post('posts/store', ['uses'=>'PostController@store', 'as'=>'posts.store']);
Route::get('posts/show/{id}', ['uses'=>'PostController@show','as'=>'posts.show']);
Route::get('posts/index', ['uses' =>'PostController@index', 'as'=>'posts.index']);

//comments routes
Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);
Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit','as'=>'comments.edit']);
Route::put('comments/{id}',['uses'=>'CommentsController@update','as'=>'comments.update']);
Route::delete('comments/{id}',['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);
Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete','as'=>'comments.delete']);

//Categories routes
Route::get('categories/{category}', ['uses'=>'CategoryController@showall', 'as'=>'categories.showall']);

//Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// //Recent Posts Route
// Route::get('/test','PostController@recentPost');

//Migration from Model
Route::get('/table/migrate/{model}', function($model){
$model = '\App\\' .studly_case($model);
$model::migrate();
});


// Route::get('/test', function(){
//     $te = bcrypt(111111);
//     return $te;
// });


// Route::get('send', function(){
//  		$data = array(
//             'email'=> 'aminu@gmail.com',
//             'subject'=> 'dsadsfasdfa',
//             'name'=> 'asdfasdfasdfasdfasd',
//             'body'=> 'adfadsf asdf asdf asdf adsf ads fasd fasdf',
//         );


// 	  Mail::send('emails.contact', $data, function($msg) use ($data){
//                 $msg->from($data['email']);
//                 $msg->to('igwechinonso77@gmail.com');
//                 $msg->subject($data['subject']);
//         });


// });


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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/hello-world', function () {
    return view('hello_world');
});
 */
Route::get('/hello-world', 'hello@index');


Route::get('/product', function(){
/*     $posts = App\products::all();
    $posts->each->update([
        'pdt_name' => 'mouse'
    ]);
    return $posts; */
	
	
	$p = new App\products;
    $p->pdt_name = 'keyboard';
    $p->save();
    return $p;	
	
	
	
});

//
/* Route::get('/members', function(){
	
	
    $posts = App\products::all();
    $posts->each->update([
        'pdt_name' => 'mouse'
    ]);
    return $posts;
	
	
	
});
 */

Route::resource('members', 'MemberController');

?>
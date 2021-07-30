<?php

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* 
 *Rotta con il controller
*/

Route::get('posts', 'API\PostController@index');



/* 
 * Rotta senza controller con array di chiavi/valori personalizzabile
Route::get('posts',function(){
    $posts = Post::all();

    return response()->json([
        'status' => 200,
        'resp' => $posts
    ]);
});

*Rotta senza controller con unica risposta non personalizzabile
Route::get('posts',function(){
    $posts = Post::all();
    ? si possono anche impaginare direttamente con 
    ? $post = Post::paginate()

    return $post;
});

*Rotta con relazioni tra le tabelle

Route::get('posts',function(){
    ! $posts = Post::with(['category','tags'])->paginate();
    
    return $post;
});
 */
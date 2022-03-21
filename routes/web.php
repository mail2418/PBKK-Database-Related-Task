<?php

use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
//Models
use App\Models\Category;
use App\Models\User;
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
//Formulir Views Routers
Route::get('/formulir', [FormController::class, 'formulir']);
Route::post('/hasil', [FormController::class, 'hasil']);
//Article Views Routers
Route::get('/article',[ArticleController::class, 'article']);
Route::get('/article/{article:slug}',[ArticleController::class, 'content']);

//Categories Views Routers
Route::get('/categories/{category:slug}',function(Category $category){
    return view('category',[
        'articles' =>$category->article,
        'category' =>$category->name,
    ]);
});

//Route untuk menampilkan semua category
// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'categories' => Category::all()
//     ]);
// });

//Route author 
Route::get('/author/{user:username}', function (User $user) {
    return view('author', [
        'name' => $user->name,
        'email' => $user->email,
        'articles' => $user->article,
    ]);
});
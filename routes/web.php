<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
// 対象URLにリクエストが来たら、PosstControllerにあるindexメソッドを実行する

ROute::get('/posts/create', [PostController::class, 'create']);
// 対象URLにリクエストが来たら、PosstControllerにあるcreateメソッドを実行する

Route::get('/posts/{post}', [PostController::class, 'show']);
// 対象URLにリクエストが来たら、PosstControllerにあるshowメソッドを実行する

Route::post('/posts', [PostController::class, 'store']);
// 対象URLにリクエストが来たら、PosstControllerにあるstoreメソッドを実行する

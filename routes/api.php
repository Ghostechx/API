<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Helpers\Routes\RouteHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

// use RecursiveDirectoryIterator;
// use RecursiveIteratorIterator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', [UserController::class, 'index'])->name('index');
        // ->name('index')
        // ->withoutMiddleware('auth')
        ;
        // Route::get('/users', 'UserController@index')->name('index');

        Route::get('/users/{$user}', [UserController::class, 'show'])
        ->name('show')
        // ->where('user', '[0-9]+')
        ->whereNumber('user');

        Route::post('/users', [UserController::class, 'store'])->name('store');

        Route::patch('/users', [UserController::class, 'update'])->name('update');

        Route::delete('/users', [UserController::class, 'destroy'])->name('destroy');

        Route::get('/posts', [PostController::class, 'index']);
        Route::post('/posts', [PostController::class, 'store']);
        Route::get('/posts/{post}', [PostController::class, 'show']);
        Route::post('/posts', [PostController::class, 'update']);
        Route::delete('/posts/{post}', [PostController::class, 'destroy']);


        Route::get('/comments', [CommentController::class, 'index']);
        Route::post('/comments', [CommentController::class, 'store']);
        Route::get('/comments/{comment}', [ComentController::class, 'show']);
        Route::post('/comments', [CommentController::class, 'update']);
        Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
        
// Route::prefix('v1')
//     ->group(function (){
//         RouteHelper::includeRouteFiles(__DIR__ . '/api/v1');


        // require __DIR__ . '/api/v1/users.php';
        // require __DIR__ . '/api/v1/posts.php';
        // require __DIR__ . '/api/v1/comments.php';
 //   });



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

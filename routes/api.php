<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    Route::get('/logout',  [AuthController::class, 'logout']);

    Route::get('/user',  function (Request $request) {
                                return $request->user();
                         });
    Route::get("like/{article_id}", function(Request $request, $article_id) {
        $request->user()->likes()->toggle($article_id);
        return $request->user()->likes()->count();
    });

    Route::post('/comment/{article_id}', function(Request $request, $article_id) {
        $comment = new \App\Models\Comment();
        $comment->content = $request->content;
        $comment->article_id = $article_id;
        $comment->user_id = $request->user()->id;
        $comment->save();
        return $comment;
    });

    Route::get('/removecomment/{comment_id}', function(Request $request, $comment_id) {
        $comment = \App\Models\Comment::findOrFail($comment_id);
        if($comment->user_id == $request->user()->id) {
            $comment->delete();
            return "Comment deleted";
        }
        return "You can't delete this comment";
    });
});


Route::get("/articles", function() {
    return \App\Models\Article::all();
});

Route::get("/article/{id}", function($id) {
    return \App\Models\Article::findOrFail($id);
});

Route::post('/postarticle', function(Request $request) {
    
    $article = new \App\Models\Article();
    $article->title = $request->title;
    $article->content = $request->content;
    $article->thumbnailURL = $request->thumbnailURL;
    $article->mediaType = $request->mediaType;
    $article->mediaURL = $request->mediaURL;
    $article->leadStory = $request->leadStory;
    
    $article->save();
    return $article;
});

Route::get('toparticles', function() {
    
    $articles = \App\Models\Article::all();
    $topArticles = [];
    foreach($articles as $article) {
        $topArticles[$article->id] = $article->likes()->count();
       
    }
    arsort($topArticles);
    $topArticles = array_slice($topArticles, 0, 10, true);
    $topArticles = array_keys($topArticles);
    $topArticles = \App\Models\Article::find($topArticles);
    //return articles with likes count
    
    
});

//get all articles with comments
Route::get("/articleswithcomments", function() {
    return \App\Models\Article::with("comments")->get();
});

Route::get("/countarticlelikes/{id}", function(Request $request, $id) {
    return \App\Models\Article::findOrFail($id)->likes()->count();
});



Route::get("/comments/{article_id}", function($article_id) {
    return \App\Models\Comment::where("article_id", $article_id)->get();
});




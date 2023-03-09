<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Models\Article;
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
        $comment->content = $request->input("content");
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


    Route::get('/getLevel', function(Request $request) {
        return $request->user()->level;
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

    $article->title = $request->input("title");
    $article->content = $request->input("content");
    $article->sumary = $request->input("sumary");
    $article->thumbnailURL = $request->thumbnailURL;
    $article->mediaType = $request->mediaType;
    $article->mediaURL = $request->mediaURL;
    $article->leadStory = $request->leadStory;


    $article->save();
    $tags = explode(" ",$request->tags);
    foreach($tags as $tag) {
        $t = \App\Models\Tag::where("name", $tag)->first();
        if($t == null) {
            $t = new \App\Models\Tag();
            $t->name = $tag;
            $t->save();
        }
        $article->tags()->attach($t->id);
    }
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
    return $topArticles;



});

//get all articles with comments
Route::get("/articleswithcomments", function() {
    return \App\Models\Article::with("comments")->get();
});


//Count likes from an article
Route::get("/countarticlelikes/{id}", function(Request $request, $id) {
    return \App\Models\Article::findOrFail($id)->likes()->count();
});
//Get all tags from an article
Route::get("/tags/{article_id}", function(Request $request, $article_id){
    return \App\Models\Article::findOrFail($article_id)->tags;
});

//Get all articles from a tag
Route::get("/articles/{tag_id}", function (Request $request, $tag_id){
    return \App\Models\Tag::findOrFail($tag_id)->articles;
});

//Get all coments from an article
Route::get("/comments/{article_id}", function($article_id) {
    return \App\Models\Comment::where("article_id", $article_id)->get();
});




<?php
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\StudentCountController;
use App\Http\Controllers\LikeDislikeController;

//skill model
use App\Models\Skill;
use App\Models\Project;
use App\Models\StudentCount;
use App\Models\Post;

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
//ui-panel
Route::get('/', function () {
    $skills = Skill::paginate(5);
    $projects = Project::all();
    $studentcounts = StudentCount::all();
    $posts = Post::latest()->take(3)->get(); 
    return view('ui-panel.index', compact('skills', 'projects','studentcounts','posts'));
});
Route::get('/posts/{id}/details',[UiController::class,'details']);

Route::post('/post/like',[LikeDislikeController::class,'like']);
Route::post('/post/dislike',[LikeDislikeController::class,'dislike']);
Route::post('/post/comment',[CommentController::class,'comment']);

Route::get('/blogs',[UiController::class,'blogs'] );

Route::get('/search_data',[UiController::class,'search']);

Route::get('/search_posts_by_category/{catId}',[UiController::class,'search_by_category']);
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.index');

    //user
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::post('/users/{id}/update', [UserController::class, 'update']);
    Route::post('/users/{id}/delete', [UserController::class, 'delete']);

    //skill
    Route::resource('skills', SkillController::class);

    //project
    Route::resource('projects', ProjectController::class);

    //student count route 
    Route::get('/studentcount', [StudentCountController::class, 'index']);
    Route::post('/studentcount/create', [StudentCountController::class,'create']);

    //category 
    Route::resource('/categories', CategoryController::class);

    //Post
    Route::resource('/posts', PostController::class);
    Route::post('comment/{commentId}/show_hide', [PostController::class,'showHideComment']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





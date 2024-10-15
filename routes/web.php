<?php

use App\Http\Controllers\Client\BookController as ClientUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAuth;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Book;

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
//Client
Route::get("/", [ClientUserController::class,"home"])->name("page.home");
Route::get("/list", [ClientUserController::class,"home"])->name("page.home");
Route::get('/category/{id}', [ClientUserController::class, 'list'])->name('page.list');
Route::get('/book/{id}', [ClientUserController::class, 'detail'])->name('page.detail');
Route::get("/shop", [ClientUserController::class,"shop"])->name("page.shop");
Route::get("/about", [ClientUserController::class,"about"])->name("page.about");
Route::get("/contact", [ClientUserController::class,"contact"])->name("page.contact");

//Users Client.
Route::get('/users', [ClientUserController::class, 'index'])->name('client.index');
Route::get('/users/edit/{user}', [ClientUserController::class, 'edit'])->name('client.user.edit');
Route::put('/users/edit/{user}', [ClientUserController::class, 'update'])->name('client.user.update');
Route::get('/users/change-password', [ClientUserController::class, 'showChange'])->name('client.showpassword');
Route::put('/users/change-password', [ClientUserController::class, 'changePassword'])->name('client.changepassword');

//Admin
Route::middleware([Authenticate::class, CheckAuth::class,'check.role'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminUserController::class, 'home'])->name('admin.users.home');
        //Users
        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');

        Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');

        Route::post('/users/create', [AdminUserController::class, 'store'])->name('admin.users.store');

        Route::get('/users/edit/{user}', [AdminUserController::class, 'edit'])->name('admin.users.edit');

        Route::put('/users/edit/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');

        Route::delete('/users/delete/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
        
        Route::get('/users/search', [AdminUserController::class, 'search'])->name('admin.users.search');
        //Books
        Route::get('books', [BookController::class, 'index'])->name('admin.books.index');

        Route::get('/books/create', [BookController::class, 'create'])->name('admin.books.create');
    
        Route::post('/books/create', [BookController::class, 'store'])->name('admin.books.store');
    
        Route::get('/books/edit/{post}', [BookController::class, 'edit'])->name('admin.books.edit');
    
        Route::put('/books/edit/{post}', [BookController::class, 'update'])->name('admin.books.update');
    
        Route::delete('/books/delete/{post}', [BookController::class, 'destroy'])->name('admin.books.destroy');
    
        Route::get('/books/detail/{post}', [BookController::class, 'detail'])->name('admin.books.detail');
    
        Route::get('/books/search', [BookController::class, 'search'])->name('admin.books.search');

        //Category
        Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');

        Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

        Route::post('/categories/create', [CategoryController::class, 'store'])->name('admin.categories.store');

        Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');

        Route::put('/categories/edit/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');

        Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

        Route::get('/categories/search', [CategoryController::class, 'search'])->name('admin.categories.search');

    });
});








//Login, register, logout
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

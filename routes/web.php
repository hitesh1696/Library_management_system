<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

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



Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [Controller::class, 'index'])->name('dashboard');
    Route::get('/students', [StudentController::class, 'index'])->name('student');
    Route::get('/students/add', [StudentController::class, 'create'])->name('student.create');
    Route::post('/students/', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.show');   
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('student.delete');

    Route::get('/books', [BookController::class, 'index'])->name('book');
    Route::get('/books/add', [BookController::class, 'create'])->name('book.create');
    Route::post('/books/', [BookController::class, 'store'])->name('book.store');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('book.show');   
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.delete');

    Route::get('/departments', [DepartmentController::class, 'index'])->name('department');
    Route::get('/departments/add', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/departments/', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/departments/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::get('/departments/{id}', [DepartmentController::class, 'show'])->name('department.show');
    Route::put('/departments/{id}', [DepartmentController::class, 'update'])->name('department.update');

    Route::get('/library', [LibraryController::class, 'index'])->name('library');
    Route::post('/library', [LibraryController::class, 'issuestore'])->name('libraryissue');
    Route::put('/library', [LibraryController::class, 'returnstore'])->name('library.returnstore');

    Route::get('/library/logs', [LibraryController::class, 'logs'])->name('library.logs');

});
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Car;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/{post}/status', [PostController::class, 'updateStatus'])->name('posts.updateStatus');


Route::get('contacts', [ContactController::class, 'index'])->name("contacts.index");
Route::get('contacts/create', [ContactController::class, 'create']);
Route::post('contacts', [ContactController::class, 'store'])->name("contact.store");
//Route::get('contacts/{contact}', [PostController::class, 'show']);



Route::get('/display-car', function () {

    $car1 = Car::create('Tesla', 'Model S', 2023);
    $car2 = Car::create('Audi', 'A3', 2000);
    $car3 = Car::create('Toyota', 'Corolla', 1999);

    $cars = [$car1, $car2, $car3];

    return view('cars.show', ['allCars' => $cars]);

});
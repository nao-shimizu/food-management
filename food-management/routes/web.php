<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodManagementController;
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

Route::get('/', function () {
    return view('welcome');
});

//認証セッショングループ化
Route::middleware('auth', 'verified')->group(function () {
    //管理画面
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //食材管理トップ
    Route::get('/', [FoodManagementController::class, 'index'])->name('food.top');

    // //食材一覧
    Route::get('/food-management/ingredients-list', [FoodManagementController::class, 'ingredientList'])->name('ingredients.list');

    // //食材登録
    Route::get('/food-management/ingredients-input', [FoodManagementController::class, 'ingredientInput'])->name('ingredients.input');

    // //料理一覧
    Route::get('/food-management/food-list', [FoodManagementController::class, 'foodList'])->name('food.list');

    // //料理登録
    Route::get('/food-management/food-input', [FoodManagementController::class, 'foodInput'])->name('food.input');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Models\Tool;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Tools\ToolsController;
use App\Http\Controllers\Assign\AssignToolsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $staff = Staff::all();
    $tool = Tool::all();
    $user = User::all();
    $assign = DB::select('SELECT * FROM assigns la
    right join staff ls on la.staff_id = ls.id
    right join tools lt on la.tool_id = lt.id where lt.assign is not null');
    return view('dashboard',compact('staff' ,'tool' , 'assign','user'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    //Tools
    Route::get('tools', function () {

        return view('addTools.add_tools');
    }
    )->name('tools');

    Route::resource('infoTools' , ToolsController::class);
    Route::resource('infoUser' , UserController::class);
    Route::resource('infoStaff', StaffController::class);
    Route::resource('assign', AssignToolsController::class);
});

require __DIR__.'/auth.php';

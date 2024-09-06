<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DepartmentController;
use App\Models\User;
use App\Models\Department;
use App\Models\Role;

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

Route::redirect('/', 'gecr');
Route::redirect('/login','login');

Route::middleware('auth')->group(function () {
    Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
    Route::resource('departments',App\Http\Controllers\DepartmentController::class);
    // Route::resource('facultys',App\Http\Controllers\FacultyController::class);
    // Route::resource('users', App\Http\Controllers\UserController::class);
    // Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('/department',function(){
        return view('department.create');
    });
    Route::get('/departmentd/{id}',function($id){
        
        $departments=Department::find($id);
       
        $role=Role::where('slug','hod')->first();
        $user=User::where('role_id',$role->id)->where('department_id',$departments->id)->first();
       
        return view('department.detail');
    });
    // Route::get('/department/{id}',function($id){
    //     return redirect()->route('departments.shows',$id);
    // })->name('view');
    // Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'show']);
});
Auth::routes();


Route::get('/deshboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

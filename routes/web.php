 
<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Student\StudentDashboardController;



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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/testing', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard',[HomeController::class,'redirectUser'])->name('dashboard');
// });




// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');

// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','role:admin'])->group(function () {
//     Route::get('/admin', function () {
//         return Inertia::render('Admin/Dashboard');
//     })->name('dashboard');
// });



// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','role:admin'])->group(function () {

//     // admin routes
//     //'role:admin'
//     //

//     Route::get('/admin/dashboard',[AdminDashboardController::class,'dashboard'])
//             ->name('admin.dashboard');

// });

// ********** Super Admin Routes *********

// Route::inertia('/super-admin/dashboard', 'Superadmin/Dashboard', [
//     'controller' => SuperAdminDashboardController::class,
//     // 'method' => 'dashboard',
// ])->name('superadmin.dashboard');

// Route::inertia('/super-admin/users', 'Superadmin/Users', [
//     'controller' => SuperAdminDashboardController::class,
//     // 'method' => 'users',
// ])->name('users');

// Route::inertia('/super-admin/manage-role', 'ManageRole', [
//     'controller' => SuperAdminDashboardController::class,
//     // 'method' => 'manageRole',
// ])->name('manageRole');

// Route::post('/super-admin/update-role', [SuperAdminDashboardController::class, 'updateRole'])
//     ->name('updateRole');

// Route::inertia('/admin/dashboard', 'Admin/Dashboard', [
//     'controller' => AdminDashboardController::class,
//     // 'method' => 'dashboard',
// ])->name('admin.dashboard');

// Route::inertia('/teacher/dashboard', 'Teacher/Dashboard', [
//     'controller' => TeacherDashboardController::class,
//     // 'method' => 'dashboard',
// ])->name('teacher.dashboard');

// Route::inertia('/student/dashboard', 'Student/Dashboard', [
//     'controller' => StudentDashboardController::class,
//     // 'method' => 'dashboard',
// ])->name('student.dashboard');

Route::get('/', function () {
    // return view('welcome');
    return inertia::render('Dashboard');
});
// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminDashboardController::class,'dashboard']);

    Route::get('/users',[SuperAdminDashboardController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminDashboardController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminDashboardController::class,'updateRole'])->name('updateRole');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminDashboardController::class,'dashboard']);
});

// ********** Teacher Routes *********
Route::group(['prefix' => 'teacher','middleware'=>['web','isTeacher']],function(){
    Route::get('/dashboard',[AdminDashboardController::class,'dashboard']);
});

// ********** Student Routes *********
Route::group(['middleware'=>['web','isStudent']],function(){
    Route::get('/dashboard',[StudentDashboardController::class,'dashboard']);
});

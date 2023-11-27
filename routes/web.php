<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/')->middleware('guest');

Route::get('/welcome', function () {
    return view('index');
})->name('welcome')->middleware('guest');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->middleware('auth');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');

Route::get('/programs', [\App\Http\Controllers\PostController::class, 'article'])->name('posts/programs')->middleware('auth');

Route::resource('/posts', \App\Http\Controllers\PostController::class)->middleware('admin');

Route::get('/detail/{id}', \App\Http\Controllers\PostController::class . '@detail')->middleware('auth');

Route::view('/7thgrade', 'classes/7th/_main/7thgrade')->middleware('auth');

Route::view('/LTC_1', 'classes/7th/LTC/LTC_1')->middleware('auth');
Route::view('/LTC_2', 'classes/7th/LTC/LTC_2')->middleware('auth');
Route::view('/LTC_3', 'classes/7th/LTC/LTC_3')->middleware('auth');
Route::view('/LTC_4', 'classes/7th/LTC/LTC_4')->middleware('auth');


Route::view('/ELS_1', 'classes/7th/ELS/ELS_1')->middleware('auth');
Route::view('/ELS_2', 'classes/7th/ELS/ELS_2')->middleware('auth');
Route::view('/ELS_3', 'classes/7th/ELS/ELS_3')->middleware('auth');
Route::view('/ELS_4', 'classes/7th/ELS/ELS_4')->middleware('auth');
Route::view('/ELS_5', 'classes/7th/ELS/ELS_5')->middleware('auth');
Route::view('/ELS_6', 'classes/7th/ELS/ELS_6')->middleware('auth');

Route::view('/LOLT_1', 'classes/7th/LOLT/LOLT_1')->middleware('auth');
Route::view('/LOLT_2', 'classes/7th/LOLT/LOLT_2')->middleware('auth');
Route::view('/LOLT_3', 'classes/7th/LOLT/LOLT_3')->middleware('auth');
Route::view('/LOLT_4', 'classes/7th/LOLT/LOLT_4')->middleware('auth');


Route::view('/8thgrade', 'classes/8th/_main/8thgrade')->middleware('auth');

Route::view('/LM_1', 'classes/8th/LM/LM_1')->middleware('auth');
Route::view('/LM_2', 'classes/8th/LM/LM_2')->middleware('auth');
Route::view('/LM_3', 'classes/8th/LM/LM_3')->middleware('auth');
Route::view('/LM_4', 'classes/8th/LM/LM_4')->middleware('auth');
Route::view('/LM_5', 'classes/8th/LM/LM_5')->middleware('auth');

Route::view('/PlP_1', 'classes/8th/PP/PP_1')->middleware('auth');
Route::view('/PlP_2', 'classes/8th/PP/PP_2')->middleware('auth');
Route::view('/PlP_3', 'classes/8th/PP/PP_3')->middleware('auth');

Route::view('/AAS_1', 'classes/8th/AAS/AAS_1')->middleware('auth');
Route::view('/AAS_2', 'classes/8th/AAS/AAS_2')->middleware('auth');
Route::view('/AAS_3 ', 'classes/8th/AAS/AAS_3')->middleware('auth');
Route::view('/AAS_4', 'classes/8th/AAS/AAS_4')->middleware('auth');

Route::view('/HDS_1', 'classes/8th/HDS/HDS_1')->middleware('auth');
Route::view('/HDS_2', 'classes/8th/HDS/HDS_2')->middleware('auth');
Route::view('/HDS_3', 'classes/8th/HDS/HDS_3')->middleware('auth');
Route::view('/HDS_4', 'classes/8th/HDS/HDS_4')->middleware('auth');

Route::view('/9thgrade', 'classes/9th/_main/9thgrade')->middleware('auth');

Route::view('/R_1', 'classes/9th/R/R_1')->middleware('auth');
Route::view('/R_2', 'classes/9th/R/R_2')->middleware('auth');
Route::view('/R_3', 'classes/9th/R/R_3')->middleware('auth');
Route::view('/R_4', 'classes/9th/R/R_4')->middleware('auth');

Route::view('/HRS_1', 'classes/9th/HRS/HRS_1')->middleware('auth');
Route::view('/HRS_2', 'classes/9th/HRS/HRS_2')->middleware('auth');
Route::view('/HRS_3', 'classes/9th/HRS/HRS_3')->middleware('auth');

Route::view('/PIV_1', 'classes/9th/PIV/PIV_1')->middleware('auth');
Route::view('/PIV_2', 'classes/9th/PIV/PIV_2')->middleware('auth');
Route::view('/PIV_3', 'classes/9th/PIV/PIV_3')->middleware('auth');
Route::view('/PIV_4', 'classes/9th/PIV/PIV_4')->middleware('auth');
Route::view('/PIV_5', 'classes/9th/PIV/PIV_5')->middleware('auth');

Route::view('/B_1', 'classes/9th/B/B_1')->middleware('auth');
Route::view('/B_2', 'classes/9th/B/B_2')->middleware('auth');
Route::view('/B_3', 'classes/9th/B/B_3')->middleware('auth');
Route::view('/B_4', 'classes/9th/B/B_4')->middleware('auth');

Route::view('/10thgrade', 'classes/10th/_main/10thgrade')->middleware('auth');

Route::view('/ITB_1', 'classes/10th/ITB/ITB_1')->middleware('auth');
Route::view('/ITB_2', 'classes/10th/ITB/ITB_2')->middleware('auth');
Route::view('/ITB_3', 'classes/10th/ITB/ITB_3')->middleware('auth');
Route::view('/ITB_4', 'classes/10th/ITB/ITB_4')->middleware('auth');

Route::view('/V_1', 'classes/10th/V/V_1')->middleware('auth');
Route::view('/V_2', 'classes/10th/V/V_2')->middleware('auth');
Route::view('/V_3', 'classes/10th/V/V_3')->middleware('auth');
Route::view('/V_4', 'classes/10th/V/V_4')->middleware('auth');
Route::view('/V_5', 'classes/10th/V/V_5')->middleware('auth');

Route::view('/AB_1', 'classes/10th/AB/AB_1')->middleware('auth');
Route::view('/AB_2', 'classes/10th/AB/AB_2')->middleware('auth');
Route::view('/AB_3', 'classes/10th/AB/AB_3')->middleware('auth');
Route::view('/AB_4', 'classes/10th/AB/AB_4')->middleware('auth');
Route::view('/AB_5', 'classes/10th/AB/AB_5')->middleware('auth');

Route::view('/PB_1', 'classes/10th/PB/PB_1')->middleware('auth');
Route::view('/PB_2', 'classes/10th/PB/PB_2')->middleware('auth');
Route::view('/PB_3', 'classes/10th/PB/PB_3')->middleware('auth');
Route::view('/PB_4', 'classes/10th/PB/PB_4')->middleware('auth');

Route::view('/Ec_1', 'classes/10th/E/E_1')->middleware('auth');
Route::view('/Ec_2', 'classes/10th/E/E_2')->middleware('auth');
Route::view('/Ec_3', 'classes/10th/E/E_3')->middleware('auth');
Route::view('/Ec_4', 'classes/10th/E/E_4')->middleware('auth');

Route::view('/11thgrade', 'classes/11th/_main/11thgrade')->middleware('auth');

Route::view('/BB_1', 'classes/11th/BB/BB_1')->middleware('auth');
Route::view('/BB_2', 'classes/11th/BB/BB_2')->middleware('auth');
Route::view('/BB_3', 'classes/11th/BB/BB_3')->middleware('auth');
Route::view('/BB_4', 'classes/11th/BB/BB_4')->middleware('auth');
Route::view('/BB_5', 'classes/11th/BB/BB_5')->middleware('auth');

Route::view('/FULC_1', 'classes/11th/FULC/FULC_1')->middleware('auth');
Route::view('/FULC_2', 'classes/11th/FULC/FULC_2')->middleware('auth');
Route::view('/FULC_3', 'classes/11th/FULC/FULC_3')->middleware('auth');
Route::view('/FULC_4', 'classes/11th/FULC/FULC_4')->middleware('auth');
Route::view('/FULC_5', 'classes/11th/FULC/FULC_5')->middleware('auth');
Route::view('/FULC_6', 'classes/11th/FULC/FULC_6')->middleware('auth');

Route::view('/PM_1', 'classes/11th/PM/PM_1')->middleware('auth');
Route::view('/PM_2', 'classes/11th/PM/PM_2')->middleware('auth');
Route::view('/PM_3', 'classes/11th/PM/PM_3')->middleware('auth');
Route::view('/PM_4', 'classes/11th/PM/PM_4')->middleware('auth');

Route::view('/ATT_1', 'classes/11th/ATT/ATT_1')->middleware('auth');
Route::view('/ATT_2', 'classes/11th/ATT/ATT_2')->middleware('auth');
Route::view('/ATT_3', 'classes/11th/ATT/ATT_3')->middleware('auth');
Route::view('/ATT_4', 'classes/11th/ATT/ATT_4')->middleware('auth');
Route::view('/ATT_5', 'classes/11th/ATT/ATT_5')->middleware('auth');

Route::view('/12thgrade', 'classes/12th/_main/12thgrade')->middleware('auth');

Route::view('/E_1', 'classes/12th/E/E_1')->middleware('auth');
Route::view('/E_2', 'classes/12th/E/E_2')->middleware('auth');
Route::view('/E_3', 'classes/12th/E/E_3')->middleware('auth');
Route::view('/E_4', 'classes/12th/E/E_4')->middleware('auth');
Route::view('/E_5', 'classes/12th/E/E_5')->middleware('auth');
Route::view('/E_6', 'classes/12th/E/E_6')->middleware('auth');
Route::view('/E_7', 'classes/12th/E/E_7')->middleware('auth');

Route::view('/C_1', 'classes/12th/C/C_1')->middleware('auth');
Route::view('/C_2', 'classes/12th/C/C_2')->middleware('auth');
Route::view('/C_3', 'classes/12th/C/C_3')->middleware('auth');

Route::view('/A_1', 'classes/12th/A/A_1')->middleware('auth');
Route::view('/A_2', 'classes/12th/A/A_2')->middleware('auth');
Route::view('/A_3', 'classes/12th/A/A_3')->middleware('auth');
Route::view('/A_4', 'classes/12th/A/A_4')->middleware('auth');
Route::view('/A_5', 'classes/12th/A/A_5')->middleware('auth');

Route::view('/PP_1', 'classes/12th/PP/PP_1')->middleware('auth');
Route::view('/PP_2', 'classes/12th/PP/PP_2')->middleware('auth');
Route::view('/PP_3', 'classes/12th/PP/PP_3')->middleware('auth');

Route::view('/PIV_1', 'classes/12th/PIV/PIV_1')->middleware('auth');
Route::view('/PIV_2', 'classes/12th/PIV/PIV_2')->middleware('auth');
Route::view('/PIV_3', 'classes/12th/PIV/PIV_3')->middleware('auth');
Route::view('/PIV_4', 'classes/12th/PIV/PIV_4')->middleware('auth');
Route::view('/PIV_5', 'classes/12th/PIV/PIV_5')->middleware('auth');
Route::view('/grade', 'classes/grade')->middleware('auth');

Route::view('/ELS_1', 'classes/12th/ELS/ELS_1')->middleware('auth');
Route::view('/ELS_2', 'classes/12th/ELS/ELS_2')->middleware('auth');
Route::view('/ELS_3', 'classes/12th/ELS/ELS_3')->middleware('auth');
Route::view('/ELS_4', 'classes/12th/ELS/ELS_4')->middleware('auth');
Route::view('/ELS_5', 'classes/12th/ELS/ELS_5')->middleware('auth');
Route::view('/ELS_6', 'classes/12th/ELS/ELS_6')->middleware('auth');

Route::view('/B_1', 'classes/12th/B/B_1')->middleware('auth');
Route::view('/B_2', 'classes/12th/B/B_2')->middleware('auth');
Route::view('/B_3', 'classes/12th/B/B_3')->middleware('auth');
Route::view('/B_4', 'classes/12th/B/B_4')->middleware('auth');

Route::view('/home', 'home')->name('home')->middleware('auth');

Route::resource('/announcements', \App\Http\Controllers\AnnouncementController::class)->middleware('admin');

Route::get('/announcements_list', [\App\Http\Controllers\AnnouncementController::class, 'announcements_list'])->name('announcements/announcements_list')->middleware('auth');

Route::get('/admin_dashboard', 'Admin\DashboardController@index')->middleware('admin');

Route::get('/work_preview', [\App\Http\Controllers\PostController::class, 'post_preview'])->middleware('admin');

Route::get('/work_preview2', [\App\Http\Controllers\AnnouncementController::class, 'announcement_preview'])->middleware('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

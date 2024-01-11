<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\UnionController;
use App\Http\Controllers\Admin\UpazillaController;
use App\Http\Controllers\Admin\VillageController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\WardController;

Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthController::class, 'save_login'])->name('save_login');

    Route::middleware('admin.auth')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AdminDashboardController::class, 'logout'])->name('logout');
        Route::get('/get_dependable_data', [AdminDashboardController::class, 'get_dependable_data'])->name('get_dependable_data');

        // divisions
        Route::resource('divisions', DivisionController::class)->names('divisions');
        Route::get('division-get-data', [DivisionController::class, 'get_data'])->name('divisions.get_data');
        Route::get('division-delete/{id}', [DivisionController::class, 'delete'])->name('divisions.delete');
        Route::get('division-translation/{id}/lang/{lang_id}', [DivisionController::class, 'translation'])->name('divisions.translation');
        Route::post('division-save-translation/{id}/lang/{lang_id}', [DivisionController::class, 'save_translation'])->name('divisions.save_translation');
        Route::get('division-all-translation/{id}', [DivisionController::class, 'all_translation'])->name('divisions.all_translation');
        Route::post('division-save-all-translation/{id}', [DivisionController::class, 'save_all_translation'])->name('divisions.save_all_translation');

        // districts
        Route::resource('districts', DistrictController::class)->names('districts');
        Route::get('district-get-data', [DistrictController::class, 'get_data'])->name('districts.get_data');
        Route::get('district-delete/{id}', [DistrictController::class, 'delete'])->name('districts.delete');
        Route::get('district-translation/{id}/lang/{lang_id}', [DistrictController::class, 'translation'])->name('districts.translation');
        Route::post('district-save-translation/{id}/lang/{lang_id}', [DistrictController::class, 'save_translation'])->name('districts.save_translation');
        Route::get('district-all-translation/{id}', [DistrictController::class, 'all_translation'])->name('districts.all_translation');
        Route::post('district-save-all-translation/{id}', [DistrictController::class, 'save_all_translation'])->name('districts.save_all_translation');

        // upazillas
        Route::resource('upazillas', UpazillaController::class)->names('upazillas');
        Route::get('upazilla-get-data', [UpazillaController::class, 'get_data'])->name('upazillas.get_data');
        Route::get('upazilla-delete/{id}', [UpazillaController::class, 'delete'])->name('upazillas.delete');
        Route::get('upazilla-translation/{id}/lang/{lang_id}', [UpazillaController::class, 'translation'])->name('upazillas.translation');
        Route::post('upazilla-save-translation/{id}/lang/{lang_id}', [UpazillaController::class, 'save_translation'])->name('upazillas.save_translation');
        Route::get('upazilla-all-translation/{id}', [UpazillaController::class, 'all_translation'])->name('upazillas.all_translation');
        Route::post('upazilla-save-all-translation/{id}', [UpazillaController::class, 'save_all_translation'])->name('upazillas.save_all_translation');

        // unions
        Route::resource('unions', UnionController::class)->names('unions');
        Route::get('union-get-data', [UnionController::class, 'get_data'])->name('unions.get_data');
        Route::get('union-delete/{id}', [UnionController::class, 'delete'])->name('unions.delete');
        Route::get('union-translation/{id}/lang/{lang_id}', [UnionController::class, 'translation'])->name('unions.translation');
        Route::post('union-save-translation/{id}/lang/{lang_id}', [UnionController::class, 'save_translation'])->name('unions.save_translation');
        Route::get('union-all-translation/{id}', [UnionController::class, 'all_translation'])->name('unions.all_translation');
        Route::post('union-save-all-translation/{id}', [UnionController::class, 'save_all_translation'])->name('unions.save_all_translation');

        // villages
        Route::resource('villages', VillageController::class)->names('villages');
        Route::get('village-get-data', [VillageController::class, 'get_data'])->name('villages.get_data');
        Route::get('village-delete/{id}', [VillageController::class, 'delete'])->name('villages.delete');
        Route::get('village-translation/{id}/lang/{lang_id}', [VillageController::class, 'translation'])->name('villages.translation');
        Route::post('village-save-translation/{id}/lang/{lang_id}', [VillageController::class, 'save_translation'])->name('villages.save_translation');
        Route::get('village-all-translation/{id}', [VillageController::class, 'all_translation'])->name('villages.all_translation');
        Route::post('village-save-all-translation/{id}', [VillageController::class, 'save_all_translation'])->name('villages.save_all_translation');

        // ============= languages ===================
        Route::resource('languages', LanguageController::class)->names('languages');
        Route::get('languages-delete/{id}', [LanguageController::class, 'delete'])->name('languages.delete');
        Route::get('languages-bulk-delete', [LanguageController::class, 'bulk_delete'])->name('languages.bulk_delete');
        Route::post('languages-bulk-destroy', [LanguageController::class, 'bulk_destroy'])->name('languages.bulk_destroy');
        Route::get('languages-bulk-change', [LanguageController::class, 'bulk_change'])->name('languages.bulk_change');
        Route::post('languages-bulk-update', [LanguageController::class, 'bulk_update'])->name('languages.bulk_update');

        // ============= operators ===================
        Route::resource('operators', AdminController::class)->names('operators');
        Route::get('operators-delete/{id}', [AdminController::class, 'delete'])->name('operators.delete');
        Route::get('operators-bulk-delete', [AdminController::class, 'bulk_delete'])->name('operators.bulk_delete');
        Route::post('operators-bulk-destroy', [AdminController::class, 'bulk_destroy'])->name('operators.bulk_destroy');
        Route::get('operators-bulk-change', [AdminController::class, 'bulk_change'])->name('operators.bulk_change');
        Route::post('operators-bulk-update', [AdminController::class, 'bulk_update'])->name('operators.bulk_update');
        Route::get('operator-assign-location/{id}', [AdminController::class, 'assign_location'])->name('operators.assign_location');
        Route::post('operator-assign/{id}', [AdminController::class, 'assign'])->name('operators.assign');

        Route::resource('ward',WardController::class)->names('ward');

        Route::get('find_district',[WardController::class,'find_district'])->name('ward.find_district');
        Route::get('find_upazila',[WardController::class,'find_upazila'])->name('ward.find_upazila');
        Route::get('find_union',[WardController::class,'find_union'])->name('ward.find_union');
        Route::get('find_all_district',[WardController::class,'find_all_district'])->name('ward.find_all_district');
        Route::get('find_all_upazila',[WardController::class,'find_all_upazila'])->name('ward.find_all_upazila');
        Route::get('find_all_union',[WardController::class,'find_all_union'])->name('ward.find_all_union');

        Route::get('get_ward',[WardController::class,'get_ward'])->name('ward.get_data');

    });
});

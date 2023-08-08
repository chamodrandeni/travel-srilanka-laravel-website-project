<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\packageController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\inquiryController;
use App\Http\Controllers\Admin\imagecategoryController;
use App\Http\Controllers\Admin\gallaryController;
use App\Http\Controllers\Admin\settingController;
use App\Http\Controllers\Admin\testimonialController;
use App\Http\Controllers\Admin\tourtypeController;
use App\Http\Controllers\Admin\bookingController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\TourplanController;
use App\Http\Controllers\Admin\tourplanimageController;

use App\Http\Controllers\welcomeController;


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

Route::get('/',[welcomeController::class, 'index']);

Route::get('/allpackage',[welcomeController::class, 'allpack']);

Route::get('package-details/{id}',[welcomeController::class, 'package']);

Route::post('insert-booking',[welcomeController::class, 'book']);

Route::get('/contact',[welcomeController::class, 'con']);

Route::post('insert-mail',[mailController::class, 'insert']);

Route::get('/inquirys',[welcomeController::class, 'inq']);

Route::post('insert-inquiry',[inquiryController::class, 'insert']);

Route::get('/about',[welcomeController::class, 'about']);

Route::get('gallery/{id}',[welcomeController::class, 'gallery']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard',[FrontendController::class, 'index']);

    Route::get('mails',[mailController::class, 'index']);
    Route::get('view-mail/{id}',[mailController::class, 'view']);
    Route::get('delete-mails/{id}',[mailController::class, 'destroy']);

    Route::get('packages',[packageController::class, 'index']);
    Route::get('view-package/{id}',[packageController::class, 'view']);
    Route::get('add-packages',[packageController::class, 'add']);
    Route::post('insert-packages',[packageController::class, 'insert']);
    Route::get('edit-package/{id}', [packageController::class ,'edit']);
    Route::put('update-packages/{id}', [packageController::class ,'update']);
    Route::get('delete-package/{id}',[packageController::class, 'destroy']);

    Route::get('inquiry',[inquiryController::class, 'index']);
    Route::get('view-inquiry/{id}',[inquiryController::class, 'view']);
    Route::post('insert-reply',[inquiryController::class, 'sendreply']);
    Route::get('delete-inquiry/{id}',[inquiryController::class, 'destroy']);

    Route::get('imagecategory',[imagecategoryController::class, 'index']);
    Route::get('view-imagecategory/{id}',[imagecategoryController::class, 'view']);
    Route::get('add-imagecategory',[imagecategoryController::class, 'add']);
    Route::post('insert-imagecategory',[imagecategoryController::class, 'insert']);
    Route::get('edit-imagecategory/{id}', [imagecategoryController::class ,'edit']);
    Route::put('update-imagecategory/{id}', [imagecategoryController::class ,'update']);
    Route::get('delete-imagecategory/{id}',[imagecategoryController::class, 'destroy']);

    Route::get('gallery',[gallaryController::class, 'index']);
    Route::get('view-gallery/{id}',[gallaryController::class, 'view']);
    Route::get('add-gallery',[gallaryController::class, 'add']);
    Route::post('insert-gallery',[gallaryController::class, 'insert']);
    Route::get('edit-gallery/{id}', [gallaryController::class ,'edit']);
    Route::put('update-gallery/{id}', [gallaryController::class ,'update']);
    Route::get('delete-gallery/{id}',[gallaryController::class, 'destroy']);

    Route::get('testimonial',[testimonialController::class, 'index']);
    Route::get('view-testimonial/{id}',[testimonialController::class, 'view']);
    Route::get('add-testimonial',[testimonialController::class, 'add']);
    Route::post('insert-testimonial',[testimonialController::class, 'insert']);
    Route::get('edit-testimonial/{id}', [testimonialController::class ,'edit']);
    Route::put('update-testimonial/{id}', [testimonialController::class ,'update']);
    Route::get('delete-testimonial/{id}',[testimonialController::class, 'destroy']);

    Route::get('setting',[settingController::class, 'index']);
    Route::get('edit-setting/{id}', [settingController::class ,'edit']);
    Route::put('update-setting/{id}', [settingController::class ,'update']);

    Route::get('tourtype',[tourtypeController::class, 'index']);
    Route::get('view-tourtype/{id}',[tourtypeController::class, 'view']);
    Route::get('add-tourtype',[tourtypeController::class, 'add']);
    Route::post('insert-tourtype',[tourtypeController::class, 'insert']);
    Route::get('edit-tourtype/{id}', [tourtypeController::class ,'edit']);
    Route::put('update-tourtype/{id}', [tourtypeController::class ,'update']);
    Route::get('delete-tourtype/{id}',[tourtypeController::class, 'destroy']);

    Route::get('booking',[bookingController::class, 'index']);
    Route::get('view-booking/{id}',[bookingController::class, 'view']);
    Route::get('delete-booking/{id}',[bookingController::class, 'destroy']);

    Route::get('emailview',[EmailController::class, 'index'])->name('admin.email.email');
    Route::get('view-email/{id}',[EmailController::class, 'viewEmail']);

    Route::get('tourplan',[TourplanController::class, 'index']);
    Route::get('view-tourplan/{id}',[TourplanController::class, 'view']);
    Route::get('add-tourplan',[TourplanController::class, 'add']);
    Route::post('insert-tourplan',[TourplanController::class, 'insert']);
    Route::get('edit-tourplan/{id}', [TourplanController::class ,'edit']);
    Route::put('update-tourplan/{id}', [TourplanController::class ,'update']);
    Route::get('delete-tourplan/{id}',[TourplanController::class, 'destroy']);

    Route::get('tourplanimage',[tourplanimageController::class, 'index']);
    Route::get('view-tourplanimage/{id}',[tourplanimageController::class, 'view']);
    Route::get('add-tourplanimage',[tourplanimageController::class, 'add']);
    Route::post('insert-tourplanimage',[tourplanimageController::class, 'insert']);
    Route::get('edit-tourplanimage/{id}', [tourplanimageController::class ,'edit']);
    Route::put('update-tourplanimage/{id}', [tourplanimageController::class ,'update']);
    Route::get('delete-tourplanimage/{id}',[tourplanimageController::class, 'destroy']);

});

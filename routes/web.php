<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use App\Models\InfoCards;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\FormSendRegister;
use App\Http\Controllers\FormSendRegisterController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;

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

Route::get('/', [MainController::class, 'index'])->name('index');





//Authentication

//login
Route::get('/login', function () {
    return view('authentication.login');
});

//register
Route::get(
    '/register',
    function () {
        return view('authentication.register');
    }
);



//admin dashboard
Route::get('/admin', [AdminController::class, 'admin.index'])->name('admin');



//ProductGallery
Route::get('admin/product-gallery', [ProductGalleryController::class, 'index'])->name('admin.productgallery');
Route::post('admin/product-gallery', [ProductGalleryController::class, 'store'])->name('admin.productgallery.store');
Route::post('admin/product-gallery/infocard', [ProductGalleryController::class, 'storeInfoCards'])->name('admin.productgallery.store.infocard');

Route::get('admin/product-gallery/show/category/{id}', [ProductGalleryController::class, 'showCategory'])->name('admin.productgallery.show');
Route::get('admin/product-gallery/update/category/{id}', [ProductGalleryController::class, 'updateGalleryCategory'])->name('admin.productgallery.update');
Route::post('admin/product-gallery/update/category/{id}', [ProductGalleryController::class, 'updateSubmit'])->name('admin.productgallery.update.submit');

Route::get('admin/product-gallery/show/infocard/{id}', [ProductGalleryController::class, 'showInfoCards'])->name('admin.infocards.show');
Route::get('admin/product-gallery/update/infocard/{id}', [ProductGalleryController::class, 'updateInfoCards'])->name('admin.infocards.update');
Route::post('admin/product-gallery/update/infocard/{id}', [ProductGalleryController::class, 'updateInfoCardsSubmit'])->name('admin.infocards.update.submit');

Route::delete('admin/product-gallery/{id}', [ProductGalleryController::class, 'destroyStore'])->name('admin.category.destroy');
Route::delete('admin/product-gallery/infocard/{id}', [ProductGalleryController::class, 'destroyInfoCards'])->name('admin.productgallery.infocard.destroy');

//video
Route::get('admin/video', [VideoController::class, 'index'])->name('admin.video');
Route::post('admin/video', [VideoController::class, 'store'])->name('admin.store.video');
Route::get('admin/video/show/{id}', [VideoController::class, 'showVideo'])->name('admin.video.show');
Route::get('admin/video/update/{id}', [VideoController::class, 'updateVideo'])->name('admin.video.update');
Route::post('admin/video/update/{id}', [VideoController::class, 'updateSubmit'])->name('admin.video.update.submit');
Route::delete('admin/video/{id}', [VideoController::class, 'destroyVideo'])->name('admin.video.destroy.submit');




//slider
Route::get('admin/slider', [SliderController::class, 'index'])->name('admin.slider');
Route::post('admin/slider', [SliderController::class, 'store'])->name('admin.store.slider');
Route::get('admin/slider/show/{id}', [SliderController::class, 'showSlider'])->name('admin.slider.show');
Route::get('admin/slider/update/{id}', [SliderController::class, 'updateSlider'])->name('admin.slider.update');
Route::post('admin/slider/update/{id}', [SliderController::class, 'updateSubmit'])->name('admin.slider.update.submit');
Route::delete('admin/slider/{id}', [SliderController::class, 'destroySlider'])->name('admin.slider.destroy.submit');



//Upload image
Route::get('admin/image', [ImageController::class, 'index'])->name('image.index');
Route::post('admin/image', [ImageController::class, 'store'])->name('store.image');

//market
//category
Route::get('admin/market/category', [CategoryController::class, 'index'])->name('market.category.index');
Route::post('admin/market/category', [CategoryController::class, 'store'])->name('market.category.store');
Route::get('admin/market/category/show/{id}',[CategoryController::class, 'showCategory'])->name('market.category.show');
Route::get('admin/market/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('market.category.update');
Route::post('admin/market/category/update/{id}', [CategoryController::class, 'updateSubmit'])->name('market.category.update.submit');
Route::delete('admin/market/category/{id}', [CategoryController::class, 'destroy'])->name('market.category.destroy.submit');
//product
Route::get('admin/market/product', [ProductController::class, 'index'])->name('market.product.index');
Route::post('admin/market/product', [ProductController::class, 'store'])->name('market.product.store');
Route::get('admin/market/product/show/{id}',[ProductController::class, 'showProduct'])->name('market.product.show');
Route::get('admin/market/product/update/{id}', [ProductController::class, 'updateProduct'])->name('market.product.update');
Route::post('admin/market/product/update/{id}', [ProductController::class, 'updateSubmit'])->name('market.product.update.submit');
Route::delete('admin/market/product/{id}', [ProductController::class, 'destroy'])->name('market.product.destroy.submit');




//FormSendRegister
Route::get('formsend', [FormSendRegisterController::class, 'index'])->name('formsendregister.index');
Route::post('formsend', [FormSendRegisterController::class, 'store'])->name('formsendregister.store.index');
Route::delete('formsend/{id}', [FormSendRegisterController::class, 'destroy'])->name('formsendregister.store.submit.destroy');




//Auth
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';


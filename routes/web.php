<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBanneradsController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminNewProductController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminContactMessagesController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminNewsDataController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminBanneradsaboutController;
use App\Http\Controllers\AdminNewProAboutController;
use App\Http\Controllers\AdminBannerproController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HexohmController;
use App\Http\Controllers\AdminBannerhexohmController;
use App\Http\Controllers\AdminProducthexohmController;
use App\Http\Controllers\AdminProducthexohm1Controller;
use App\Http\Controllers\AdminBannernewsController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/about', [AboutController::class, 'index']);

Route::get('/hexohm', [HexohmController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/products', [ProductsController::class, 'index']);


Route::get('/gantibaju', function () {
    return view('gantibaju');
})->name('gantibaju');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', [FaqController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $data =[
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper',$data);
    });

    Route::resource('/banners', AdminBannerController::class);
    Route::resource('/bannerads', AdminBanneradsController::class);
    Route::resource('/products', AdminProductController::class);
    Route::resource('/newproducts', AdminNewProductController::class);
    Route::resource('/faqs', AdminFaqController::class);
    Route::resource('/abouts', AdminAboutController::class);
    Route::resource('/news', AdminNewsDataController::class);
    Route::resource('/contact_messages', AdminContactMessagesController::class);
    Route::get('contact_messages', [AdminContactMessagesController::class, 'index'])->name('admin.contact_messages.index');
    Route::get('contact_messages/{id}', [AdminContactMessagesController::class, 'show'])->name('admin.contact_messages.show');
    Route::delete('contact_messages/{id}', [AdminContactMessagesController::class, 'destroy'])->name('admin.contact_messages.destroy');
    Route::post('contact_messages', [AdminContactMessagesController::class, 'store'])->name('admin.contact_messages.store');
    Route::resource('/banneradsabout', AdminBanneradsaboutController::class);
    Route::resource('/newproabout', AdminNewProAboutController::class);
    Route::resource('/bannerpro', AdminBannerproController::class);
    Route::resource('/bannerhexohm', AdminBannerhexohmController::class);
    Route::resource('/producthexohm', AdminProducthexohmController::class);
    Route::resource('/producthexohm1', AdminProducthexohm1Controller::class);
        Route::resource('/bannernews', AdminBannernewsController::class);
});

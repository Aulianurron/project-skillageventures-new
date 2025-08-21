 <?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CategoryProductController as AdminCategoryProduct;
use App\Http\Controllers\Admin\ProductController as AdminProduct;
use App\Http\Controllers\Admin\LinkProductController as AdminLinkProduct;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryExpenseController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Admin\NewResourceController;
use App\Http\Controllers\Admin\ManagementExpenseController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProgramController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\ArticleController;
use App\Models\CategoryExpense;



Route::get('/', function () {
    return view ('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/detail-product/{slug}', [ProductController::class, 'show'])->name('detail-product');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/program', [ProgramController::class, 'indexhome'])->name('programs');
Route::get('/detail-program/{id}', [ProgramController::class, 'show'])->name('detail-program');
Route::get('/financial-report', [\App\Http\Controllers\FinancialReportController::class, 'index'])->name('financial-report.index');
Route::get('/detail-order/{id}', [OrderController::class,'show'])->name('detail-order');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('category-product', AdminCategoryProduct::class);
    Route::resource('product', AdminProduct::class);
    Route::resource('link-product', AdminLinkProduct::class);
    Route::resource('category-program', CategoryProgramController::class);
    Route::resource('program', ProgramController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('metode-pembayaran', PaymentMethodController::class);
    Route::resource('order', OrderController::class);
    Route::resource('category-expense', CategoryExpenseController::class);
    Route::resource('new-resource', NewResourceController::class);
    Route::resource('management-expense', ExpenseController::class);
    Route::resource('category-articles', CategoryArticleController::class)->except(['show']);
    Route::resource('article', ArticleController::class);

    
    
});

// Clear application cache
// Route::get('/clear-cache', function () {
//     Artisan::call('cache:clear');
//     return 'Application cache has been cleared';
// });

// //Clear route cache
// Route::get('/route-cache', function () {
//     Artisan::call('route:cache');
//     return 'Routes cache has been cleared';
// });

// //Clear config cache
// Route::get('/config-cache', function () {
//     Artisan::call('config:cache');
//     return 'Config cache has been cleared';
// });

// // Clear view cache
// Route::get('/view-clear', function () {
//     Artisan::call('view:clear');
//     return 'View cache has been cleared';
// });

// // Clear cache using reoptimized class
// Route::get('/optimize-clear', function () {
//     Artisan::call('optimize:clear');
//     return 'Optimize cache cleared';
// });

require __DIR__ . '/auth.php';

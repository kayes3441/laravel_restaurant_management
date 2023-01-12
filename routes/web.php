<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::group([],__DIR__.'/web/admin/dashboard.php');
    Route::group([],__DIR__.'/web/admin/unit.php');
    Route::group([],__DIR__.'/web/admin/purchase-product-type.php');
    Route::group([],__DIR__.'/web/admin/purchase-product.php');

    Route::group([],__DIR__.'/web/admin/food.php');
    Route::group([],__DIR__.'/web/admin/food-recipe.php');
//    Route::group([],__DIR__.'/web/admin/food-type.php');
    Route::group([],__DIR__.'/web/admin/supplier.php');
    Route::group([],__DIR__.'/web/admin/customer.php');
    Route::group([],__DIR__.'/web/admin/purchase.php');
    Route::group([],__DIR__.'/web/admin/sale.php');
    Route::group([],__DIR__.'/web/admin/purchase-detail.php');
    Route::group([],__DIR__.'/web/admin/bank.php');
    Route::group([],__DIR__.'/web/admin/bank-account.php');
    Route::group([],__DIR__.'/web/admin/receive_and_pay.php');
    Route::group([],__DIR__.'/web/admin/incomeAndexpense.php');
    Route::group([],__DIR__.'/web/admin/accountChart.php');
    Route::group([],__DIR__.'/web/admin/bankTransaction.php');
    //report
    Route::group([], __DIR__ . '/web/admin/report/cashbook.php');
    Route::group([],__DIR__.'/web/admin/report/stock.php');
    Route::group([], __DIR__ . '/web/admin/report/purchase_report.php');
    Route::group([], __DIR__ . '/web/admin/report/sale_report.php');
    Route::group([], __DIR__ . '/web/admin/report/customer_receive.php');
    Route::group([], __DIR__ . '/web/admin/report/supplier_pay.php');
    Route::group([], __DIR__ . '/web/admin/report/trans&labor_cost.php');
    Route::group([], __DIR__ . '/web/admin/report/expanse.php');
    Route::group([], __DIR__ . '/web/admin/report/income.php');
    Route::group([], __DIR__ . '/web/admin/report/bank.php');
    Route::group([], __DIR__ . '/web/admin/report/balance_summary.php');
});

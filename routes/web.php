<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\PackController;

Route::get('/', fn() => redirect('/login'));

Route::get('/register/{ref?}', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Packs
    Route::get('/packs', [PackController::class, 'index'])->name('packs.index');
    Route::post('/packs/purchase', [PackController::class, 'purchase'])->name('packs.purchase');
    Route::get('/packs/upgrade', [PackController::class, 'upgrade'])->name('packs.upgrade');
    Route::get('/packs/benefits', [PackController::class, 'benefits'])->name('packs.benefits');

    // Network
    Route::get('/network/tree', [TreeController::class, 'index'])->name('tree.index');
    Route::get('/network/directs', [ReferralController::class, 'index'])->name('referrals.index');
    Route::get('/network/referral-link', [ReferralController::class, 'link'])->name('referral.link');
    Route::get('/network/ranking', [RankingController::class, 'index'])->name('ranking.index');

    // Finance
    Route::get('/finance/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/finance/wallet', [WalletController::class, 'index'])->name('wallet.index');
    Route::get('/finance/withdrawals', [WithdrawalController::class, 'index'])->name('withdrawals.index');
    Route::get('/finance/transactions', [TransactionController::class, 'index'])->name('transactions.index');
});

require __DIR__.'/auth.php';

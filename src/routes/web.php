<?php


use Illuminate\Support\Facades\Route;
use Kostikas\GitLogger\Http\Controllers\GitLoggerController;

Route::get('dashboard' , [GitLoggerController::class , 'index'])->name('git-logger.index');

Route::get('loadData', [GitLoggerController::class,'loadData'])->name('git-logger.load-data');

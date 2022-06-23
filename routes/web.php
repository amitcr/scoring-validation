<?php

use App\Http\Controllers\AssessmentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('pages-logout', 'RoutingController@logout');
    Route::get('/', 'RoutingController@index');
    Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    Route::get('{first}/{second}', 'RoutingController@secondLevel');
});

Route::get('assessments', [AssessmentsController::class, 'index'])->name('assessments');
Route::get('assessments/mismatched', [AssessmentsController::class, 'mismatchedAssessments'])->name('assessments.mismatched');
Route::get('assessment', [AssessmentsController::class, 'individualAssessments'])->name('assessments.assessment');

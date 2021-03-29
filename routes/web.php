<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHome;
use App\Http\Controllers\Home;
use App\Http\Controllers\InvertorController;
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



Route::any('/', [Home::class, 'index']);
Route::any('/home', [Home::class, 'index']);
Route::any('/about', [Home::class, 'about']);
Route::any('/marketing', [Home::class, 'marketing']);
Route::any('/randd', [Home::class, 'randd']);
Route::any('/whyus', [Home::class, 'whyus']);
Route::any('/career', [Home::class, 'career']);
Route::any('/media', [Home::class, 'media']);
Route::any('/csr', [Home::class, 'csr']);
Route::any('/contact', [Home::class, 'contact']);
Route::any('/network', [Home::class, 'network']);
Route::any('/generic', [Home::class, 'generic']);
Route::any('/enquiryadd ', [home::class, 'enquiryadd']);
Route::any('/productsegment ', [home::class, 'productsegment']);
Route::any('/therapeuticsegments ', [home::class, 'therapeuticsegments']);

// invsentor
Route::any('/related_party_transaction', [home::class, 'related_party_transaction']);
Route::any('/quaterly_results', [home::class, 'quaterly_results']);
Route::any('/annual_reports', [home::class, 'annual_reports']);
Route::any('/unclaimeddividends', [home::class, 'unclaimeddividends']);
Route::any('/unclaimed_deposit', [home::class, 'unclaimed_deposit']);
Route::any('/share_holding_patterns', [home::class, 'share_holding_patterns']);
Route::any('/voting_results', [home::class, 'voting_results']);
Route::any('/insider_trading_code', [home::class, 'insider_trading_code']);
Route::any('/credit_rating', [home::class, 'credit_rating']);

Route::any('/boardofdirector', [home::class, 'boardofdirector']);
Route::any('/board_meetings', [home::class, 'board_meetings']);
Route::any('/agm', [home::class, 'agm']);
Route::any('/egm', [home::class, 'egm']);
Route::any('/general_meeting_transcripts', [home::class, 'general_meeting_transcripts']);
Route::any('/transfer_of_share_to_iepf', [home::class, 'transfer_of_share_to_iepf']);

Route::any('/isl_nclt_petitions', [home::class, 'isl_nclt_petitions']);
Route::any('/annexure_1st_to_12th_of_petitions', [home::class, 'annexure_1st_to_12th_of_petitions']);
Route::any('/annexure_13th_list_of_depositors', [home::class, 'annexure_13th_list_of_depositors']);
Route::any('/list_of_fd_holder', [home::class, 'list_of_fd_holder']);
Route::any('/annexure_14th_to_16th_of_petitions', [home::class, 'annexure_14th_to_16th_of_petitions']);
Route::any('/advertisments', [home::class, 'advertisments']);

Route::any('/policies_on_meteriatity_of_events', [home::class, 'policies_on_meteriatity_of_events']);
Route::any('/policies_on_preservations_of_documents', [home::class, 'policies_on_preservations_of_documents']);
Route::any('/code_of_fair_disclosure', [home::class, 'code_of_fair_disclosure']);
Route::any('/t_and_c_of_appointment', [home::class, 't_and_c_of_appointment']);
Route::any('/party_transcation_policies', [home::class, 'party_transcation_policies']);
Route::any('/risk_management_policies', [home::class, 'risk_management_policies']);
Route::any('/metrails_subsidiary', [home::class, 'metrails_subsidiary']);
Route::any('/familiarization_programme', [home::class, 'familiarization_programme']);
Route::any('/whistle_blower_policies', [home::class, 'whistle_blower_policies']);
Route::any('/compostion_of_committees', [home::class, 'compostion_of_committees']);

// Division
Route::any('/herbalplusd', [Home::class, 'herbalplusd']);
Route::any('/nobledivision', [Home::class, 'nobledivision']);
Route::any('/novadivision', [Home::class, 'novadivision']);
Route::any('/ethicaldivision', [Home::class, 'ethicaldivision']);
Route::any('/genericdivision', [Home::class, 'genericdivision']);
Route::any('/institutiondivision', [Home::class, 'institutiondivision']);
Route::any('/proposeddivisions', [Home::class, 'proposeddivisions']);

// Admin_panel
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/admin.dashboard');
})->name('/dashboard');

// InvertorController
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/investor', [InvertorController::class, 'investor']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/investoradd', [InvertorController::class, 'investoradd']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/create_investor', [InvertorController::class, 'create_investor']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/investoredit/{id}', [InvertorController::class, 'investoredit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/investordelete/{id}', [InvertorController::class, 'investordelete']);

// Admin home
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/home', [AdminHome::class, 'homeshow']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/homeadd', [AdminHome::class, 'homeadd']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/homesubmit', [AdminHome::class, 'homesubmit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/homeedit/{id}', [AdminHome::class, 'homeedit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/homeeditsubmit', [AdminHome::class, 'homeeditsubmit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/homedelete/{id}', [AdminHome::class, 'homedelete']);

// Admin aboutus
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutus', [AdminHome::class, 'aboutusshow']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutusadd', [AdminHome::class, 'aboutusadd']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutussubmit', [AdminHome::class, 'aboutussubmit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutusedit/{id}', [AdminHome::class, 'aboutusedit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutuseditsubmit', [AdminHome::class, 'aboutuseditsubmit']);
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/aboutusdelete/{id}', [AdminHome::class, 'aboutusdelete']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\OurFeatures;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\Services\OurServices;
use App\Http\Livewire\Frontend\Services\TaxService;
use App\Http\Livewire\Frontend\Advisors\OurAdvisors;
use App\Http\Livewire\Frontend\Supports\AppointmentForm;

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

Route::get('/', HomePage::class, )->name('Frontend.index');
Route::get('/Our-Features', OurFeatures::class, )->name('Frontend.features');
Route::get('/About-Us', AboutUs::class, )->name('Frontend.AboutUs');
Route::get('/Supports/Contact-Us', ContactUs::class, )->name('Frontend.ContactUs');
Route::get('/Supports/Appointment-Form', AppointmentForm::class, )->name('Frontend.Appointment');
Route::get('/Advisors/Our-Advisors', OurAdvisors::class, )->name('Frontend.OurAdvisors');
Route::get('/Advisors/Our-Advisors/Advisor-Details', OurAdvisors::class, )->name('Frontend.AdvisorDetail');
Route::get('/Services/Our-Services', OurServices::class, )->name('Frontend.OurServices');
Route::get('/Services/Our-Services/TaxServices', TaxService::class, )->name('Frontend.TaxServices');

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
use App\Http\Livewire\Frontend\Supports\OurProcess;
use App\Http\Livewire\UsersPDF\NtnFormPdf;
use App\Http\Livewire\Backend\Auth\LoginForm;
use App\Http\Livewire\Backend\Dashboard;

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
Route::get('/Download-Form', [HomePage::class, 'DownlaodExcelForm'])->name('Frontend.Download');
Route::get('/Our-Features', OurFeatures::class, )->name('Frontend.features');
Route::get('/About-Us', AboutUs::class, )->name('Frontend.AboutUs');
Route::get('/Supports/Contact-Us', ContactUs::class, )->name('Frontend.ContactUs');
Route::get('/Supports/Our-Process', OurProcess::class, )->name('Frontend.Process');
Route::post('/Supports/Contact-Us/Submit-Form', [ContactUs::class, 'submitContact'] )->name('Frontend.PostContact');
Route::get('/Supports/Appointment-Form', AppointmentForm::class, )->name('Frontend.Appointment');
Route::post('/Supports/Appointment-Form/Submit-Form', [AppointmentForm::class, 'submitAppointments'] )->name('Frontend.PostAppointment');
Route::get('/Advisors/Our-Advisors', OurAdvisors::class, )->name('Frontend.OurAdvisors');
Route::get('/Advisors/Our-Advisors/Advisor-Details', OurAdvisors::class, )->name('Frontend.AdvisorDetail');
Route::get('/Services/Our-Services', OurServices::class, )->name('Frontend.OurServices');
Route::get('/Services/Our-Services/TaxServices', TaxService::class, )->name('Frontend.TaxServices');

Route::get('/NTN-Submitted-Form/{user_id}/View-PDF', [NtnFormPdf::class, 'render'] )->name('Frontend.ViewPDF');
Route::get('/NTN-Submitted-Form/{user_id}/Download-PDF', [NtnFormPdf::class, 'generatePDF'] )->name('Frontend.DownloadPDF');

// Backend Routes

Route::get('/Backend/Admin/Login-Form', [LoginForm::class, 'render'])->name('Backend.LoginForm');
Route::post('/Backend/Admin/Login-Form/Submit', [LoginForm::class, 'LoginSubmit'])->name('Backend.LoginForm.Submit');
Route::get('/Backend/Admin/Dashboard', [Dashboard::class, 'render'] )->name('Admin.Dashboard');
Route::get('/Backend/Admin/LogOut', [LoginForm::class, 'AdminLogout'])->name('Admin.Logout');
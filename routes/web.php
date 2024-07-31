<?php

use Illuminate\Support\Facades\Route;

use App\Filament\Pages\Register;
use App\Filament\User\Pages\RegisterEst;
use App\Livewire\Certificate;

use App\Http\Middleware\Authenticate;
use App\Filament\Pages\Auth\Login;
use App\Filament\User\Pages\UnderConstruction;
use App\Filament\User\Resources\Month13thResource\Pages\Month13thSubmit;
use App\Filament\User\Resources\WairResource\Pages\WairSelect;
use App\Filament\User\Resources\WairResource\Pages\AccidentCreate;
use App\Filament\User\Resources\WairResource\Pages\IllnessCreate;
use App\Filament\User\Resources\WairResource\Pages\AccIllCreate;
use App\Filament\User\Resources\WairResource\Pages\NoAccIllCreate;
use App\Filament\User\Resources\TeleReportResource\Pages\TeleHeadCreate;
use App\Filament\User\Resources\TeleReportResource\Pages\TeleBranchCreate;
use App\Filament\User\Resources\FlexibleWorkResource\Pages\FlexibleWorkCreate;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

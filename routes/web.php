<?php
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\OrigenprospectoController;
use App\Http\Controllers\ProspectoController;
use App\Models\Prospecto;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        $prospectos = Prospecto::latest('created_at')->paginate(5);
        return view('prospectos.index', ['prospectos' => $prospectos]);
    })->name('prospectos');
});


Route::resource('convenios', ConvenioController::class);
Route::resource('origenprospectos', OrigenprospectoController::class);

Route::resource('prospectos', ProspectoController::class);
<?php
use App\Http\Controllers\TesController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TablighAkbarController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ParticipantTaController;
use App\Http\Controllers\DashboardAdminCompetitionController;
use App\Http\Controllers\DashboardAdminSubCompetitionController;
use App\Http\Controllers\DashboardAdminTaController;
use App\Http\Controllers\DashboardAdminQnaController;
use App\Http\Controllers\DashboardAdminProfileController;
use App\Models\Competition;
use App\Models\SubCompetition;
use App\Models\TablighAkbar;
use App\Models\Participant;
use App\Models\ParticipantsTa;
use App\Models\Qna;
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

Route::get('/', function () {
    return view('Home', [
        "judul" => "Home | ACMI 2022"
    ]);
});

Route::get('/competition', function () {
    return view('competition.index', [
        "judul" => "Competition | ACMI 2022",
        'competitions' => Competition::all()
    ]);
});
Route::get('/competition/registration/{id}', [ParticipantController::class, 'create'])->middleware('auth');
Route::resource('/competition/registration', ParticipantController::class)->middleware('auth');

Route::get('/tabligh-akbar',[TablighAkbarController::class,'index']);
Route::get('/tabligh-akbar/registration/{id}', [ParticipantTaController::class, 'create']);
Route::resource('/tabligh-akbar/registration', ParticipantTaController::class)->middleware('auth');

Route::get('/qna',[QnAController::class,'index']);

Route::get('/about', function () {
    return view('about', [
        "judul" => "About | ACMI 2022"
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function()
{
    return view('dashboard-admin.index');
})->middleware('auth');

Route::resource('/dashboard/profile', DashboardAdminProfileController::class)->middleware('auth');

Route::get('/dashboard/mycompetition', function () {
    return view('dashboard-admin.my-competition.index', [
        "judul" => "My Competition | ACMI 2022",
        'participants' => Participant::all(),
        'user' => auth()->user()
    ]);
});

Route::get('/dashboard/mytablighakbar', function () {
    return view('dashboard-admin.my-tabligh-akbar.index', [
        "judul" => "My Tabligh Akbar | ACMI 2022",
        'participantTa' => ParticipantsTa::all(),
        'user' => auth()->user()
    ]);
});

Route::resource('/dashboard/competition', DashboardAdminCompetitionController::class)->middleware('admin');
Route::resource('/dashboard/sub_competition', DashboardAdminSubCompetitionController::class)->middleware('admin');

Route::resource('/dashboard/tabligh-akbar', DashboardAdminTaController::class)->middleware('admin');

Route::get('/dashboard/participants', function()
{
    return view('dashboard-admin.participants.index', [
        'competitions' => Competition::all(),
        'subCompetitions' => SubCompetition::all(),
        'tablighAkbars' => TablighAkbar::all(),
        'participants' => Participant::all(),
        'participantTas' => ParticipantsTa::all()
    ]);
})->middleware('admin');

Route::get('/dashboard/participants/gelombang/{id}', function($id)
{
    return view('dashboard-admin.participants.showgelombang', [
        'subCompetition' => SubCompetition::find($id),
        'participants' => Participant::all()
    ]);
})->middleware('admin');

Route::get('/dashboard/participants/competition/{id}', function($id)
{
    return view('dashboard-admin.participants.showall', [
        'competition' => Competition::find($id),
        'subCompetitions' => SubCompetition::all(),
        'participants' => Participant::all()
    ]);
})->middleware('admin');

Route::get('/dashboard/participants/tabligh-akbar/{id}', function($id)
{
    return view('dashboard-admin.participants.showta', [
        'tablighAkbar' => TablighAkbar::find($id),
        'participantTas' => ParticipantsTa::all()
    ]);
})->middleware('admin');

Route::resource('/dashboard/qna', DashboardAdminQnaController::class)->middleware('admin');

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
use App\Http\Controllers\MyCompetitionController;
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
/*menampilkan competition pada home*/

Route::get('/competition', function () {
    return view('competition.index', [
        "judul" => "Competition | ACMI 2022",
        'competitions' => Competition::where('visibility',true)->get(),
        'participants' => Participant::where('user_id',auth()->user()->id)->get(),
        'subCompetitions' => SubCompetition::all()
    ]);
});
/*mendaftar lomba memerlukan login*/
Route::get('/competition/registration/{id}', [ParticipantController::class, 'create'])->middleware('auth');
Route::resource('/competition/registration', ParticipantController::class)->middleware('auth');

/*menampilkan halaman ta pada home*/
Route::get('/tabligh-akbar',[TablighAkbarController::class,'index']);

/*entitas participant ta, user create dengan registrasi, admin bisa melihat dan menghapus*/
Route::get('/tabligh-akbar/registration/{id}', [ParticipantTaController::class, 'create'])->middleware('auth');
Route::resource('/tabligh-akbar/registration', ParticipantTaController::class)->middleware('auth');

Route::get('/qna',[QnAController::class,'index']);
Route::post('/qna',[QnAController::class,'store']);

Route::get('/about', function () {
    return view('about', [
        "judul" => "About | ACMI 2022"
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
/*logout menggunakan post dengan merekam button yg ditekan*/
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function()
{
    return view('dashboard-admin.index');
})->middleware('auth');

/*dashboard crud profile admin*/
Route::resource('/dashboard/profile', DashboardAdminProfileController::class)->middleware('auth','admin');

Route::put('/dashboard/mycompetition/{id}',[MyCompetitionController::class,'submission'])->middleware('auth');
Route::get('/dashboard/mycompetition',[MyCompetitionController::class,'index'])->middleware('auth');

/*ini untuk dashboard peserta, melihat ta yg diikutinya*/
Route::get('/dashboard/mytablighakbar', function () {
    return view('dashboard-admin.my-tabligh-akbar.index', [
        "judul" => "My Tabligh Akbar | ACMI 2022",
        'participantTa' => ParticipantsTa::all(),
        'user' => auth()->user()
    ]);
})->middleware('auth');

/*this three route is for crud competition, subcom, and ta*/
Route::put('/dashboard/competition/{id}', [DashboardAdminCompetitionController::class,'hide'])->middleware('admin');
Route::resource('/dashboard/competition', DashboardAdminCompetitionController::class)->middleware('admin');
Route::put('/dashboard/sub_competition/{id}', [DashboardAdminSubCompetitionController::class,'hide'])->middleware('admin');
Route::resource('/dashboard/sub_competition', DashboardAdminSubCompetitionController::class)->middleware('admin');

Route::put('/dashboard/tabligh-akbar/{id}', [DashboardAdminTaController::class, 'destroy'])->middleware('admin');
Route::put('/dashboard/tabligh-akbar/{id}/edit', [DashboardAdminTaController::class, 'update'])->middleware('admin');
Route::resource('/dashboard/tabligh-akbar', DashboardAdminTaController::class)->middleware('admin');

/*untuk menampilkan dashboard partisipan dan memilih kompetisi, gelombang, ta mana yg mau dilihat*/
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
    $sub_competition = SubCompetition::find($id);
    return view('dashboard-admin.participants.showgelombang', [
        'competition' => Competition::find($sub_competition->competition_id),
        'subCompetition' => SubCompetition::find($id),
        'participants' => Participant::all()
    ]);
})->name('participant_table')->middleware('admin');

// Verif participant
Route::put('/dashboard/participants/gelombang/{id}/verif/{participant_id}', function($id,$participant_id)
{
    Participant::where('id',$participant_id)->update(['verified'=>true]);
    return redirect()->route('participant_table',[$id]);

})->middleware('admin');

/*ini untuk menampilkan semua peserta di semua gelombang*/
Route::get('/dashboard/participants/competition/{id}', function($id)
{
    return view('dashboard-admin.participants.showall', [
        'competition' => Competition::find($id),
        'subCompetitions' => SubCompetition::all(),
        'participants' => Participant::all()
    ]);
})->middleware('admin');

/*hanya menampilkan (read) partisipan TA, hanya bisa diakses admin*/
Route::get('/dashboard/participants/tabligh-akbar/{id}', function($id)
{
    return view('dashboard-admin.participants.showta', [
        'tablighAkbar' => TablighAkbar::find($id),
        'participantTas' => ParticipantsTa::all()
    ]);
})->middleware('admin');

/*untuk admin mengedit jawaban*/
Route::resource('/dashboard/qna', DashboardAdminQnaController::class)->middleware('admin');

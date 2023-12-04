<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tambahumat_Controller;
use App\Http\Controllers\Daftarumat_Controller;
use App\Http\Controllers\Persembahan_Controller;
use App\Http\Controllers\Umat_Controller;
use App\Http\Controllers\Pendaftaran_Controller;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\isAdmin;
use Illuminate\Auth\Middleware\isUmat;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// })->middleware(['auth']); 

Route::get('/home.admin', function () {
    return view('admin.home');
});
Route::get('/login','Admin_Controller@login'); 
Route::get('/loginpage','Admin_Controller@loginpage')->name('loginadmin'); 
Route::post('/logout', 'logout_Controller@logout');

Route::get('/homeadmin','Admin_Controller@homeadmin')->middleware(['auth', 'admin']); 

// BAGIAN ADMIN
    // Umat
Route::get('/tambahumat','Tambahumat_Controller@tambahumat')->middleware(['auth', 'admin']);  
Route::post('/addumat','Tambahumat_Controller@tambahdata')->middleware(['auth', 'admin']);  
route::get('/deleteumat/{id}','Tambahumat_Controller@deleteumat')->middleware(['auth', 'admin']); 
route::get('/prosesviewdata/{id}','Tambahumat_Controller@findid')->middleware(['auth', 'admin']); 
route::post('/editumat/{id}','Tambahumat_Controller@editumat')->name('editumat')->middleware(['auth', 'admin']);  
Route::get('/daftarumat', ['uses'=>'Daftarumat_Controller@daftarumat', 'as'=>'admin.daftarumat'])->middleware(['auth', 'admin']); 
Route::get('/profileumat/{id}','Umat_Controller@viewdaftarumat')->middleware(['auth', 'admin']);  
Route::get('/baptis','Daftarumat_Controller@baptis')->middleware(['auth', 'admin']);  
Route::get('/komuni','Daftarumat_Controller@komuni')->middleware(['auth', 'admin']); 

    // Jadwal Misa
Route::get('/jadwalmisa','Jadwalmisa_Controller@jadwalmisa')->middleware(['auth', 'admin']);  
Route::post('/addjadwalmisa','Jadwalmisa_Controller@addjadwalmisa')->middleware(['auth', 'admin']); 
route::get('/deletejadwal/{id}','Jadwalmisa_Controller@deletejadwal')->middleware(['auth', 'admin']); 
route::get('/viewdatamisa/{id}','Jadwalmisa_Controller@findjadwal')->middleware(['auth', 'admin']); 
route::get('/editjadwal/{id}','Jadwalmisa_Controller@editjadwal')->name('editjadwal')->middleware(['auth', 'admin']); 
route::get('/cetakjadwalmisa_pdf','Jadwalmisa_Controller@cetakjadwalmisa_pdf')->middleware(['auth', 'admin']); 
Route::get('/pendaftaran','Jadwalmisa_Controller@pendaftaran')->middleware(['auth', 'admin']); 
Route::get('/detailmisa/{id}','Pendaftaran_Controller@detailmisa')->middleware(['auth', 'admin']);
Route::get('/cetakdetailmisa_pdf/{id}','Jadwalmisa_Controller@cetakdetailmisa_pdf')->middleware(['auth', 'admin']); 

    // Persembahan Kolekte
Route::get('/persembahan','Persembahan_Controller@persembahan')->middleware(['auth', 'admin']);  
Route::post('/addpersembahan','Persembahan_Controller@addpersembahan')->middleware(['auth', 'admin']);  
route::get('/deletepersembahan/{id}','Persembahan_Controller@deletepersembahan')->middleware(['auth', 'admin']); 
route::get('/viewdatapersembahan/{id}','Persembahan_Controller@findpersembahan')->middleware(['auth', 'admin']); 
route::get('/editpersembahan/{id}','Persembahan_Controller@editpersembahan')->name('editpersembahan')->middleware(['auth', 'admin']); 
Route::get('/cetakpersembahan_pdf','Persembahan_Controller@cetakpersembahan_pdf')->middleware(['auth', 'admin']); 

    // Persembahan Lingkungan
Route::get('/persembahanling','Persembahan_Controller@persembahanling')->middleware(['auth', 'admin']);  
Route::post('/addpersembahanling','Persembahan_Controller@addpersembahanling')->middleware(['auth', 'admin']);  
route::get('/deletepersembahanling/{id}','Persembahan_Controller@deletepersembahanling')->middleware(['auth', 'admin']); 
route::get('/viewdatapersembahanling/{id}','Persembahan_Controller@findpersembahanling')->middleware(['auth', 'admin']); 
route::get('/editpersembahanling/{id}','Persembahan_Controller@editpersembahanling')->name('editpersembahanling')->middleware(['auth', 'admin']); 
Route::get('/cetakpersembahanling_pdf','Persembahan_Controller@cetakpersembahanling_pdf')->middleware(['auth', 'admin']);  
route::get('/viewdata/{id}','Persembahan_Controller@viewdata')->middleware(['auth', 'admin']); 

    // Jadwal Kegiatan
Route::get('/jadwalkegiatan','Jadwalkegiatan_Controller@jadwalkegiatan')->middleware(['auth', 'admin']);  
Route::post('/addjadwalkegiatan','Jadwalkegiatan_Controller@addjadwalkegiatan')->middleware(['auth', 'admin']); 
route::get('/deletejadwalkegiatan/{id}','Jadwalkegiatan_Controller@deletejadwalkegiatan')->middleware(['auth', 'admin']); 
route::get('/viewdatakegiatan/{id}','Jadwalkegiatan_Controller@findjadwalkegiatan')->middleware(['auth', 'admin']); 
route::get('/editjadwalkegiatan{id}','Jadwalkegiatan_Controller@editjadwalkegiatan')->name('editjadwalkegiatan')->middleware(['auth', 'admin']); 


//BAGIAN UMAT
Route::get('/datamisaumat','Pendaftaran_Controller@datamisaumat'); 
Route::get('/validasi','Pendaftaran_Controller@validasi'); 
Route::get('/pendaftaranmisa','Pendaftaran_Controller@homeumat'); 
route::post('/addpendaftaran','Pendaftaran_Controller@addpendaftaran')->name('addpendaftaran')->middleware(['auth', 'umat']);  
route::get('/deletependaftaran/{id}','Pendaftaran_Controller@deletependaftaran');
Route::get('/downloaddata/{id}','Pendaftaran_Controller@downloaddata');
Route::get('/viewtiket','Pendaftaran_Controller@viewtiket')->middleware(['auth', 'umat']); 
route::post('/daftar','Pendaftaran_Controller@daftar')->name('daftar');

// Halaman Umat 
Route::get('/','Umat_Controller@indexumat');
Route::get('/indexumat','Umat_Controller@indexumat')->middleware(['auth', 'umat']); 
Route::get('/loginumat','Umat_Controller@loginumat');

//Route::get('/index','Umat_Controller@index');
Route::get('/viewpersembahan','Umat_Controller@viewpersembahan');
Route::get('/viewkegiatan','Umat_Controller@viewkegiatan');
Route::get('/viewjadwalmisa','Umat_Controller@viewjadwalmisa');
Route::get('/viewpendaftaranmisa','Umat_Controller@viewpendaftaranmisa')->middleware(['auth', 'umat']); 
Route::get('/pilihjadwal','Umat_Controller@pilihjadwal')->middleware(['auth', 'umat']); 
Route::get('/lihatjadwal/{id}','Umat_Controller@lihatjadwal')->middleware(['auth', 'umat']); 

// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   
//     /**
//      * Home Routes
//      */
//     Route::get('/index', 'home_Controller@index')->name('home.index');

//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'register_Controller@show')->name('register.show');
//         Route::post('/register', 'register_Controller@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'login_controller@show')->name('login.show');
//         Route::post('/login', 'login_controller@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'logout_Controller@perform')->name('logout.perform');
//     });
// });
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/register','login_controller@Register')->name('register'); 
Route::post('/submit/login','login_controller@login')->name('sublogin');
Route::get('/umatdaftar/{ling}','daftarumat_controller@umatdaftar');
Route::get('itemPdfView',[ItemController::class,'itemPdfView']);
Route::post('itemPdfView',array('as'=>'itemPdfView','uses'=>'ItemController@itemPdfView')); 

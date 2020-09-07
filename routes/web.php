
<?php


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


return view('index');


});


Route::resource('anggota','AnggotaController');


Route::resource('kategori','KategoriController');


Route::resource('buku','BukuController');


Route::resource('transaksi','TransaksiController');


Route::get('transaksi/edit/{id}', 'TransaksiController@edit');


Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');


Route::get('transaksi/getAnggota/{id}', 'TransaksiController@getAnggota');


Route::post('/transaksi/update/{id}', 'TransaksiController@update');
Route::get('buku/destroy/{id}','BukuController@destroy');


//nggo nampilke form edit
Route::get('buku/edit/{id}','BukuController@edit');
Route::get('anggota/edit/{id}','AnggotaController@edit');
Route::get('kategori/edit/{id}','KategoriController@edit');

//nggo update
Route::post('buku/update','BukuController@update');
Route::post('/anggota/update','AnggotaController@update');
Route::post('/kategori/update','KategoriController@update');

Route::get('anggota/destroy/{id}','AnggotaController@destroy');
Route::get('kategori/destroy/{id}','KategoriController@destroy');
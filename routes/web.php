<?php

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
    return view('home', [
        'title' => 'Hello World!',
        'bio' => 'Scopri come cambiare la tua vita, prenota subito uno dei miei corsi!'
    ]); 
})->name('home');

Route::get('/contatti', function() {
    return view('contatti', [
        'nome' => 'Alessandra',
        'cognome' => 'Torricelli',
        'mail' => 'polidora.srl@gmail.com',
        'indirizzo' => 'Calle de la Rosa, Tenerife, Spagna'
    ]);
})->name('contatti');

Route::get('/servizi', function() {
    return view('servizi', [
        'titolo_corso_1' => 'Impara a non commentare sui social!',
        'descrizione_corso_1' => 'Un corso intensivo di 3 giorni in barca a Tenerife in cui imparerai a non sentire il bisogno di esprimere la tua opinione commentando i post di sconosciuti evitando così di trovarti in situazioni poco edificanti per la tua reputazione.',
        'costo_corso_1' => '950.00 € OFFERTA SPECIALE (pernottamento 2 notti e pasti inclusi)',
        'titolo_corso_2' => 'Sèmplicèmènte tè!',
        'descrizione_corso_2' => 'Una settimana ricca di seminari, sulle dorate spiaggie di tenerife, ti apriranno gli occhi iniziandoti ad una nuova vita e dimostrandoti che i filtri che usi su Instagram si vedono tutti, ma proprio tutti tutti tutti.',
        'costo_corso_2' => '2,600.00 € (pernottamento 5 notti e pasti inclusi)'
    ]);
})->name('servizi');

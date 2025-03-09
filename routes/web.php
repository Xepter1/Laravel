<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas',function(){
    return view('ninjas.index');
});

// Neue Route zum Testen der Datenbankverbindung
Route::get('/dbtest', function () {
    try {
        DB::connection()->getPdo();
        return 'Verbindung zur Datenbank erfolgreich!';
    } catch (\Exception $e) {
        return 'Keine Verbindung zur Datenbank: ' . $e->getMessage();
    }
});
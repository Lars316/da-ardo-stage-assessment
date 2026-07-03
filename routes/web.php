<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jsonPad = base_path('energy_prices.json');
    $gegevens = [];

    if (file_exists($jsonPad)) {
        $inhoud = file_get_contents($jsonPad);
        $gegevens = json_decode($inhoud, true) ?? [];
    }

    $prijzen = $gegevens['Prices'] ?? [];

    return view('welcome', compact('prijzen', 'gegevens'));
});

<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    try {
        $date = Carbon::parse('2026-07-02')->format('d-m-Y');

        $jsonPad = "https://public.api.energyzero.nl/public/v1/prices?date={$date}&interval=INTERVAL_HOUR&energyType=ENERGY_TYPE_ELECTRICITY";
        $response = Http::get($jsonPad);

        $gegevens = $response->successful() ? $response->json() : [];
        $prijzen = $gegevens['Prices'] ?? [];
    } catch (\Exception $e) {
        $gegevens = [];
        $prijzen = [];
    }

    return view('welcome', compact('gegevens', 'prijzen'));
});

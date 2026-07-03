<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    try {
        $fromDate = Carbon::parse('2026-07-02')->startOfDay()->utc();
        $tillDate = $fromDate->copy()->addDay()->utc();

        $jsonPad = 'https://public.api.energyzero.nl/public/v1/prices?date=03-07-2026&interval=INTERVAL_HOUR&energyType=ENERGY_TYPE_ELECTRICITY';
        $response = Http::get($jsonPad, [
            'fromDate' => $fromDate->format('Y-m-d\TH:i:s\Z'),
            'tillDate' => $tillDate->format('Y-m-d\TH:i:s\Z'),
            'interval' => 'PT1H',
            'usageType' => 1,
            'inclBtw' => 'true',
        ]);

        $gegevens = $response->successful() ? $response->json() : [];
        $prijzen = $gegevens['Prices'] ?? [];
    } catch (\Exception $e) {
        $gegevens = [];
        $prijzen = [];
    }

    return view('welcome', compact('gegevens', 'prijzen'));
});

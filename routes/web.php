<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    try {
        $requestedDate = Carbon::parse('2026-07-03');
        $date = $requestedDate->format('d-m-Y');

        $jsonPad = "https://public.api.energyzero.nl/public/v1/prices?date={$date}&interval=INTERVAL_HOUR&energyType=ENERGY_TYPE_ELECTRICITY";
        $response = Http::get($jsonPad);

        $gegevens = $response->successful() ? $response->json() : [];
        $prijzen = collect($gegevens['base'] ?? [])->filter(function ($prijs) use ($requestedDate) {
            return isset($prijs['start']) && Carbon::parse($prijs['start'])->isSameDay($requestedDate);
        })->values()->all();

        if (!empty($prijzen)) {
            $gegevens['range'] = [
                'start' => $prijzen[0]['start'],
                'end' => end($prijzen)['start'],
            ];

            $prijzenCollect = collect($prijzen);
            $highestValue = $prijzenCollect->max(fn ($item) => data_get($item, 'price.value', 0));
            $lowestValue = $prijzenCollect->min(fn ($item) => data_get($item, 'price.value', 0));

            $gegevens['summary'] = [
                'highest' => $prijzenCollect->first(fn ($item) => data_get($item, 'price.value') === $highestValue),
                'lowest' => $prijzenCollect->first(fn ($item) => data_get($item, 'price.value') === $lowestValue),
            ];
        }
    } catch (\Exception $e) {
        $gegevens = [];
        $prijzen = [];
    }

    return view('welcome', compact('gegevens', 'prijzen'));
});

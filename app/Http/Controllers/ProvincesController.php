<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvincesController extends Controller
{
    public function index()
    {
     $response = Http::withOptions([
        'verify' => false, // Disables SSL Verification (Not recommended for production)
        ])->get('https://psgc.gitlab.io/api/provinces/'); // Use the JSON endpoint

        if ($response->successful()) {
            $provinces = $response->json(); // Fetch and decode the JSON
            usort($provinces, function ($a, $b) {
             return strcmp($a['name'], $b['name']);
             });
            return view('register', compact('provinces'));
        } else {
            return response('Failed to fetch provinces', 500);
        }
    }
}

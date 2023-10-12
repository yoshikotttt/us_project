<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkywayController extends Controller
{
    public function showSkyway2()
    {
        return view('skyway2', ['skywayApiKey' => env('SKYWAY_API_KEY')]);
    }
}

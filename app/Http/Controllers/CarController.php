<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() { 
        $cars = Car::where('status', 'available')->get(); 
        return view('index', compact('cars')); }
}


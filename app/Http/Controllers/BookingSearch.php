<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class BookingSearch extends Controller
{
    public function search(Request $request)
    {
         $validated = $request->validate([
            'pickup_location' => 'required|string|max:255',
            'drop_location' => 'required|string|max:255',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after_or_equal:pickup_date',
        ]);

        return view('booking-results', [
            'booking' => $validated,
        ]);
    }
}

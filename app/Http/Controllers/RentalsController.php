<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    public function index(Request $request) {
        $rents = Rent::all();
        return view('rent.rentals',compact('rents'));
    }
}

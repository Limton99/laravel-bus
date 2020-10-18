<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function passengers() {
        return Passenger::all();
    }

    public function delete($id) {
        $passenger = Passenger::findOrFail($id);

        $passenger->delete();

        return redirect()->back();
    }
}

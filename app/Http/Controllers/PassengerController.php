<?php

namespace App\Http\Controllers;

use App\Models\Cruise;
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

    public function saveRoute($id) {
        $cruise = Cruise::findOrFail($id);
        return view('make-order', ['cruise'=>$cruise]);
    }

    public function save(Request $request) {
        $passenger = new Passenger();
        $passenger->name = $request->input('name');
        $passenger->phone_number = $request->input('phone');
        $passenger->email = $request->input('email');
        $passenger->place = $request->input('place');
        $passenger->price = $request->input('price');
        $passenger->cruise_id = $request->input('bus_id');

        $passenger->save();
        return redirect()->route('cruise-one', $passenger->cruise_id);
    }

    public function update($id) {
        $passenger = Passenger::with('cruise')->findOrFail($id);
        return view('update-passenger', ['passenger'=>$passenger]);
    }

    public function updateCheck(Request $request, $id) {
        $passenger = Passenger::findOrFail($id);
        $passenger->name = $request->input('name');
        $passenger->phone_number = $request->input('phone');
        $passenger->email = $request->input('email');
        $passenger->place = $request->input('place');
        $passenger->price = $request->input('price');
        $passenger->cruise_id = $request->input('bus_id');

        $passenger->save();
        return redirect()->route('cruise-one', $passenger->cruise_id);
    }
}

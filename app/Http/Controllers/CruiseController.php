<?php

namespace App\Http\Controllers;

use App\Models\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CruiseController extends Controller
{
    public function cruise() {
        return view('cruises', ['cruises' => Cruise::all()]);
    }

    public function cruiseOne($id) {
        return view('cruise-one', ['cruise' => Cruise::with("passenger")->findOrFail($id)]);
    }

    public function cruise_check(Request $request) {

        if ($files = $request->file('image')) {
            $cruise = new Cruise();
            $cruise->name = $request->input("name");
            $cruise->departure_date = $request->input("departure_date");
            $cruise->arrival_date = $request->input("arrival_date");
            $cruise->bus = $request->input("bus");
            $cruise->capacity = $request->input("capacity");
            $cruise->bus_number = $request->input("bus_number");
            $file = Storage::putFile('images', $request->file('image'));
            $cruise->image = $file;
            return redirect()->route('cruises');
        }
    }

    public function cruise_update($id) {

        return view('cruises_update', ['cruise' => Cruise::findOrFail($id)]);
    }

    public function cruise_delete($id) {
        $cruise = Cruise::findOrFail($id);
        $cruise->delete();

        return redirect()->route('cruises');
    }

    public function search(Request $request) {
//        dd($request);
        $from = $request->get("from");
        $to = $request->input("to");
        $cruise = DB::table('cruises')->where('from', '=', $from)
            ->where('to', '=', $to)->get();
        return view('cruises', ['cruises' => $cruise]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class AdminStationController extends Controller
{
    public function index() {
        $stations = Station::all();
        $markers = [];
        foreach ($stations as $station) {
            $markers[] = [
                "lat" => $station->lang,
                'long' => $station->long,
                'info' => $station->city . "<br>" . $station->address . "<br>" . "ტიპი:" . $station->type,
                'icon' => asset('images/dir-img.jpg'),
            ];
        }
        return view('admin.stations.stations', [
            'markers' => $markers,
            'stations' => $stations
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'lang' => 'required',
            'long' => 'required',
            'address' => 'required',
            'city' => 'required',
            'type' => 'required',
            'number' => 'required'
        ]);

        Station::create($attributes);

        return redirect('/admin/stations')->with('success', "სადგური წარმატებით დაემატა");
    }
}

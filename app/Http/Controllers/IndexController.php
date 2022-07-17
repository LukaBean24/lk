<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Price;
use App\Models\Station;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index', [
            'prices' => Price::latest()->first(),
            'posts' => Post::all(),
            'notification' => Notification::latest()->first(),
            'banners' => Carousel::all(),
            'banner_first' => Carousel::first(),
            'banner_last' => Carousel::latest()->first(),
        ]);
    }

    public function singlePost($id) {
        return view('singe-post',[
            'post' => Post::find($id),
        ]);
    }

    public function vacancies() {
        return view('vacancies', [
            "vacancies" => Vacancy::all(),
        ]);
    }

    public function singleVacancy(Vacancy $vacancy) {
        return view('single-vacancy', [
            'vacancy' => $vacancy,
        ]);
    }

    public function news() {
        return view('news', [
            'posts' => Post::all(),
        ]);
    }

    public function stations() {
        $stations = Station::all();
        $markers = [];
        foreach ($stations as $station) {
            $markers[] = [
                "lat" => $station->lang,
                'long' => $station->long,
                'info' => $station->city . "," . $station->address
            ];
        }
        return view('stations', [
            'stations' => $markers
        ]);
    }

    public function management() {
        return view('management');
    }

    public function contact() {
        return view('contact');
    }

    public function priceHistory() {
        return view('price-history', [
            'prices' => Price::all(),
        ]);
    }

    public function cards()
    {
        return view('cards');
    }

    public function aboutUs()
    {
        return view('about-us');
    }
}

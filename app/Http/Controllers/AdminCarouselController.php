<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class AdminCarouselController extends Controller
{
    public function index()
    {

        return view('admin.carousel.carousel', [
'banners' => Carousel::all()
        ]);
    }

    public function store()
    {
        if (request()->file('slide')) {
            $file = request()->file('slide')->store('carousel');
        }

        Carousel::create([
            'photo' => $file
        ]);

        return redirect('/admin/carousel')->with('success', 'ბანერი დამატებულია');
    }

    public function delete($id)
    {
        Carousel::find($id)->delete();
        return redirect('/admin/carousel')->with('success', 'ბანერი წაშლილია');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class AdminVacancyController extends Controller
{
    public function index() {
        $vacancies = Vacancy::all();

        return view('admin.vacancies.vacancies', [
            'vacancies' => $vacancies
        ]);
    }
    public function create() {

        return view('admin.vacancies.vacancy-create');
    }

    public function store() {
        $attributes = request()->validate([
            'title_en' => 'required',
            'title_ge' => 'required',
            'body_en' => 'required',
            'body_ge' => 'required',
            'slug_ge' => 'required',
            'slug_en' => 'required',
        ]);

        Vacancy::create([
            'title' => [
                "en" => $attributes["title_en"],
                "ge" => $attributes["title_ge"]
            ],
            'body' => [
                "en" => $attributes["body_en"],
                "ge" => $attributes["body_ge"]
            ],
            'slug' => [
                "en" => $attributes["slug_en"],
                "ge" => $attributes["slug_ge"]
            ]
        ]);

        return redirect('/admin/vacancies')->with('success', 'ვაკანსია წარმატებით დაემატა');

    }

    public function edit(Vacancy $vacancy) {

        return view('admin.vacancies.vacancy-edit', [
            'vacancy' => $vacancy
        ]);
    }
    public function update(Vacancy $vacancy) {
        $attributes = request()->validate([
            'title_en' => 'required',
            'title_ge' => 'required',
            'body_en' => 'required',
            'body_ge' => 'required',
            'slug_ge' => 'required',
            'slug_en' => 'required',
        ]);

        $vacancy->update([
            'title' => [
                "en" => $attributes["title_en"],
                "ge" => $attributes["title_ge"]
            ],
            'body' => [
                "en" => $attributes["body_en"],
                "ge" => $attributes["body_ge"]
            ],
            'slug' => [
                "en" => $attributes["slug_en"],
                "ge" => $attributes["slug_ge"]
            ]
        ]);

        return redirect('/admin/vacancies')->with('success', 'ვაკანსია წარმატებით ჩასწორდა');

    }

    public function delete(Vacancy $vacancy) {
        $vacancy->delete();

        return redirect('/admin/vacancies')->with('success', "ვაკანსია წაშლილია");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store() {
        $attributes = request()->validate([
            'is_company' => 'required',
            'company_name' => 'max:256|required_if:radio,company',
            'customer_name' => 'required|max:256',
            'customer_last' => 'required|max:256',
            'customer_id' => 'required|digits_between:9,11|max:11|unique:users,customer_id',
            'email' => 'email|required',
            'phone' => 'digits_between:9,12|required',
            'password' => "required|"
        ]);

        $attributes['password'] = bcrypt(request('password'));

        if (User::create($attributes)) {
            return redirect('/login')->with('success', __('please_login'));
        } else {
            return 0;
        }


    }
}

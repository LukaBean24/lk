<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store() {
        $check = false;

        $credentials = request()->validate([
            "customer_id" => 'required|digits_between:9,11',
            'password' => 'required|min:6',
        ]);

        $users = User::select('customer_id')->get();

        foreach ($users as $user) {
            if($user->customer_id == request('customer_id')) {
                $check = true;
            }
        }

        if ($check) {
            if (auth()->attempt($credentials)) {
                return redirect("/")->with('success', __("succ_login"));
            } else {
                return back()->with('danger', __('invalid_cred'));
            }
        } else {
            return back()->with('danger', __('invalid_cred'));
        }


    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success' , __('succ_logout'));
    }
}

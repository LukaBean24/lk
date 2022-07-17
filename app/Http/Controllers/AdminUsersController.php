<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        if (request('search')) {
            $users = User::where('customer_name', 'like', "%" . request('search') . "%")->orWhere('customer_last', 'like', "%" . request('search') . "%")
            ->orWhere('company_name', 'like', "%" . request('search') . "%")
            ->orWhere('customer_id', 'like', "%" . request('search') . "%")->get();
        }
        return view('admin.users.users', [
            'users' => $users
        ]);
    }

    public function edit(User $user) {
        return view('admin.users.single-user', [
            'user' => $user
        ]);
    }

    public function update(User $user) {
        $attributes = request()->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'customer_name' => 'required',
            'customer_last' => 'required'
        ]);

        if (request('discount')) {
            $attributes['discount'] = request('discount');
        }

        if (request('company_name')) {
            $attributes['company_name'] = request('company_name');
        }

        $user->update($attributes);

        return redirect('/admin/users')->with('succes', "მოხმარებლის ინფორმაცია შეცვლილია");
    }

    public function delete(User $user) {
        $user->delete();
        return redirect('/admin/users');
    }
    public function makeAdmin(User $user) {
        $user->is_admin = 'true';
        $user->save();
        return redirect('/admin/users')->with('success', "ადმინის პრივილეგია მიცემულია");
    }
    public function blockAdmin(User $user) {
        $user->is_admin = null;
        $user->save();
        return redirect('/admin/users')->with('success', "ადმინის პრივილეგია წართმეულია");
    }
    public function discountBlock(User $user) {
        $user->discount = null;
        $user->save();

        return redirect('/admin/users')->with('success', 'სპეც-ფასდაკლება გაუქმებულია');
    }
}

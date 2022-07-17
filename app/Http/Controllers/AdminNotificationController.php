<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function index() {
        return view('admin.notifications.index', [
            'notifications' => Notification::all()
        ]);
    }

    public function delete(Notification $notification) {
        $notification->delete();

        return redirect('/admin/notification')->with("success", "შეტყობინება წაშლილია");
    }

    public function store() {
        $attributes = request()->validate([
            'body_en' => 'required',
            'body_ge' => 'required'
        ]);

        Notification::create([
            "body" => [
                'en' => $attributes['body_en'],
                'ge' => $attributes['body_ge']
            ]
        ]);

        return redirect('/admin/notification')->with('success',"შეტყობინება დამატებულია,წაშალეთ ყველა სხვა შეტყობინება რათა გამოჩნდეს");
    }
}

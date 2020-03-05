<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function readAll() {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
   }

    public function read($id) {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        return redirect()->back();
    }
}

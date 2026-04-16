<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $loggedUserId = session('user.id');
        $notes = User::find($loggedUserId)->notes()->get()->toArray();

        return view('HomePage', [ 'notes' => $notes]);
    }

    public function newRoute() {
        echo "New Route!";
    }
}

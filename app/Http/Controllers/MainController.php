<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index (Request $request) {
        
        return view('controller', [ 'id' => $request->id ]);
    }

    public function controller2 (Request $request) {
        return view('controller2', [ 'id' => $request->id ]);
    }

    public function controller3 (Request $request) {
        return view('controller3', [ 'id' => $request->id ]);
    }
}

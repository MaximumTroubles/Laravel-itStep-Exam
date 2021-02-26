<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainContoller extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        return view('index');
    }
}

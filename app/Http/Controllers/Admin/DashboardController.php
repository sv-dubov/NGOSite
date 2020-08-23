<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //$user = User::all();
        return view('admin.dashboard', ['user'    =>    $user]);
    	//return view('admin.dashboard');
    }
}

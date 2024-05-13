<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //add middleware on all actions
    // public function __construct()
    // {
    //     $this->middleware(['auth'])->except('index');
    //     $this->middleware(['auth'])->only('index');

    // }
    //Actions
     public function index(){
        $user=Auth::user();
        //dd($user);
        return view('dashboard.index');//view(now iam in views folder)
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Planta;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $userId = \Auth::id();

         $user = User::find($userId);

         if($user->isAdmin == 1)
    {
         $countUser = User::count();
        $countPlant = Planta::count();

        return view('admin/DashboardAdmin',compact('countUser','countPlant'));
    }
    $plantas = Planta::all();

    return view('index',compact('plantas'));
    }
}

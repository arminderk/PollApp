<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch(Auth::user()->role) {
            case 'admin':
                return redirect()->route('admin.home');
            default:
                return redirect()->route('user.home');
        }
    }

    public function admin_home()
    {
        $polls = Poll::all();
        return view('admin/home', compact('polls'));
    }

    public function user_home()
    {
        return view('user/home');
    }
}

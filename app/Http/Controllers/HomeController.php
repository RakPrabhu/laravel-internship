<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;

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
        $event = Event::orderBy('position')->get();
        $user=User::all();
        $news=News::all();
        return view('home')->with('event',$event)->with('user',$user)->with('news',$news);
    }
}

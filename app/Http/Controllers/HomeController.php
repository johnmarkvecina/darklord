<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



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
        $users = User::paginate(10);
        return view('admin.home.index', [
            'user'=> $users
        ]); 
    }
     @return \Illuminate\Contacts\Support\Renderable
    
    public function users()
    {
        return view('admin.user');
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

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
        $user_id = Auth::user()->id; //use Auth;    
        $user = User::find($user_id);
        //$posts = Post::orderBy('id', 'DESC')->paginate(2); 
        return view('home')->with('posts', $user->posts);
    }
}

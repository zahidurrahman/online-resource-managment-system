<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Resources;
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

     public function viewAll()
     {
         $userdata = Resources::all();
        return view('users.home', compact('userdata'));
     }

     public function viewIndivisual()
     {
        return view('users.resource_details');
     }

     public function search(Request $request)
     {
         $value=$request->search_string;
         $userdata = Resources::where('book_name', 'LIKE', '%'.$value.'%')->get();
         if(count($userdata) > 0){
             return view('users.search', compact('userdata'));
         }else {
           return redirect()->back()->with('success','NO Resource Found');
         }


     }

    public function index()
    {
        return view('home');
    }

    public function profile()
    {
      $userdata = User::findOrFail(Auth::id());
      return view('auth.profile', compact('userdata'));
    }

    public function updateProfile(Request $request)
    {
      $userdata = User::findOrFail(Auth::id());
      $userdata->name = $request->name;
      $userdata->email = $request->email;
      $userdata->phone = $request->phone;
      $userdata->save();
      return redirect()->back()->with('success','Profile Successfully Updated');
    }
}

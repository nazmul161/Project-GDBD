<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index()
    {
        return view('new_home');
    }
    
    public function new_hotel_func()
    {
        return view('hotel_view');
    }

    public function save_hotel_info_func(Request $req){
        DB::table('hotels')->insert(
             ['name' => $req->name, 'location' => $req->location]
         );
        return redirect('user_packages');
     }
     public function new_package_func()
    {
        $hotels = DB::table('hotels')->select('id', 'name')->get();
      
        return view('package_view',['datas'=>$hotels]);
        
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
}

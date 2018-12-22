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
    public function save_package_info_func(Request $req){
        DB::table('package')->insert(
             ['hotel_id' => $req->hotel_id , 'fare' => $req->fare,
             'journey_time' => $req->journey_time, 'journey_place' => $req->journey_place,
             'capacity' => $req->capacity, 'transport' => $req->transport
 
         ]
         );
        return redirect('user_packages');
     }
     public function new_apartment_func()
    {
        $hotels = DB::table('hotels')->select('id', 'name')->get();
      
        return view('apartment_view',['datas'=>$hotels]);
    }
    public function save_apartment_info_func(Request $req){
        DB::table('apartments')->insert(
             ['hotel_id' => $req->hotel_id , 'apartment_no' => $req->apartment_no,
             'apartment_details' => $req->apartment_details
         ]
         );
        return redirect('new_apartment');
     }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
}

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('home',compact('products'));
    }

/**
     * Show the form for approving a particular product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct($id)
    {
        $product= Product::find($id);
        return view('product.approve')->with('product',$product);
    }
   
    /**
     * Approve vendor product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
     
        DB::table('products')->where('id', $id)->update([
            'approve' => 1
            
        ]);
    }


    /**
     * Reject vendor product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reject($id)
    {
     
        DB::table('products')->where('id', $id)->update([
            'reject' => 1
            
        ]);
    }


}

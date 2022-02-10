<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_product_;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= _product_::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data= _product_::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(request $req)
    {
       
        $data= _product_::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(request $req)
    {      
        if($req->session()->has('user'))
        {
            $cart =new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
}

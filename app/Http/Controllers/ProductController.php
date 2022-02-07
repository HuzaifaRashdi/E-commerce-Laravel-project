<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_product_;

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
       
        return $data= _product_::where('name','like','%'.$req->input('query').'%')
        ->get();
    }
}

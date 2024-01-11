<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $data['title'] = "Product Order Form";
      
        return view('product', $data);
    }
    public function calculate(Request $req)
    {
        $data['title'] = "Product Order Form";
        $data['p_name'] =  $req->input('txtPname');
        $data['p_price'] = $req->input('txtPrice');
        $data['p_qty'] = $req->input('txtQty');
        $data['p_disc'] = $req->input('txtDisc');
        // Calculate total after applying discount
        $data['total'] =   $data['p_qty'] *  $data['p_price']  * (1 -  $data['p_disc'] / 100);
        dd($req->input());
        return view('product', $data);
    }
}

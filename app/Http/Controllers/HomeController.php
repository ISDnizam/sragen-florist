<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = "Homepage";
        $data['product'] = Product::get();
        return view('home',$data);
    }

    public function about()
    {
        $data['title'] = "Tentang Kami";
        $data['product'] = Product::get();
        return view('about',$data);
    }

    public function contact()
    {
        $data['title'] = "Hubungi Kami";
        $data['product'] = Product::get();
        return view('contact',$data);
    }

    public function detail($id_product){
    $data['product'] = Product::get();
    $data['detail'] = Product::findOrFail($id_product);
    $data['title'] = "Detail Product - ".$data['detail']->title;
    return view('product_detail',$data);
    }
}

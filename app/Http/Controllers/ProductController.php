<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class ProductController extends Controller
{
    public function loadPostForm(){
        $cake_types = DB::select('select * from category_cake');
        return view('ProductPage/createcake',['cakeTypes' => $cake_types]);
    }
}
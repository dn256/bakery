<?php


namespace App\Http\Controllers;
use App\Models\Product;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use DB;


class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this -> product = new ProductRepository($product);
    }

    public function index(){
        $data = [
            'products' => $this -> product -> all()
        ];
        return view('ProductPage.index',$data);
    }

    public function show($id){
        $product = Product::findOrFail('product');
        return view('');
    }

    public function create(){
        $cake_types = DB::select('select * from category_cake');
        return view('ProductPage/createcake',['cakeTypes' => $cake_types]);
    }
}
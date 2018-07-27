<?php

namespace App\Http\Controllers;

use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    /**
     * @var Product
     */
    private $product;

    /**
     * ProductController constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {

        $this->product = $product;
    }
    public function index(Request $request)
    {
        $map = [];
        $size = $request->input('size', 9);
        $products = $this->product->fetchList($map, $size);

        return view('client.products', compact('products'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    /**
     * @var Product
     */
    private $product;

    /**
     * IndexController constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {

        $this->product = $product;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $map = [];
        $products = $this->product->fetchList($map, $request->input('size', 6), ['display_order', 'asc']);
        return view('client.index', compact('products'));
    }
}

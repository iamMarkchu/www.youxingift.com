<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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

    public function setLocale(Request $request)
    {
        $locale = $request->cookie(config('session.locale_cookie'), 'CN');

        // 如果当前是中文，则改成英文，反之，反之。
        return redirect('')->cookie(config('session.locale_cookie'), $locale=='CN' ? 'EN': 'CN');
    }

    public function contact()
    {
        return view('client.contact-us');
    }
}

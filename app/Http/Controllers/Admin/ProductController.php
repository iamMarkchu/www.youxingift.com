<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProductRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        $map = [];
        $products = $this->product->fetchList($map, $request->input('size', 30));
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        return view('admin.products-create');
    }

    /**
     * @param StoreProductRequest $request
     * @return string
     */
    public function store(StoreProductRequest $request)
    {
        $path = $request->image->store('images', 'public');
        $data = [
            'name' => $request->input('name', ''),
            'description' => $request->input('description', ''),
            'img_url' => $path,
            'display_order' => $request->input('display_order', 99),
            'user_id' => Auth::id()
        ];
        $stored = $this->product->store($data);
        return redirect(route('admin-products-store'))->with(['type' => 1, 'status' => $stored ? '添加成功!': '添加失败!']);
    }

    /**
     * @param Request $request
     * @param $id
     * @return string
     */
    public function delete($id)
    {
        $isDeleted = $this->product->tmpDelete($id);
        return redirect(route('admin-products'))->with(['type' => 1, 'status' => $isDeleted ? '删除成功!': '删除失败!']);
    }
}

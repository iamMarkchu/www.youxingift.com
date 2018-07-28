@extends('admin.app')
@section('admin-content')
    @if (session('status'))
        <div class="alert @if(session('type'))alert-success @else alert-danger @endif">
            {{ session('status') }}
        </div>
    @endif
    <form>
        <div class="row">
            <div class="col">
                <a href="{{route('admin-products-create')}}" class="btn btn-primary">添加产品</a>
            </div>
        </div>
    </form>
    <div class="contaier" style="margin-top: 3rem;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">名称</th>
                <th scope="col">图片</th>
                <th scope="col">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td><img src="{{asset('storage/'.$product->img_url)}}" alt="" class="img-fluid" width="300"></td>
                    <td><a href="{{route('admin-products-delete', ['id' => $product->id])}}" class="btn btn-danger">删除</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection
@extends('admin.app')
@section('admin-content')
    <form method="post" action="{{route('admin-products-store')}}" enctype="multipart/form-data">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="form-group">
            <label>产品名称</label>
            <input type="text" class="form-control" placeholder="产品名称" name="name">
        </div>
        <div class="form-group">
            <label>产品简介</label>
            <textarea id="" cols="30" rows="5" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>产品排序</label>
            <input type="text" class="form-control" placeholder="产品排序" name="display_order" value="99">
        </div>
        <div class="form-group">
            <label>上传图片</label>
            <input type="file" class="form-control-file" placeholder="产品名称" name="image">
        </div>
        <button type="submit" class="btn btn-primary">提交</button>
    </form>
@endsection
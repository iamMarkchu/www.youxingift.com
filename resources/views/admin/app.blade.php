@extends('client.app')
@section('content')
    <div class="container" style="min-height: 800px;">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{route('admin-index')}}" class="list-group-item list-group-item-action @if(Route::currentRouteName() == 'admin-index')active @endif">后台首页</a>
                    <a href="{{route('admin-users')}}" class="list-group-item list-group-item-action @if(Route::currentRouteName() == 'admin-users')active @endif">用户管理</a>
                    <a href="{{route('admin-products')}}" class="list-group-item list-group-item-action @if(Route::currentRouteName() == 'admin-products')active @endif">产品管理</a>
                    <a href="{{route('admin-messages')}}" class="list-group-item list-group-item-action @if(Route::currentRouteName() == 'admin-messages')active @endif">留言管理</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">操作栏</div>
                    <div class="card-body">
                        @yield('admin-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.app')
@section('admin-content')
    <div class="contaier">
        @if (session('status'))
            <div class="alert @if(session('type'))alert-success @else alert-danger @endif">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">用户名</th>
                <th scope="col">登录邮箱</th>
                <th scope="col">状态</th>
                <th scope="col">创建时间</th>
                <th scope="col">更新时间</th>
                <th scope="col">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->status}}</th>
                    <th>{{$user->created_at}}</th>
                    <th>{{$user->updated_at}}</th>
                    <th>
                        @if (!$user->status)
                            <a href="{{route('admin-users-status', ['id' => $user->id, 'action' => 'active'])}}" class="btn btn-success">激活</a>
                        @else
                            <a href="{{route('admin-users-status', ['id' => $user->id, 'action' => 'inactive'])}}" class="btn btn-danger">禁用</a>
                        @endif
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
@endsection
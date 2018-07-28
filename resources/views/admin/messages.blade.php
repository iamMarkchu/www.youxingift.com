@extends('admin.app')
@section('admin-content')
    <div class="contaier">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">客户名称</th>
                <th scope="col">客户手机号</th>
                <th scope="col">留言内容</th>
                <th scope="col">留言时间</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <th scope="row">{{$message->id}}</th>
                    <td>{{$message->name}}</td>
                    <td>{{$message->mobile}}</td>
                    <td>{{$message->content}}</td>
                    <td>{{$message->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$messages->links()}}
    </div>
@endsection
@extends('admin.app')
@section('admin-content')
    {{auth()->user()->name}}&nbsp 欢迎登录！{{now()}}
@endsection
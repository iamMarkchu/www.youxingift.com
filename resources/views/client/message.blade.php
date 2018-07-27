@extends('client.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert @if(session('type'))alert-success @else alert-danger @endif">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('message-store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">留言内容</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="" cols="20" rows="5" class="form-control" placeholder="请输入内容...."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">您的尊姓大名</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" placeholder="名字">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">您的电话</label>
                                <div class="col-sm-10">
                                    <input name="mobile" type="text" class="form-control" id="inputEmail3" placeholder="电话">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-2">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

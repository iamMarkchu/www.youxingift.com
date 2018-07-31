@extends('client.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="height: 500px;">
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('client.message_content')}}</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="" cols="20" rows="5" class="form-control" placeholder="{{__('client.message_content_placeholder')}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('client.message_name')}}</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" placeholder="{{__('client.message_name_placeholder')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('client.message_mobile')}}</label>
                                <div class="col-sm-10">
                                    <input name="mobile" type="text" class="form-control" id="inputEmail3" placeholder="{{__('client.message_mobile_placeholder')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-2">
                                    <button type="submit" class="btn btn-primary">{{__('client.message_submit')}}</button>
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

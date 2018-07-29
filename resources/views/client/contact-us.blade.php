@extends('client.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 700px;font-family: sans-serif;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{__('client.contact_us')}}</h5>
                        <p class="lead">{{__('client.mobile')}}: 13590102784 16620616156 15626502455 15927423860</p>
                        <p class="lead">{{__('client.email')}}：<a href="mailto:youxingift@outlook.com">youxingift@outlook.com</a> | <a href="mailto:youxingiftjohn@outlook.com">youxingiftjohn@outlook.com</a></p>
                        <p class="lead">{{__('client.contact_user_key')}}: {{__('client.contact_user_value')}}</p>
                        <p class="lead">{{__('client.address_key')}}: {{__('client.address_value')}}</p>
                        <p class="lead">{{__('client.wechat')}}: <img src="{{asset('qrcode.jpg')}}" class="img-fluid" alt="" width="200"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('client.app')

@section('content')
    <div id="about-us" class="index-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="display-4 text-center">{{__('client.about_us')}}</h2>
                    <img src="{{asset('company_img.jpg')}}" alt="" class="float-right" style="margin-left: 20px; max-width: 400px;">
                    <p class="lead">{{__('client.company_description')}}</p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="product-list" class="index-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-4 text-center">{{__('client.products')}}</h2>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 img-card">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('storage/'.$product->img_url)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('client.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 img-card">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/'.$product->img_url) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
@endsection

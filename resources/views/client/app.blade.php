<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('tmp.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse youxin-navbar" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'index')active @endif" href="{{route('index')}}">{{__('client.homepage')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/#about-us')}}">{{__('client.about_us')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'products')active @endif" href="{{route('products')}}">{{__('client.products')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'messages')active @endif" href="{{route('messages')}}">{{__('client.messages')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'contact-us')active @endif" href="{{route('contact-us')}}">{{__('client.contact_us')}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/setLocale')}}">中文/ENGLISH</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if(Route::currentRouteName() == 'index')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('lunbo11.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('lunbo22.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('lunbo33.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @endif

    @if(Route::currentRouteName() == 'messages')
        <div id="banner">
            <img src="{{asset('message_banner.jpg')}}" alt="" class="img-fluid">
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="footer-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>{{__('client.company_name')}}    {{__('client.copy_rights')}}   粤ICP备18089420号</p>
                    <p>{{__('client.powered')}}</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>{{__('client.mobile')}}：13590102784 16620616156 15626502455 15927423860</p>
                    <p>{{__('client.email')}}：<a href="mailto:youxingift@outlook.com">youxingift@outlook.com</a> | <a href="mailto:youxingiftjohn@outlook.com">youxingiftjohn@outlook.com</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('tmp.js') }}"></script>
</body>
</html>

@extends('client.app')

@section('content')
    <div id="about-us" class="index-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="display-4 text-center">关于我们</h2>
                    <img src="http://www.huirongtoys.com/imageRepository/ca3afc83-fbcf-4975-aa41-4c65ad0c5626.jpg" alt="" class="float-right" style="margin-left: 20px;">
                    <p class="lead">深圳市攸信礼品有限公司于2006年成立，专注于五金、塑胶等行业近十年，服务于国内外各大企业、贸易公司等，为其加工制作各种工艺品、促销品、礼赠品、饰品。主要产品有纪念币、锁匙圈、徽章.奖章、标牌、狗牌、饰品、戒指、项链、耳环、手镯、冰箱贴、吊饰、手机支架，发卡，相框，化妆镜，药丸盒，便携式烟灰盒，案件摆台，开瓶器，名片夹，名牌，工牌，香水瓶盖，冰箱贴等五金礼品,以及餐具、冰格、公仔、手机保护套、电脑保护套、挂绳、吸盘、冰箱贴、相框、U盘套、行李牌、杯垫、马克杯、手腕带等各种造型的塑胶制品。EVA类如锁匙圈，鼠标垫，杯垫，餐桌垫等，马口铁类如徽章，盒子，镜子等，纺织品类如织带锁匙圈，织带挂带等，皮革类锁匙圈，手镯，项链等，亚克力类如锁匙圈，案件摆台，冰箱贴，工牌等。</p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="product-list" class="index-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-4 text-center">产品展示</h2>
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

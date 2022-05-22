@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Контакты</span>
        </div>
    </div>

    <section id="contacts" class="contacts">
        <div class="container">
            <h1 class="pageh1">Контакты</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <div class="contactblock">
                        <div class="icon"><img src="img/mailicon.png" alt="Почта" class="ficon"></div>
                        <div class="info">
                            @foreach($email_address as $item)
                                <a href="mailto:{{$item->email_address}}">{{$item->email_address}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="contactblock">
                        <div class="icon"><img src="img/telicon.png" alt="Телефоны" class="ficon"></div>
                        <div class="info">
                            @foreach($telephone as $item)
                                <a href="tel:{{$item->telephone}}">{{$item->telephone}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="contactblock">
                        <div class="icon"><img src="img/mapicon.png" alt="Адрес" class="ficon"></div>
                            @foreach($address as $item)
                                <div class="info"><p class="text">{{$item->address}}</p></div>
                            @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6"><div id="map"></div></div>
            </div>
        </div>
    </section>
</main>
@endsection

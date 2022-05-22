@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Услуги</span>
        </div>
    </div>

    <section id="services" class="services">
        <div class="container">
            <h1 class="pageh1">Услуги</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                @foreach($services as $item)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service">
                            <img src="{{ asset('storage/'.$item['image']) }}" alt="Наименование">
                            <a href="{{ route('service', $item['id']) }}" class="title">{{ $item['heading'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

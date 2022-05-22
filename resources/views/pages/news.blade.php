@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Новости</span>
        </div>
    </div>

    <section id="news" class="news">
        <div class="container">
            <h1 class="pageh1">Новости</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                @foreach($news as $item)
                    @if($loop->first)
                        <div class="col-xs-12 col-sm-8">
                            <div class="card cardbig">
                                <img src="{{ asset('storage/'.$item['image']) }}" alt="Заголовок">
                                <p class="title">{{ $item['heading'] }}</p>
                                <p class="text">{{ $item['text'] }}</p>
                                <a href="{{ route('news.single', $item['id']) }}">Подробнее</a>
                            </div>
                        </div>
                    @endif
                    @if($loop->iteration === 2)
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <img src="{{ asset('storage/'.$item['image']) }}" alt="Заголовок">
                                <p class="title">{{ $item['heading'] }}</p>
                                <p class="text">{{ $item['text'] }}</p>
                                <a href="{{ route('news.single', $item['id']) }}">Подробнее</a>
                            </div>
                    @endif
                    @if($loop->iteration === 3)
                            <div class="card">
                                <img src="{{ asset('storage/'.$item['image']) }}" alt="Заголовок">
                                <p class="title">{{ $item['heading'] }}</p>
                                <p class="text">{{ $item['text'] }}</p>
                                <a href="{{ route('news.single', $item['id']) }}">Подробнее</a>
                            </div>
                        </div>
                    @endif
                    @if($loop->iteration > 3)
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <img src="{{ asset('storage/'.$item['image']) }}" alt="Заголовок">
                                <p class="title">{{ $item['heading'] }}</p>
                                <p class="text">{{ $item['text'] }}</p>
                                <a href="{{ route('news.single', $item['id']) }}">Подробнее</a>
                            </div>
                        </div>
                    @endif
                @endforeach
{{--                <div class="col-xs-12 col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="img/news.png" alt="Заголовок">--}}
{{--                        <p class="title">Заголовок</p>--}}
{{--                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>--}}
{{--                        <a href="single.html">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="img/news.png" alt="Заголовок">--}}
{{--                        <p class="title">Заголовок</p>--}}
{{--                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>--}}
{{--                        <a href="single.html">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="img/news.png" alt="Заголовок">--}}
{{--                        <p class="title">Заголовок</p>--}}
{{--                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>--}}
{{--                        <a href="single.html">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
</main>
@endsection

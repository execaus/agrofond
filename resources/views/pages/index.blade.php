@extends('layout.base')

@section('content')
<main>
    <section id="first" class="first">
        <div class="container">
            <div class="fslider">
                @foreach($home_slider_items as $item)
                    <div class="slide">
                        <h1 class="title">{{$item->heading}}</h1>
                        <p class="text">{{$item->text}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="lastnews" class="lastnews">
        <div class="container">
            <h2><span>Последние</span> Новости</h2>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="newslider">
                @foreach($news as $item)
                    <div class="card">
                        <img src="{{ asset('storage/'.$item['image']) }}" alt="Заголовок">
                        <p class="title">{{ $item['heading'] }}</p>
                        <p class="text">{{ \Illuminate\Support\Str::limit($item['text']) }}</p>
                        <a href="{{ route('news.single', $item['id']) }}">Подробнее</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

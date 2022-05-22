@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">База знаний</span>
        </div>
    </div>

    <section id="knowledge" class="knowledge">
        <div class="container">
            <h1 class="pageh1">База знаний</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                @foreach($knowledge as $item)
                    <div class="col-xs-12 col-sm-6 knowledgeitem">
                        <div class="icon"><a href="{{ asset('storage/'.$item['file']) }}"><img src="img/pdficon.png" alt="PDF"></a></div>
                        <div class="info">
                            <a class="title" href="{{ asset('storage/'.$item['file']) }}" download="{{ $item['name'] }}">{{ $item['name'] }}</a>
                            <p class="text">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Готовые решения</span>
        </div>
    </div>

    <section id="solutions" class="solutions">
        <div class="container">
            <h1 class="pageh1">Готовые решения</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="solutionsfilter">
                <button data-filter="1">Животноводство</button>
                <button data-filter="2">Растениеводство</button>
                <button data-filter="3">Птицеводство</button>
                <button data-filter="4">Рыбоводство</button>
            </div>
            <div class="row solutionsrow">
                @foreach($solutions as $item)
                    <div class="col-xs-12 col-sm-4 col-md-3" data-filter="{{ $item['category_id'] }}">
                        <a href="{{ asset('storage/'.$item['file']) }}" download="{{ $item['name'] }}" class="solution">
                            <img src="img/pdficon.png" alt="PDF">
                            <p class="title">{{ $item['title'] }}</p>
                            <p class="name">{{ $item['name'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

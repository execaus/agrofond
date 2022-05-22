@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Меры поддержки</span>
        </div>
    </div>

    <section id="support" class="support">
        <div class="container">
            <h1 class="pageh1">Меры поддержки</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Финансовая поддержка" class="thumb">
                    <p class="title">Финансовая поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                @foreach($supportMeasures as $item)
                    @if($item['support_type'] === 1)
                    <div class="content">
                        <div class="icon"><img src="{{ asset('storage/'.$item['image']) }}" alt="{{ $item['title'] }}"></div>
                        <div class="info">
                            <p class="name">{{ $item['title'] }}</p>
                            <p class="text">{{ \Illuminate\Support\Str::limit($item['text'], 40) }}</p>
                            <a href="{{ route('support', $item['id']) }}">Подробнее</a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Имущественная поддержка" class="thumb">
                    <p class="title">Имущественная поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                @foreach($supportMeasures as $item)
                    @if($item['support_type'] === 2)
                        <div class="content">
                            <div class="icon"><img src="{{ asset('storage/'.$item['image']) }}" alt="{{ $item['title'] }}"></div>
                            <div class="info">
                                <p class="name">{{ $item['title'] }}</p>
                                <p class="text">{{ \Illuminate\Support\Str::limit($item['text'], 40) }}</p>
                                <a href="{{ route('support', $item['id']) }}">Подробнее</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Административная поддержка" class="thumb">
                    <p class="title">Административная поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                @foreach($supportMeasures as $item)
                    @if($item['support_type'] === 3)
                        <div class="content">
                            <div class="icon"><img src="{{ asset('storage/'.$item['image']) }}" alt="{{ $item['title'] }}"></div>
                            <div class="info">
                                <p class="name">{{ $item['title'] }}</p>
                                <p class="text">{{ \Illuminate\Support\Str::limit($item['text'], 40) }}</p>
                                <a href="{{ route('support', $item['id']) }}">Подробнее</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

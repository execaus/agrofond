@extends('layout.base')

@section('content')
    <main>
        <div class="crumbs">
            <div class="container">

            </div>
        </div>

        <section id="supportitem" class="supportitem">
            <div class="container">
                <h1 class="pageh1">Меры поддержки</h1>
                <div class="leaf"><img src="{{ asset('img/leaf.png') }}" alt="---"></div>
                <div class="row">
                    <div class="col-xs-12 col-md-5 col-lg-6"><img src="{{ asset('storage/'.$content['image']) }}" alt="{{ $content['title'] }}" class="thumb"></div>
                    <div class="col-xs-12 col-md-7 col-lg-6">
                        <h3>{{ $content['title'] }}</h3>
                        <p class="maintext">{{ $content['text'] }}</p>
                    </div>
                    <div class="col-xs-12"><p class="maintext">Специалисты отраслевой IT-Компании «СТЭК ЛАБС» не только справились с основной задачей: разработали и внедрили цифровое решение, построили соответствующую IT инфраструктуру, но и предложили цифровые решения для других бизнес-процессов: отгрузка товара и формирование отчета для бухгалтерии, проведение анализа продукции для лаборатории.</p></div>
                </div>
                <h4>Документы:</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 knowledgeitem">
                        <div class="icon"><a href="{{ asset('storage/'.$content['file']) }}"><img src="{{ asset('img/pdficon.png') }}" alt="PDF"></a></div>
                        <div class="info">
                            <a class="title" href="{{ asset('storage/'.$content['file']) }}" download="{{ $content['title'] }}">{{ $content['title'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

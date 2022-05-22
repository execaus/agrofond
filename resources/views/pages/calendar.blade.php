@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="index.html" class="homelink">Главная</a> / <span class="current">Календарь событий</span>
        </div>
    </div>

    <section id="calendar" class="calendar">
        <div class="container">
            <h1 class="pageh1">Календарь событий</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="card cardbig">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin amet sit mi suspendisse. Condimentum tristique sed nunc consectetur phasellus donec dictum. Volutpat duis sit lacus velit, sollicitudin viverra turpis sagittis, faucibus. Diam tristique fames dignissim ac consectetur elementum imperdiet sagittis tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin amet sit mi suspendisse. Condimentum tristique sed nunc consectetur phasellus donec dictum. Volutpat duis sit lacus velit, sollicitudin viverra turpis sagittis, faucibus. Diam tristique fames dignissim ac consectetur elementum imperdiet sagittis tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin amet sit mi suspendisse. Condimentum tristique sed nunc consectetur phasellus donec dictum. Volutpat duis sit lacus velit, sollicitudin viverra turpis sagittis, faucibus. Diam tristique fames dignissim ac consectetur elementum imperdiet sagittis tellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                    <div class="card">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <img src="img/news.png" alt="Заголовок">
                        <p class="date">01.01.2021</p>
                        <p class="title">Заголовок</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                        <a href="single.html">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

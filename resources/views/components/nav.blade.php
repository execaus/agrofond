<nav class="@if (Route::is('home')) home @endif">
    <div class="container">
        <div class="mobile hidden-sm hidden-md hidden-lg">
            <div class="tels">
                @foreach($telephone as $item)
                    <a href="tel:{{$item->telephone}}">{{$item->telephone}}</a>
                @endforeach
            </div>
            <div class="smapbtn"><button>Карта сайта</button></div>
        </div>
        <ul class="container-ul">
            <li><a href="/">Главная</a></li>
            <li><a href="/news">Новости</a></li>
            <li><a href="/services">Услуги</a></li>
            <li><a href="/support">Меры поддержки</a></li>
            <li><a href="/knowledge">База знаний</a></li>
            <li><a href="/solutions">Готовые решения</a></li>
{{--            <li><a href="/calendar">Календарь событий</a></li>--}}
            <li><a href="/contacts">Контакты</a></li>
        </ul>
{{--        <div class="search">--}}
{{--            <form>--}}
{{--                <label>--}}
{{--                    <img src="img/searchicon.png" alt=">>">--}}
{{--                    <input type="text" placeholder="Введите слово для поиска">--}}
{{--                </label>--}}
{{--                <button type="submit">Найти <img src="img/entericon.png" alt="<<"></button>--}}
{{--            </form>--}}
{{--            <div class="tgl hidden-xs"><img src="img/searchicon.png" alt="Поиск"></div>--}}
{{--        </div>--}}
    </div>
</nav>

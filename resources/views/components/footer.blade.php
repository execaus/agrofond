<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <p class="sitetitle">Фонд «Развития агропромышленного <br> комплекса Курганской области»</p>
                <button class="footbtn request">Онлайн заявка</button>
                <button class="footbtn callback">Обратный звонок</button>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="icon"><img src="{{ asset('img/mapicon.png') }}" alt="Адрес" class="ficon"></div>
                @foreach($address as $item)
                    <div class="info"><p class="text">{{$item->address}}</p></div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="icon"><img src="{{ asset('img/telicon.png') }}" alt="Телефоны" class="ficon"></div>
                <div class="info">
                    @foreach($telephone as $item)
                        <a href="tel:{{$item->telephone}}">{{$item->telephone}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="icon"><img src="{{ asset('img/mailicon.png') }}" alt="Почта" class="ficon"></div>
                <div class="info">
                    @foreach($email_address as $item)
                        <a href="mailto:{{$item->email_address}}">{{$item->email_address}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>

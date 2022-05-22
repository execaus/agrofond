<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-9 col-sm-5 col-lg-6">
                <div class="sitetitle"><img src="{{ asset('img/logo.png') }}" alt="лого"> <span>Фонд «Развития агропромышленного комплекса Курганской области»</span></div>
            </div>
            <div class="col-xs-3 col-sm-7 col-lg-6 tar">
                <div class="hidden-xs tels">
                    @foreach($telephone as $item)
                        <a href="tel:{{$item->telephone}}">{{$item->telephone}}</a>
                    @endforeach
                </div>
                <div class="hidden-sm hidden-md hidden-lg menutgl">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

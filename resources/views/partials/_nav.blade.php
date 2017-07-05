<div class="row logobackground">
    <h1>
        <a href="{{ route('pages.home') }}" class="logo"> </a>
    </h1>
</div>

<div id="topheader">    
    <nav class="navbar navbar-default">
        <div class="container normal-bar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>                
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('restaurant') ? "active" : "" }}"> <a href="{{route('pages.restaurant')}}">Restaurant</a></li>
                    <li class="{{ Request::is('school') ? "active":"" }}"> <a href="{{route('pages.school')}}">Cooking School</a></li>
                    <li class="{{ Request::is('shop') ? "active":"" }}"> <a href="{{route('pages.shop')}}">Shop</a></li>
                    <li class="{{ Request::is('vouchers') ? "active":"" }}"> <a href="{{route('pages.vouchers')}}">Vouchers</a></li>
                    <li class="{{ Request::is('foodtours') ? "active":"" }}"> <a href="{{route('pages.foodtours')}}">Food Tours</a></li>
                    <li class="{{ Request::is('mapsandinfo') ? "active":"" }}"> <a href="{{route('pages.mapsandinfo')}}">Maps & Info</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <div class="container affix-bar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('pages.home') }}"><div class="navbar-imgcontainer"><img src="{{ asset('images/logo-text.png') }}"></div></a>
            </div>
            <div id="navbar1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('restaurant') ? "active" : "" }}"> <a href="{{route('pages.restaurant')}}">Restaurant</a></li>
                    <li class="{{ Request::is('school') ? "active":"" }}"> <a href="{{route('pages.school')}}">Cooking School</a></li>
                    <li class="{{ Request::is('shop') ? "active":"" }}"> <a href="{{route('pages.shop')}}">Shop</a></li>
                    <li class="{{ Request::is('vouchers') ? "active":"" }}"> <a href="{{route('pages.vouchers')}}">Vouchers</a></li>
                    <li class="{{ Request::is('foodtours') ? "active":"" }}"> <a href="{{route('pages.foodtours')}}">Food Tours</a></li>
                    <li class="{{ Request::is('mapsandinfo') ? "active":"" }}"> <a href="{{route('pages.mapsandinfo')}}">Maps & Info</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>        
    </nav>
</div>

<div id="toptitle">
    <div class="bigtitle container">
        <h1>@yield ('pagetitle')</h1>
        <p>@yield ('pagedescription')</p>        
    </div>
</div>
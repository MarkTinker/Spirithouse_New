@extends('layouts.main')

@section('title', ': Restaurant & Cooking School - Cooking School')

@section('pagetitle', 'Cooking School')

@section('pagedescription', 'Learn tips, tricks from our great chefs.')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('../images/spirit-school.jpg') }} " alt="spirit house cooking school"/>
        </div>
        <div class="col-md-6">
            <p class="info">Whether you're a competent cook or simply want a basic understanding of Asian ingredients and cooking methods, a hands-on Spirit House cooking class is a great way to meet new people, learn new skills and have an enjoyable day out which includes lunch/dinner and wine.</p>
            <div class="row">
                <div class="col-md-6">
                    <img class="shadow"  src="{{ url('../images/newsletter-jul-dec13.jpg') }}" alt="newsletter-jan-jun-14" />
                </div>

                <div class="col-md-6">
                    <p class="info"> <strong class="teal">Sign Up for great deals, cool news and more: </strong></p>
                    <div class="createsend-button" style="height:27px;display:inline-block;" data-listid="y/BE/873/17D/E397E736E2F01549">
                    </div>
                    <script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="section">
        <div class="row">
            <ul>
                <li class="active"><a href="" > BOOK A CLASS </a></li>
            </ul>
        </div>
        <p class="info">Find a class that you like and click the <em>book now</em> button &mdash; it's that easy. </p>
    </div>

@endsection
@extends('layouts.main')

@section('title', ': Restaurant & Cooking School - Home')

@section ('pagetitle', 'Prepare to be amazed')

@section ('pagedescription', "Spirit House — one of Australia's Best Food Experiences — come find out why")

@section('content')
    <!-- Main component for a primary marketing message or call to action -->
    
    <div class="col-md-6 videoshow">
        <h3>
            <span>RESTAURANT</span>                
        </h3>

        <div class="videowrapper">
            <iframe src="http://player.vimeo.com/video/42187291?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

        <a class="visitpage" href="{{route('pages.restaurant')}}">Visit the restaurant page</a>

        <p>Set in lush tropical gardens nestled around a tranquil pond, bubbling waterfalls, tinkling wind chimes, the sounds of nature &mdash; the Spirit House is a delight for 
        all senses. <em>Award winning</em> contemporary Asian food, friendly staff and enthusiastic chefs have made the Spirit House a destination for lovers of all things Asian.
        </p>
        
        <p class="info"><a href="{{route('pages.restaurant')}}">Visit the restaurant page</a> for information on weddings, menus and wine lists or 
        <a href="{{route('pages.restaurant')}}#restaurant_bookings">book a table online</a> now.</p>	

    </div>


    <div class="col-md-6 videoshow">
        <h3>
            <span>COOKING SCHOOL</span>
        </h3>

        <div class="videowrapper">
            <iframe src="https://player.vimeo.com/video/128646491" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        
        <a class="visitpage" href="{{route('pages.school')}}">Click to View &amp; Book Classes</a>
        
        <p >Learn the chef's secrets as you slice, dice and cook up a storm along with new-found friends. With daily classes as well as Friday and Saturday nights, we offer a 
        huge range of recipes for you to choose from.</p>

        <p class="info">Master chef's techniques to make perfect stir-fries, balanced curries and dinner party dishes that will wow your friends.<a href="school2.php">Visit the cooking school page</a> to view classes and make bookings.</p>
    </div>    
@endsection

@section('content2')

<div class="sectionhead">
    <div class="bigtitle container">
        <h1>Gift Vouchers, Food Tours &hellip; </h1>
        <p>Scroll down for	<em>great food adventures</em></p>        
    </div>
</div>

<div class="container">
    <div class="col-md-6 videoshow">
        <h3>
            <span>GIFT VOUCHERS</span>                
        </h3>

        <div class="videowrapper">
            <iframe src="http://player.vimeo.com/video/42524896?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

        <a class="visitpage" href="{{route('pages.vouchers')}}">Click to buy vouchers NOW</a>

        <p class="info">You're just a click away from making someone very happy. Spirit House Gift Vouchers are the perfect gift for any food lover. They can be purchased for any amount.</p>
        
        <p class="info">Here's the best part &mdash; you can <a href="{{route('pages.vouchers')}}">order your vouchers online</a> and have them emailed to you instantly. Or, 
            <span class="teal">if you believe good things come 	to those who wait</span>, the voucher will be mailed to you. Either way, a voucher is bound to make the food lover in your life very happy.
        </p>

    </div>

    <div class="col-md-6 videoshow">
        <h3>
            <span>FOOD TOURS</span>
        </h3>

        <div class="videowrapper">
            <iframe src="http://player.vimeo.com/video/42960055?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <a class="visitpage" href="{{route('pages.foodtours')}}">Itineraries and bookings</a>
        
        <p class="info">As shown in the video above, tag-along with Spirit House chefs for four days to Thailand as we take you off the beaten path and uncover a world of amazing sights, sounds and tastes.</p>
        <p class="info">We will take you back 700 years exploring ruins of an ancient city, learning from market chefs, exploring river life, as well as visiting stunning temples and palaces.</p>        
        <p class="info">Limited to just 8 people, <a href="route('pages.foodtours')">visit our tours page</a> for itineraries, dates and booking forms. </p>
    </div> 
</div>
@endsection

@extends ('layouts.main')

@section ('title', '&mdash; Maps, accommodation, Transport.')

@section ('pagetitle', 'Maps, Places to Stay')

@section ('pagedescription', 'Best accommodation close to Spirit House and how to get here')

@section ('content')

    <div class="section">
        <div class="row">
            <ul>
                <li class="active"><a href="" > Contact </a></li>
                <li><a href="" > Maps </a></li>
                <li><a href="" > Transport </a></li>
                <li><a href="" > Accommodation</a></li>                
            </ul>
        </div>

        <p class="info">We love to chat, so if you want to talk to us about anything at all, here are our handy contact details.</p>

        <br/>
        <br/>

        <div class="row">
            <div class="col-md-4">
                <h2>The Restaurant</h2>
                <p class="info" >The restaurant is open every day from 12pm. for lunch and Wednesday to Saturday nights for dinner from 6pm.</p>
                <p class="info">Reservations can be made by 
                <a href="http://spirithouse.com.au/restaurant.php#restaurant_bookings">booking online</a> or calling the restaurant on:<br> 
                <span class="teal"> 07 5446 8994 <small>ext 2</small></span><p>
            </div>
            <div class="col-md-4">
                <h2>Cooking School</h2>
                <p class="info">We hold cooking classes nearly every day and most Friday &amp; Saturday nights. You can book classes online but if you want to talk to someone directly, please call us on:<br>
                <span class="teal"> 07 5446 8977 <small>ext 1</small></span></p>
            </div>
            <div class="col-md-4">
                <h2>General Information</h2>
                <p class="info">The Spirit House is located at <em> 20 Ninderry Rd, Yandina, Qld 4561</em>. You can find directions and maps below.</p>
                <p class="info">Feel free to <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#111;&#102;&#102;&#105;&#99;&#101;&#64;&#115;&#112;&#105;&#114;&#105;&#116;&#104;&#111;&#117;&#115;&#101;&#46;&#99;&#111;&#109;&#46;&#97;&#117;'>&#101;&#109;&#97;&#105;&#108;&#32;&#117;&#115;</a> or write to the address above.
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Contact </a></li>
                <li class="active"><a href="" > Maps </a></li>
                <li><a href="" > Transport </a></li>
                <li><a href="" > Accommodation</a></li>                
            </ul>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2>Simple Directions</h2>
                <p class="info">To help you find Spirit House, follow these simple directions:<p>
                <small><b>For GPS units, our address is 20 Ninderry Rd, BRIDGES.</b> We are in Yandina, but GPS units tend to call this area 'Bridges'.</br><br>
                From the Bruce Highway, take the exit sign to YANDINA, follow directions to the Ginger Factory, as we are just behind it. At the roundabout, take the Coulson Road Exit... 
                follow this road, which runs behind the Ginger Factory and past the Yandina Primary School. After about 500 metres, the road ends at a T Junction with Ninderry Road. 
                Turn right into Ninderry Road, the Spirit House is about 50 metres along on the right.</small>                
            </div>
            <div class="col-md-4">
                <h2>Google Map Directions</h2>
                <p class="info">Enter your postcode or address below and we'll <span class="teal"> show you a map of how to get here from your location</span> as well as <em>street by street instructions</em> to the Spirit House</p>

                <!-- Google Maps directions opening in new window -->
            </div>
            <div class="col-md-4">
                <h2>Find us on the map</h2>
                <p class="info">Loading this <a href="http://maps.google.com.au/maps?f=q&amp;hl=en&amp;geocode=&amp;q=SpiritHouse&amp;sll=-26.552639,152.966981&amp;sspn=0.027678,0.05476&amp;ie=UTF8&amp;cid=-26550700,152958891,7601547834026805340&amp;ll=-26.548532,152.958956&amp;spn=0.026873,0.036478&amp;z=14&amp;iwloc=A&amp;source=embed" target="_blank" >larger version</a> of the map below will also show our location and <em>your location</em> &mdash; if you happen to be using a modern smart phone &mdash; now we're even easier to find. </p>
        		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.au/maps?f=q&amp;hl=en&amp;geocode=&amp;q=Spirit+House&amp;sll=-26.552639,152.966981&amp;sspn=0.027678,0.05476&amp;ie=UTF8&amp;cid=-26550700,152958891,7601547834026805340&amp;s=AARTsJorjAgndrDHLQxDqhHIUAMVB3RDUg&amp;ll=-26.548532,152.958956&amp;spn=0.026873,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Contact </a></li>
                <li><a href="" > Maps </a></li>
                <li class="active"><a href="" > Transport </a></li>
                <li><a href="" > Accommodation</a></li>                
            </ul>
        </div>

        <P class="info"> The easiest way to visit the Spirit House is by car. There is public transport to Yandina, but the services
					don't really match our operating hours. If you don't have a car, or need transport for a group, the operators below can help you. </p>

        <div class="row">
            <div class="col-md-1">
                <img src="{{ url('images/icon-van.gif') }} ">
            </div>
            <div class="col-md-3">
                <h2>Private Transfers</h2>
                <p class="gray">We recommend <a href="http://www.thedriversunshinecoast.com.au/" target="_blank">'The Driver'</a>: 
                From two people to twenty, they have a range of vehicles to suit. 
                The most convenient, reliable and affordable option.
                <br><span class="teal">Ph: 0448 815 330</span></p>
            </div>
            <div class="col-md-1">
                <img src="{{ url('images/icon-taxi.gif') }} ">
            </div>
            <div class="col-md-3">
                <h2>Taxis</h2>
                <p class="gray">Taxis are happy to bring you here but you must book a taxi to take you back or you can be in 
                    for a very long wait. 									<br><span class="teal">Ph: 131 008</span></p>
            </div>
            <div class="col-md-1">
                <img src="{{ url('images/icon-rent.gif') }} ">
            </div>
            <div class="col-md-3">
                <h2>Rental Car &amp; Uber</h2>
                <p class="gray"><a href="http://lmgtfy.com/?q=Rental+cars+sunshine+coast+queensland" target="_blank">Renting a car</a> for the day is a cheaper option than using taxis etc. 
                Or if you want someone to do the driving then try <a href="https://get.uber.com/"> UBER</a>, they have now launched on the Sunshine Coast.</p>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Contact </a></li>
                <li><a href="" > Maps </a></li>
                <li><a href="" > Transport </a></li>
                <li class="active"><a href="" > Accommodation</a></li>                
            </ul>            
        </div>

        <p class="info">Here is a sample of the broad range of Sunshine Coast accommodation on offer which is relatively close to Spirit House. From family run B&B's, to farm houses, luxury beach units or large private homes, this area has it all!</p>

        <div class="row accom">

            <div class="col-md-6">

                <a href="http://www.yandinastation.com" target='blank'> <img src=" {{ url('../images/station.jpg') }}" border="0" /> </a>

                <h2>Yandina Station- Yandina</h2>
                <p>A B&B with a real difference - three luxury cabins on an historic cattle farm - just 10 minutes from Spirit House and
                    the coast beaches. &nbsp;&nbsp; <a href="http://www.yandinastation.com.au" target='blank'>Visit >>></a></p>

                <div class="uberclear"></div>
                <hr class="divider" />


                <a href="http://www.thepoint-coolum.com.au" target='blank'><img src=" {{ url('../images/thepoint.jpg') }}" border="0" /> </a>

                <h2>The Point - Coolum</h2>
                <p>Consists of 60 Villas overlooking national parkland and Coolum's golden surf beaches. Walk across the road and you're
                    on the beach! &nbsp;&nbsp; <a href="http://www.thepoint-coolum.com.au/" target='blank'>Visit >>></a></p>
                <div class="uberclear"></div>

                <hr class="divider" />

                <a href="https://www.airbnb.com.au/s/Sunshine-Coast--Queensland?zoom=11&search_by_map=true&sw_lat=-26.671712751022824&sw_lng=152.8291790251037&ne_lat=-26.317248582406627&ne_lng=153.1972210172912&ss_id=76c6ali0&s_tag=Gc8cXLMV"
                    target='blank'> <img src=" {{ url('../images/airbnb.jpg') }} " border="0" /></a>

                <h2>airbnb - Sunshine Coast</h2>

                <p>For a huge range of amazing places ranging from a simple room to an entire beach house, airbnb is definitely worth a
                    look. &nbsp;&nbsp; <a href="https://www.airbnb.com.au/s/Sunshine-Coast--Queensland?zoom=11&search_by_map=true&sw_lat=-26.671712751022824&sw_lng=152.8291790251037&ne_lat=-26.317248582406627&ne_lng=153.1972210172912&ss_id=76c6ali0&s_tag=Gc8cXLMV"
                        target='blank'>Visit >>></a></p>

                <div class="uberclear"></div>
                <hr class="divider" />
            </div>

            <div class="col-md-6">
                <a href="http://www.gridley.com.au" target='blank'><img src=" {{ url('../images/gridley.jpg') }} " border="0" /> </a>
       
        		<h2>Gridley Homestead - Eumundi</h2>
        		<p>An historic homestead just 500m from the famous Eumundi Markets and 10 minutes drive to the Spirit House. Very reasonable rates and charming owners. 
        		&nbsp;&nbsp; <a href="http://www.gridley.com.au" target='blank'>Visit >>></a></p>

				<div class="uberclear"></div>
				<hr class="divider" />

        		<a href="http://www.tamansari.com.au" target='blank'><img src=" {{ url('../images/tsari.jpg') }}" border="0" /></a>
       
        		<h2>Taman Sari Pavillions - Mapleton</h2>
        		<p>Two luxury Balinese inspired pavillions on the picturesque Blackall Range at Mapleton - just 20 minutes drive from Spirit House. 
        		&nbsp;&nbsp; <a href="http://www.tamansari.com.au" target='blank'>Visit >>></a></p>

				<div class="uberclear"></div>
				<hr class="divider" />

      			<a href="http://www.ninderrymanor.com.au/" target='blank'><img src=" {{ url('../images/ninderry.jpg') }}" border="0" /> </a>
        
        		<h2>Ninderry Manor - Yandina</h2>
        		<p>View forever, only 3 minutes away up on the ridge. Packages with or without breakfast: <a onclick="ga('send', 'event', 'Maps and Info', 'Click', 'Ninderry Manor');"  href="https://www.bookings247.com.au/bookings/book_property.php?property_id=1331" target='blank'>  Visit >>></a></p>

    			<div class="uberclear"></div>

				<hr class="divider" /> 
            </div>            
        </div>

    </div> 
    <!-- end .section-->
@endsection
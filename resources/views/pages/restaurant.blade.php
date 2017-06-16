@extends('layouts.main')

@section('title', ': Restaurant & Cooking School - The Restaurant')

@section('pagetitle', 'Restaurant')

@section('pagedescription', 'Spirit House has the food to tingle every taste bud. Hungry yet?')

@section('content')

    <div class="section">
        <div class="row">
            <ul>
                <li class="active"><a href="" > Restaurant </a></li>
                <li><a href="" > Book Online </a></li>
                <li><a href="" > Menu </a></li>
                <li><a href="" > Functions </a></li>
                <li><a href="" > Awards </a></li>
            </ul>            
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="info">Romantic dinners, partying with friends in a private courtyard, or celebrating weddings and special occasions - Spirit House is a perfect recipe for a dining experience to remember. Set in lush tropical gardens nestled around a tranquil pond, at sunset Spirit House turns into a magic wonderland which will take your breath away.</p>
                <h2 class="info">For restaurant bookings, <a href="#restaurant_bookings">book online</a> or call <span class="teal"> 07 5446 8994 (ext 2)</span> during business hours.</h2>
            </div>
            <div class="col-md-4">
                <h2>LATEST CUSTOMER PICS</h2>
                <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/1b31c94857945a13ba35c7f9d94c78b0.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 90%; border: 0; overflow: hidden;"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 specs">
                <h2>The Facts:</h2>
                <ul>
                    <li><strong>Lunch:</strong>Everyday</li>
                    <li><strong>Dinner:</strong>Wed. - Sat.</li>
                    <li class='wide'><strong>Bookings:</strong> What can we say, we're busy so you will definitely need to <a href="#restaurant_bookings">book a table online</a> or call the reservation office on <span class="teal">(07) 5446 8994</span>.</li>
                    <li class='wide'><strong>Can I BYO?:</strong>Sadly no, we are fully licensed with an <span class='teal'>eclectic range</span> of wines from boutique wineries from around the world</li>
                    <li class='wide'><strong>Vegetarians and Allergies</strong> We do cater for vegetarian and gluten free diners, please see the menu below.<br>If you have any other dietary requirements, please advise when making your booking.</li>
                    <li class='wide'><strong>Functions &amp; Groups</strong>Our unique courtyard settings make it easy to offer groups from 6 to 60 their own private area to celebrate in style. For more ideas on menus and table plans scroll down to the
				    <a href="#restaurant_functions">Functions section</a></li>
                </ul>
            </div>
            <div class="col-md-8 specs">
                <h2>The Setting:</h2>
                <img src="{{ url('../images/new-rest.jpg') }}" alt="restaurant view">
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Restaurant </a></li>
                <li class="active" ><a href="" > Book Online </a></li>
                <li><a href="" > Menu </a></li>
                <li><a href="" > Functions </a></li>
                <li><a href="" > Awards </a></li>
            </ul>            
        </div>
        <div class="row">
            <div class="col-md-6 specs">
                <br/>
                <h2>BEFORE YOU BOOK ONLINE:</h2>
                <p class='info'>You will need to make a <span class="teal"><em>phone booking on <br>(07) 5446 8994</em></span> if you have:</p>
		
                <ul>
                    <li class='wide'><strong>Table or Dietary Requests</strong> If you have <span class="red">table requests</span> or any other requests please call us on (07) 5446 8994.</li>
                    <li class='wide'><strong>A Large Party:</strong> If your party is 10 people or more you will need to call us to book.</li>
                    <li class='wide'><strong>Children under 10:</strong> Children are welcome, however we don't have a children's menu, nor do we have high 
                    chairs so it is best to call us to make sure what we offer suits your needs.</li>
                    <li class='wide'><strong>Want an Early Sitting:</strong> Our 12noon and 6pm tables have to be booked by phone. So if you don't see any availability for your chosen slot, we may have an earlier time but you will need to call.</li>
                </ul>
                <br clear='all'>
                <h2>I Get It! Now - 
                <a href='#nogo' onclick="javascript:tandc_window();" rel="1" class="terms" >Let Me Book</a></h2>
            </div>
            <div class="col-md-6 specs">
                <br />
                <h2>You're Good To Go - Book Now!</h2>
                <small>If you're using an iPad you might want to zoom in on the calendar below so you can click the small arrows to move through the months etc.</small>
                <iframe id="seatme-widget" frameborder="0" width="240" height="515" src="//www.seatme.yelp.com/r/widget/?restaurant-id=17289950-ff0c-11e2-b37c-123140004e71&mobile-prompt=false&orientation=vertical&color=3c78d2"></iframe><style type="text/css">#seatme-link a:link {text-decoration: none; color:#b3b3b3} #seatme-link a:hover {text-decoration: none; color:#066382} #seatme-link a:visited {text-decoration: none; color:#066382}</style><div id="seatme-link"><a style="font: normal 9px Helvetica Neue, Helvetica, sans-serif; margin-left:15px;" href="https://www.seatme.yelp.com/">RESTAURANT RESERVATION SYSTEM BY YELP</a></div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Restaurant </a></li>
                <li><a href="" > Book Online </a></li>
                <li class="active" ><a href="" > Menu </a></li>
                <li><a href="" > Functions </a></li>
                <li><a href="" > Awards </a></li>
            </ul>            
        </div>
        <div class="row">
            <p class="info">Quite simply, <span class="teal"><em>contemporary Thai cuisine</em></span> at its best. The menu is designed around the concept of  'sharing the experience'. So order as a group and embark on a shared Spirit House food journey.</p>
            <div class="col-md-4 specs">
                <h2>Download Menu &amp; Wine List</h2>            
                The Spirit House full menu and wine list are also available as pdf files for you to download.<br>
                Download: <a onclick="ga('send', 'event', 'Restaurant Menu', 'Download', 'Menu PDF');" href='http://www.spirithouse.com.au/download.php?filetype=1&filename=spirithousefood' class='pdf' >Menu</a>
                <br>Download:<a onclick="ga('send', 'event', 'Restaurant Menu', 'Download', 'Wine PDF');" href='http://www.spirithouse.com.au/download.php?filetype=1&filename=spirithousewine' class='pdf' >Wine List</a>.                
                
                <p> &nbsp;</p>
                <h2>A Shared Experience.</h2>
                Our menu concept is centered around a shared dining experience - we encourage each table to order as a group and share the exotic textures and flavours created by our chefs. Food, like life, is a shared journey to enjoy!
            </div>
            <div class="col-md-8 specs">
                <h2>Menu &amp; Wine List</h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > Restaurant </a></li>
                <li><a href="" > Book Online </a></li>
                <li><a href="" > Menu </a></li>
                <li class="active" ><a href="" > Functions </a></li>
                <li><a href="" > Awards </a></li>
            </ul>            
        </div>
        <div class="row">
            <br/>
            <div class="col-md-3 specs">
                <br />
                <img src=" {{ url('../images/bar2-1.jpg') }}" alt="bar2-1" />
            </div>
            <div class="col-md-9 specs">
                <p class="info">Our new private dining room with its own kitchen, private chef and waiter is perfect for those of you who are looking for a truly luxe experience. The dining room seats up to 24 people and is entirely separate to the main restaurant. It overlooks the Bali Courtyard which provides a stunning backdrop and break-out area for you and your guests.                </p>
                <p class="info">The unique courtyard layout of the main restaurant, makes Spirit House the perfect place for small weddings, parties and corporate functions.                                 A party of 4 to 30 people can reserve their own private area for easy weddings. Or we can cater to corporate groups                                 who want to book the entire restaurant for an exclusive-use event, up to 90 people. </p>
                <p class="info">Our banquet menus are designed around a <em>shared dining</em> experience. From intimate celebrations, corporate functions to fully themed weddings, our <a href="http://www.spirithouse.com.au/download.php?filetype=1&amp;filename=weddingplanner">function planner</a>                gives you all the tools to plan a memorable event at the Spirit House.</p>
            </div>
        </div>
    </div>

@endsection
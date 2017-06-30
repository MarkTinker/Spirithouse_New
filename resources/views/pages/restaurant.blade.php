@extends('layouts.main')

@section('title', ': Restaurant & Cooking School - The Restaurant')

@section('pagetitle', 'Restaurant')

@section('pagedescription', 'Spirit House has the food to tingle every taste bud. Hungry yet?')

@section('content')

<div id="section_restaurant" class="section">
    <div class="row">
        <ul>
            <li class="active"><a href="#section_restaurant"> Restaurant </a></li>
            <li><a href="#section_bookonline"> Book Online </a></li>
            <li><a href="#section_menu"> Menu </a></li>
            <li><a href="#section_functions"> Functions </a></li>
            <li><a href="#section_awards"> Awards </a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-8">
            <p class="info">Romantic dinners, partying with friends in a private courtyard, or celebrating weddings and special occasions
                - Spirit House is a perfect recipe for a dining experience to remember. Set in lush tropical gardens nestled
                around a tranquil pond, at sunset Spirit House turns into a magic wonderland which will take your breath
                away.</p>
            <h2 class="info">For restaurant bookings, <a href="#restaurant_bookings">book online</a> or call <span class="teal"> 07 5446 8994 (ext 2)</span>                during business hours.</h2>
        </div>
        <div class="col-md-4">
            <h2>LATEST CUSTOMER PICS</h2>
            <script src="//lightwidget.com/widgets/lightwidget.js"></script>
            <iframe src="//lightwidget.com/widgets/1b31c94857945a13ba35c7f9d94c78b0.html" scrolling="no" allowtransparency="true"
                class="lightwidget-widget" style="width: 90%; border: 0; overflow: hidden;"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 specs">
            <h2>The Facts:</h2>
            <ul>
                <li><strong>Lunch:</strong>Everyday</li>
                <li><strong>Dinner:</strong>Wed. - Sat.</li>
                <li class='wide'><strong>Bookings:</strong> What can we say, we're busy so you will definitely need to <a href="#restaurant_bookings">book a table online</a>                    or call the reservation office on <span class="teal">(07) 5446 8994</span>.</li>
                <li class='wide'><strong>Can I BYO?:</strong>Sadly no, we are fully licensed with an <span class='teal'>eclectic range</span>                    of wines from boutique wineries from around the world</li>
                <li class='wide'><strong>Vegetarians and Allergies</strong> We do cater for vegetarian and gluten free diners, please see
                    the menu below.<br>If you have any other dietary requirements, please advise when making your booking.</li>
                <li class='wide'><strong>Functions &amp; Groups</strong>Our unique courtyard settings make it easy to offer groups from 6
                    to 60 their own private area to celebrate in style. For more ideas on menus and table plans scroll down
                    to the
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
<div id="section_bookonline" class="section">
    <div class="row">
        <ul>
            <li><a href="#section_restaurant"> Restaurant </a></li>
            <li class="active"><a href="#section_bookonline"> Book Online </a></li>
            <li><a href="#section_menu"> Menu </a></li>
            <li><a href="#section_functions"> Functions </a></li>
            <li><a href="#section_awards"> Awards </a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 specs">
            <br/>
            <h2>BEFORE YOU BOOK ONLINE:</h2>
            <p class='info'>You will need to make a <span class="teal"><em>phone booking on <br>(07) 5446 8994</em></span> if you have:</p>

            <ul>
                <li class='wide'><strong>Table or Dietary Requests</strong> If you have <span class="red">table requests</span> or any other
                    requests please call us on (07) 5446 8994.</li>
                <li class='wide'><strong>A Large Party:</strong> If your party is 10 people or more you will need to call us to book.</li>
                <li class='wide'><strong>Children under 10:</strong> Children are welcome, however we don't have a children's menu, nor do
                    we have high chairs so it is best to call us to make sure what we offer suits your needs.</li>
                <li class='wide'><strong>Want an Early Sitting:</strong> Our 12noon and 6pm tables have to be booked by phone. So if you don't
                    see any availability for your chosen slot, we may have an earlier time but you will need to call.</li>
            </ul>
            <br clear='all'>
            <h2>I Get It! Now -
                <a href='#nogo' onclick="javascript:tandc_window();" rel="1" class="terms">Let Me Book</a></h2>
        </div>
        <div class="col-md-6 specs">
            <br />
            <h2>You're Good To Go - Book Now!</h2>
            <small>If you're using an iPad you might want to zoom in on the calendar below so you can click the small arrows to move through the months etc.</small>
            <iframe id="seatme-widget" frameborder="0" width="240" height="515" src="//www.seatme.yelp.com/r/widget/?restaurant-id=17289950-ff0c-11e2-b37c-123140004e71&mobile-prompt=false&orientation=vertical&color=3c78d2"></iframe>
            <style type="text/css">
                #seatme-link a:link {
                    text-decoration: none;
                    color: #b3b3b3
                } 

                #seatme-link a:hover {
                    text-decoration: none;
                    color: #066382
                }

                #seatme-link a:visited {
                    text-decoration: none;
                    color: #066382
                }
            </style>
            <div id="seatme-link"><a style="font: normal 9px Helvetica Neue, Helvetica, sans-serif; margin-left:15px;" href="https://www.seatme.yelp.com/">RESTAURANT RESERVATION SYSTEM BY YELP</a></div>
        </div>
    </div>
</div>

<div id="section_menu" class="section">
    <div class="row">
        <ul>
            <li><a href="#section_restaurant"> Restaurant </a></li>
            <li><a href="#section_bookonline"> Book Online </a></li>
            <li class="active"><a href="#section_menu"> Menu </a></li>
            <li><a href="#section_functions"> Functions </a></li>
            <li><a href="#section_awards"> Awards </a></li>
        </ul>
    </div>
    <div class="row">
        <p class="info">Quite simply, <span class="teal"><em>contemporary Thai cuisine</em></span> at its best. The menu is designed around
            the concept of 'sharing the experience'. So order as a group and embark on a shared Spirit House food journey.</p>
        <div class="col-md-4 specs">
            <h2>Download Menu &amp; Wine List</h2>
            The Spirit House full menu and wine list are also available as pdf files for you to download.<br> Download:
            <a
                onclick="ga('send', 'event', 'Restaurant Menu', 'Download', 'Menu PDF');" href='http://www.spirithouse.com.au/download.php?filetype=1&filename=spirithousefood'
                class='pdf'>Menu</a>
                <br>Download:<a onclick="ga('send', 'event', 'Restaurant Menu', 'Download', 'Wine PDF');" href='http://www.spirithouse.com.au/download.php?filetype=1&filename=spirithousewine'
                    class='pdf'>Wine List</a>.

                <p> &nbsp;</p>
                <h2>A Shared Experience.</h2>
                Our menu concept is centered around a shared dining experience - we encourage each table to order as a group and share the
                exotic textures and flavours created by our chefs. Food, like life, is a shared journey to enjoy!
        </div>
        <div class="col-md-8 specs">
            <h2>Menu &amp; Wine List</h2>
            <div class="wrap">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Menu</a></li>
                    <li><a href="#profile" data-toggle="tab">Wine List</a></li>
                    <li><a href="#messages" data-toggle="tab">Banquets</a></li>
                </ul>
                <div class="inner tab-content padding-10">
                    <div class="tab-pane fade active in" id="home">
                        <p class="info">All these dishes are designed to create the ultimate shared-food experience. <br>
						<small>(For groups of 11 or more please view the banquet menu)</small></p>

                        <?php
                            $oldmenuorder ='';
                            foreach($menus as $menu)
                            {
                                $menuitem = $menu->menuitem;
                                $menuprice = $menu->menuprice;
                                $menuorder = $menu->menuorder;
                                $menucat = $menu->menucat;
                                $menutype = '';
                                if($menucat == 4)
                                {
                                    $menutype = 'Desserts';
                                    $dessertsreached = 1;
                                }

                                $offset = strpos($menuitem, 'with');

                                if(empty($offset))
                                {
                                    $offset = strpos($menuitem, '&');
                                }

                                if(empty($offset))
                                {
                                    $offset = strpos($menuitem, 'in');                                    
                                }

                                $itemlength = strlen($menuitem);
                                $offsetveg= strpos($menuitem,"("); //offset for the gluten free and the veg tags at the first ( symbol
                                $itemwith = substr($menuitem,$offset,($offsetveg-$itemlength)); // finds the WITH stuff stripping the (g/v)
                                $itemveg = substr($menuitem,(($itemlength-$offsetveg)*-1)); // finds the (g/v) stuff

                                if(empty($offsetveg))
                                {
                                    $itemwith = substr($menuitem, (($itemlength - $offset)*-1));
                                    $itemveg = '';
                                    $menuitem = $menuitem;
                                }
                                else {
                                    $menuitem = substr($menuitem, 0, ($offsetveg-1));                                    
                                }

                                if(empty($offset))
                                {
                                    $item = $menuitem;
                                    $itemwith = '';
                                } else {
                                    $item =substr($menuitem, 0, $offset);
                                }

                                if($menuprice > 0) {
                                    $printprice = '<span class="gray" > &raquo; &#36;$menuprice </span>';
                                } else {
                                    $printprice = '';
                                }

                                if($menuorder <> $oldmenuorder) {
                                    $oldmenuorder = $menuorder;

                                    switch($menuorder) 
                                    {
                                        case 1: echo "<h2>Small Plates</h2>";break;
                                        case 2: echo "<h2>Starters</h2>";break;
                                        case 3: echo "<h2>Salads/Sides/Veg</h2>";break;
                                        case 4: echo "<h2>Curries</h2>";break;
                                        case 5: echo "<h2>Grill/Steam/Wok</h2>";break;
                                        case 6: echo "<h2>Desserts</h2>";
                                        }
                                }

                                echo"<h3><span class='teal'>$item </span>$printprice</h3><small>$itemwith</small> 
										<sup> $itemveg</sup>";
                            }                            
                            ?>
                            
                            <h2>Legend:</h2>
                            <sup>(G)</sup> Gluten Free | <sup>(V)</sup> Vegetarian</p>
                    </div>

                    <div class="tab-pane fade" id="profile">

                        <p>Thanks to in-house wine guru, Yann Audran, our wine list has won many awards and features an eclectic mix of Australian and international labels.</p>
                        <p>Awards include Gourmet Traveller's 2015 Wine List of the Year Award, and one star in the World of Wine World's Best Wine Lists.</p>
                        <p>You can download our current <a onclick="ga('send', 'event', 'Restaurant Menu', 'Download', 'Wine PDF');" href='http://www.spirithouse.com.au/download.php?filetype=1&filename=spirithousewine' class='pdf' >Wine List</a>.</p>
                        <p><a href="/Best-wine-list-in-the-world"><img src="http://subscribe.worldoffinewine.com/wp-content/uploads/2016/07/WFW_2016_1_Star.jpg" alt="World of Fine Wine Wine List Awards" width="297" height="388" class="alignnone size-full wp-image-340" /></a></p>
                            
                    </div>

                    <div class="tab-pane fade" id="messages">
                        <p>Our banquet menu is a great way to sample a range of our award-winning food at a set price of $85 per person. </p>
						<p>We also have a vegetarian version of the banquet menu which is $70 per person.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section_functions" class="section">
    <div class="row">
        <ul>
            <li><a href="#section_restaurant"> Restaurant </a></li>
            <li><a href="#section_bookonline"> Book Online </a></li>
            <li><a href="#section_menu"> Menu </a></li>
            <li class="active"><a href="#section_functions"> Functions </a></li>
            <li><a href="#section_awards"> Awards </a></li>
        </ul>
    </div>
    <div class="row">
        <br/>
        <div class="col-md-3 specs">
            <br />
            <img src=" {{ url('../images/bar2-1.jpg') }}" alt="bar2-1" />
        </div>
        <div class="col-md-9 specs">
            <p class="info">Our new private dining room with its own kitchen, private chef and waiter is perfect for those of you who are
                looking for a truly luxe experience. The dining room seats up to 24 people and is entirely separate to the
                main restaurant. It overlooks the Bali Courtyard which provides a stunning backdrop and break-out area for
                you and your guests. </p>
            <p class="info">The unique courtyard layout of the main restaurant, makes Spirit House the perfect place for small weddings,
                parties and corporate functions. A party of 4 to 30 people can reserve their own private area for easy weddings.
                Or we can cater to corporate groups who want to book the entire restaurant for an exclusive-use event, up
                to 90 people. </p>
            <p class="info">Our banquet menus are designed around a <em>shared dining</em> experience. From intimate celebrations, corporate
                functions to fully themed weddings, our <a href="http://www.spirithouse.com.au/download.php?filetype=1&amp;filename=weddingplanner">function planner</a>                gives you all the tools to plan a memorable event at the Spirit House.</p>
        </div>
    </div>
    <div class="row">
        <br/>
        <div class="col-md-3 specs">
            <h2>FUNCTION PLANNER.</h2>
            <a class="visitpage" href="http://www.spirithouse.com.au/download.php?filetype=1&amp;filename=weddingplanner">Download Function Planner</a>            Complete with sample menus, table plans and other helpful tips and tricks to create an event that will be
            <span
                class='teal'>remembered for all the right reasons</span>.
                <p>
                    <a> <img alt="wedding planner booklet" src="{{ url('../images/weddingplanner.jpg') }}" class="shadow"></a>
                </p>
        </div>
        <div class="col-md-9 specs">
            <h2>SPIRIT HOUSE WEDDINGS IN ACTION</h2>
            <div class="videowrapper">
                <iframe src="http://player.vimeo.com/video/43165142?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0"
                    webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
        </div>
    </div>
</div>

<br/>
<br/>
<div id="section_awards" class="section">
    <div class="row">
        <ul>
            <li><a href="#section_restaurant"> Restaurant </a></li>
            <li><a href="#section_bookonline"> Book Online </a></li>
            <li><a href="#section_menu"> Menu </a></li>
            <li><a href="#section_functions"> Functions </a></li>
            <li class="active"><a href="#section_awards"> Awards </a></li>
        </ul>
    </div>

    <p class="info">The Spirit House food is best describ
        <ul>
            <li><a href="#section_restaurant"> Restaurant </a></li>
            <li><a href="#section_bookonline"> Book Online </a></li>
            <li><a href="#section_menu"> Menu </a></li>
            <li><a href="#section_functions"> Functions </a></li>
            <li class="active"><a href="#section_awards"> Awards </a></li>
        </ul>
</div>

<p class="info">The Spirit House food is best described as contemporary Thai cuisine. With four best-selling cook books under our belt, and
    a string of prestigious food awards, the Spirit House has evolved into an iconic food destination.</p>

<div class="row">
    <div class="col-md-3">
        <br/>
        <div id="TA_excellent628" class="TA_excellent">
            <ul id="psTUhXZ" class="TA_links fESyyi8xgp">
                <li id="LYCaWbQ" class="3QVwc0bG1R">
                    <a target="_blank" href="http://www.tripadvisor.com/"><img src="http://c1.tacdn.com/img2/widget/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
                </li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=excellent&amp;uniq=628&amp;locationId=781853&amp;lang=en_US&amp;langversion=2"></script>

        <div id="TA_certificateOfExcellence601" class="TA_certificateOfExcellence">
            <ul id="Vb4tl8z" class="TA_links GUgXqCW">
                <li id="Db0brXXX3fUc" class="CnF9malpobXk">
                    <a target="_blank" href="http://www.tripadvisor.com/Restaurant_Review-g677831-d781853-Reviews-Spirit_House-Yandina_Sunshine_Coast_Queensland.html"><img src="http://www.tripadvisor.com/img/cdsi/img2/awards/CoE2015_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
                </li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=601&amp;locationId=781853&amp;lang=en_US&amp;year=2015&amp;display_version=2"></script>

        <div id="TA_certificateOfExcellence609" class="TA_certificateOfExcellence">
            <ul id="4RzWI6ytaZL" class="TA_links aXdJj0VX">
                <li id="MVtGsrd" class="iW8DLhfFeY">
                    <a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
                </li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=609&amp;locationId=781853&amp;lang=en_US&amp;year=2014&amp;langversion=2"></script>

        <div id="TA_certificateOfExcellence729" class="TA_certificateOfExcellence">
            <ul id="JRO5L43KH4YO" class="TA_links EjcXD8NdIx">
                <li id="7n33mnlJIts" class="2svFGJ"><a href="http://www.tripadvisor.com/Restaurant_Review-g677831-d781853-Reviews-Spirit_House-Yandina_Sunshine_Coast_Queensland.html">Spirit House</a></li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=729&amp;locationId=781853&amp;lang=en_US&amp;year=2013"></script>

        <div id="TA_certificateOfExcellence743" class="TA_certificateOfExcellence">
            <ul id="T0n4FaklFqg" class="TA_links GUBJ87uDDnmx">
                <li id="4nX6qvG" class="3U2mCt888mYV"><a href=http://www.tripadvisor.com/Restaurant_Review-g677831-d781853-Reviews-Spirit_House-Yandina_Sunshine_Coast_Queensland.html>Spirit House</a></li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=743&amp;locationId=781853&amp;lang=en_US&amp;year=2012"></script>

        <br>
        
        <script src="http://www.urbanspoon.com/b/o_like_it/1361098">
            < noscript > < a href =
                "http://www.urbanspoon.com/r/350/1361098/restaurant/Queensland/Spirit-House-Yandina" >
                Spirit House </a></noscript >
        </script>
    </div>
    <div class="col-md-4 lists">
        <h2>Reviews &mdash; Old &amp; New</h2>
        <ul>
            <li>‘One Hat’ Award - Good Food Guide, Qld. 2007 - 2015</li>
            <li> Top 10 Qld Regional Restaurants - Gourmet Traveler Magazine, 2007 to 2014</li>
            <li>‘One Hat’ Award - Brisbane Times, Qld. 2012</li>
            <li>"Australia's Best Food Experience' - The Australian - 2010</li>
            <li>Best Australian Restaurants - Gourmet Traveler Magazine, 2000-2006</li>
            <li>Best Five Queensland Restaurants - Queensland Catering Association, 2001</li>
            <li>Best Queensland Restaurant - “Queensland Entertainment” Gold Award, 2000-’01</li>
            <li>Eating and Drinking in Australia - Mietta’s Queensland Award, 2001</li>
            <li>Best Asian Restaurant, Sunshine Coast - Restaurant & Caterers Award 2004</li>
            <li>Best Themed Restaurant, Queensland - Restaurant & Caterers Award, 2004</li>
            <li>National Tourism Restaurant & Catering - Australian Tourism Award, 2005</li>
            <li>Tourism Restaurant & Catering - Queensland Tourism Award, 2006</li>
            <li>Qld & National Small Business Excellence Award 2007, Tourism Category</li>
            <li>Tourism Restaurant & Catering - Queensland Tourism Award, 2007</li>
            <li>Top 10 Qld Regional Restaurants - Courier Mail Food Guide, 2007</li>
            <li>Chamber of Commerce Business Excellence Award – Hall of Fame, 2007</li>
            <li>Restaurant and Caterer's Award - 2008 State Winner - Best Tourism Restaurant, Best Themed Restaurant</li>
        </ul>
    </div>
    <div class="col-md-5 lists">
        <h2>Reviews &mdash; Old &amp; New</h2>
        <div class="review animate" style="opacity: 1; ">
            <ul>
                <li> Best Restaurant, Sunshine Coast - 1998, 1999, 2000
                    <li> Best Queensland Restaurant - Finalist, 2000
                        <li> American Express &ldquo;Hall of Fame Award&rdquo;, 2001
            </ul>
            <cite>American Express Awards</cite>
        </div>
        <div class="review animate" style=" opacity: 1; ">
            <p>It's hard to imagine a malign spirit that wouldn't be appeased by the tranquillity and beauty of the restaurant
                setting, and the superb food that emanates from the kitchen. </p>
            <br>
            <cite>Courier Mail food and wine guide Queensland 2008 Score: 15.5/20, One Hat</cite>
        </div>
        <div class="review animate" style=" opacity: 1;  ">
            <p>It could be the restful lagoon, lush gardens or the many smiling statues of Buddha. It might be the vibrant flavours
                and heady but balanced dressings and accompaniments</p>
            <br/>
            <cite>Gourmet Traveller 2008 Australian Restaurant Guide</cite>
        </div>
    </div>
</div>
<!-- end awards secion-->

@endsection

@section ('scripts')

<script >

    

</script>
@endsection
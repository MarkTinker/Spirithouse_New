@extends ('layouts.main')

@section ('title', 'Newsletter')

@section ('pagetitle')
<h1>Fun Stuff and News</h1>
@endsection

@section ('pagedescription')
<p>3 Fun-Filled Reasons to stay connected with Spirit House</p>
@endsection

@section ('content')

    <div class="section">
        <div class="row">
            <ul>
                <li class="active"><a href="" > CONNECT </a></li>
                <li><a href="" > NEWSLETTER </a></li>
                <li><a href="" > THE BLOG </a></li>
                <li><a href="" > FACEBOOK </a></li>
            </ul>            
        </div>
        <p class="info">If you're looking for some <span class="blue"> fun and adventure</span> without having to leave your keyboard, you're on
                the right page. We have a blog, packed full of fun, inspiring, educational articles and videos just waiting for you to
                discover. Our newsletter catalogue is also available online for your Spirit House food-related reading pleasure. We are
                very active on facebook too.</p>
        <p class="info">You can learn more at these jumping off points below:</p>
    </div>

    <br/>
    <br/>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > CONNECT </a></li>
                <li class="active"><a href="" > NEWSLETTER </a></li>
                <li><a href="" > THE BLOG </a></li>
                <li><a href="" > FACEBOOK </a></li>
            </ul>
        </div>

        <p class="info"> Every six months we send out our 8-page newsletter, packed with great articles and recipes. You can download past issues or sign up to our email newsletter which will save trees. </p>

        <div class="row">
            <div class="col-md-4">
                <h2>Join Our Newsletter</h2>
                <div class="wrap">
                    <div class="inner" style="position: relative;">
                        <img class="bookmark" src=" {{ url('../images/bookmark.png') }} ">
                        <br>
                        <form action="http://spirithouse.createsend.com/t/y/s/jhirli/" method="post" id="subForm" class="spiritform">
                            <fieldset>
                                <legend>Sign Up Now</legend>
                                <p>For our latest news and special deals &#8230;</p>
                                    <div>
                                        <label for="jhirli-jhirli">Email:</label><br /><input type="text" name="cm-jhirli-jhirli" id="jhirli-jhirli" /><br />
                                        <label for="postcode">postcode:</label><br /><input type="text" name="cm-f-hlihtr" id="postcode"/>
                                        <br />
                                        <button class="bookingsubmit" value="Subscribe" type="submit"><span>Sign Up!</span></button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <br/>
                <h2>Old Email Newsletters</h2>
                <script type="text/javascript" src="http://spirithouse.createsend.com/t/y/p/kkukl/0/1/1/1/1/"></script>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <h2>A list of our Email Newsletters:</h2>
                        <script type="text/javascript" src="http://spirithouse.createsend.com/t/y/p/kkukl/0/1/0/1/1/"></script>
                    </div>
                    
                    <div class="col-md-4">
                        <h2>Dec-Jul 2014 - final print issue</h2>			
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=latestnews'> <img class="shadow"  src=" {{ url('images/newsletter-jan-jun14.jpg') }} " alt="newsletter-jan-jun-14" /></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2>Jul-Dec 2013</h2>
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=juldec13'> <img class="shadow"  src=" {{ url('images/newsletter-jul-dec13.jpg') }} " alt="newsletter-jul-dec13" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jan-Jun 2013</h2>			
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=janjun13'> <img class="shadow"  src=" {{ url('images/newsletter-jan-jun13.jpg') }} " alt="newsletter-jan-jun-13" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jul-Dec 2012</h2>			
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=juldec12'> <img class="shadow"  src=" {{ url('images/newsletter-jul-dec12.jpg') }} " alt="newsletter-jul-dec12" /></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2>Jan-Jun 2012</h2>			
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=janjun12'> <img class="shadow"  src=" {{ url('images/newsletter-jan-jun12.jpg') }} " alt="newsletter-jan-jun12" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jul - Dec 2011</h2>
            			<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=juldec11'><img class="shadow"  src=" {{ url('images/newsletter-jul-dec11.jpg') }} " alt="newsletter-jul-dec11" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jan - Jun 2011</h2>			
				        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=janjul11'><img class="shadow" src=" {{ url('images/newsletter-jan-jun11.jpg') }} " alt="newsletter-jan-jun11" /></a>	
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2>Jul - Dec 2010</h2>			
				        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=juldec10'> <img class="shadow"  src="{{ url('images/newsletter-jul-dec10.jpg') }} " alt="newsletter-jul-dec10" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jan - Jun 2010</h2>
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=janjun10'>
                        <img class="shadow"  src=" {{ url('images/newsletter-jan-jun10.jpg') }} " alt="newsletter-jan-jun10" /></a>
                    </div>
                    <div class="col-md-4">
                        <h2>Jul - Dec 2009</h2>			
                        <a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=juldec09'>
                        <img class="shadow" src=" {{ url('images/newsletter-jul-dec09.jpg') }} " alt="newsletter-jul-dec09.jpg" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > CONNECT </a></li>
                <li><a href="" > NEWSLETTER </a></li>
                <li class="active"><a href="" > THE BLOG </a></li>
                <li><a href="" > FACEBOOK </a></li>
            </ul>            
        </div>

        <p class="info">Our blog is packed with videos and content varying from fun, educational, inspirational and just plain entertaining. Below are the latest articles from the blog:</p>

        <a class="visitpage" href="http://www.spirthouse.com.au/funstuff">Waste time on our blog</a>

    </div>

    <br/>
    <br/>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > CONNECT </a></li>
                <li><a href="" > NEWSLETTER </a></li>
                <li><a href="" > THE BLOG </a></li>
                <li class="active"><a href="" > FACEBOOK </a></li>
            </ul>            
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2>From Facebook</h2> 
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSpirit-House%2F7325766843&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;force_wall=true&amp;border_color&amp;stream=true&amp;header=true&amp;appId=122965114397233" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
@endsection

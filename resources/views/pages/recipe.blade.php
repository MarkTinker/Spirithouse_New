@extends ('layouts.main')

@section ('title', ' Recipes')

@section ('pagetitle', 'Recipes for free')

@section ('pagedescription', "they're free, what's not to love about that?")

@section ('content')

    <div class="section">
        <div class="row">
            <ul>
                <li class="active"><a href="" > FREE RECIPES </a></li>
                <li><a href="" > SEARCH RECIPE DATABASE </a></li>
            </ul>
        </div>
        
        <p class="info"> Hooked on our citrus caramel pork? Can't get enough of our whole crispy fish - help yourself to some of our most requested recipes below. </p>

        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h2>Citrus Caramel Pork</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe1'> <img class="shadow"  src=" {{ url('../images/freerecipe1.jpg') }} " alt="citrus caramel pork recipe" /></a>
            </div>

            <div class="col-md-3">
                <h2>Whole Crispy Fish</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe2'> <img class="shadow"  src=" {{ url('../images/freerecipe2.jpg') }} " alt="Whole Crispy Fish with Tamarind Sauce" /></a>
            </div>

            <div class="col-md-3">
                <h2>Chilli Jam Chicken</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe3'> <img class="shadow"  src=" {{ url('../images/freerecipe3.jpg') }} " alt="Chilli Jam Chicken" /></a>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h2>Tamarind Glazed Chicken</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe4'> <img class="shadow"  src=" {{ url('../images/freerecipe4.jpg') }} " alt="tamarind glazed chicken recipe" /></a>
            </div>

            <div class="col-md-3">
                <h2>Thai Fried Rice</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe5'> <img class="shadow"  src=" {{ url('../images/freerecipe5.jpg') }}" alt="Thai Fried Rice recipe" /></a>
            </div>

            <div class="col-md-3">
                <h2>Spiced Pumpkin Soup</h2>			
				<a href='http://www.spirithouse.com.au/download.php?filetype=1&filename=freerecipe6'> <img class="shadow"  src=" {{ url('../images/freerecipe6.jpg') }}" alt="spiced pumpkin soup recipe" /></a>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="section">
        <div class="row">
            <ul>
                <li><a href="" > FREE RECIPES </a></li>
                <li class="active"><a href="" > SEARCH RECIPE DATABASE </a></li>
            </ul>
        </div>

        <p class="info">Six measely recipes we hear you say - au contraire we have a motherlode of recipes which we haven't had time to photograph and make all pretty.</p>

        <div class="row">
            <div class="col-md-7 col-md-offset-5">
                <h2><span class="gray">Q: &nbsp;</span> How Do I Find Recipes or Hot Tips</h2>

                <div class="text-italic">
                    <em>
                    Search our database for recipes, tips and techniques. Need some ideas for <span class="teal">chicken</span>. 
                    How about a nice <span class="teal">stir fry</span>? Want to make a <span class="teal">curry paste</span>? Just type in a key word &hellip; <em>et voil&agrave;</em>.
                    </em>
                </div>

                <div class="wrap">
                    <div class="inner" style="position: relative;">
                        <img class="bookmark" src="{{ url('../images/bookmark.png') }} ">
                        <br/>

                        <form method="post" action="" id="subForm" class="spiritform">
                            <fieldset>
                                <legend>Search our Recipe Database</legend>
                                <p>Enter an ingredient eg: <span class="teal"><em>prawns</em></span> &#8230;</p>
                                <div>
                                    <input type="text" name="search" id="search_box" class='search_box' placeholder="pork, caramel, prawns, stir fry, red curry... go nuts"/>
                                    <button type="submit" value="Search" class="search_button"><span>Show me the Money!</span></button>
                                </div>
                            </fieldset>

                            <!-- <input type="submit" value="Search" class="search_button" /><br /> -->
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
@endsection
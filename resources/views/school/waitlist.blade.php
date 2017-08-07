@extends ('layouts.main')

@section('title', '&amp; Cooking School &mdash; Cooking School Wait List')

@section('content')

<div class="section">
    <div class="row">
        <div class="col-md-4 specs">
            <h2>{{ $data['classname'] }}</h2>
            <ul>
                <li class="wide"><strong>DATE:</strong>{{ $data['classdate'] }}</li>
                <li class="wide"><strong>Description:</strong>{{ $data['description'] }}.</li>
                <li class="wide"><strong>Recipes:</strong>{!! $data['printrecipes'] !!}.</li>
            </ul>
        </div> <!-- /.col-md-4 -->
        <div class="col-md-6 content">
            <div class="wrap">
                <div class="inner" style="position: relative;">
                    <img src="{{ asset('images/bookmark.png') }}" class="bookmark">

                    <form method="post" class="spiritform">
                        <fieldset>
                            <input type="hidden" name="scheduleid" value="{{ $data['scheduleid'] }}">
                            <legend>Join he Waitlist for {{ $data['classname'] }} </legend>
                            <p>Simply enter your email address and we'll notify you if places become available for {{ $data['classname'] }} on the {{ $data['classdate'] }}.</p>
                            <br/>
                            <label for="email">Your email</label>
                            <input name="email" type="text">
                            <button type="submit" class="bookingsubmit" value="Submit your details"><span>Join Waitlist!</span></button>
                        </fieldset>
                    </form>
                </div> <!-- /.inner -->
            </div> <!-- /.wrap -->
        </div> <!-- /.col-md-6  content -->

        <div class="col-md-2">&nbsp;</div>
    </div> <!-- /.row -->
</div> <!-- /.section -->

@endsection
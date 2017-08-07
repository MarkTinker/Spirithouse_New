@extends('layouts.main')

@section('title', ': Class Booking form for {{ $data["classname"] }}')

@section('content')

<div class="section">
    <div class="row">
        <div id="warning" class="col-md-12 info hidden">
            <h2><span class="text-danger">Just A Sec . . .</span></h2>
            <p class="info"><span class="text-danger">You must have javascript enabled in your browser to make a booking. Please enable javascript and refresh this page or call the office on 07 5446 8977 so we can make the booking for you. </span></p>
            <br/>
            <br/>
        </div>
        <ul>
            <li class="active">
                <a href="">
                    Booking for <span class="teal">&#8220; {{ $data['classname'] }} &#8221;</span> on {{ $data['classdate'] }}
                </a>
            </li>
        </ul>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4 specs">
            <div class="row">
                <ul>
                    <li><strong>DATE:</strong>{{ $data['classdate'] }}</li>
                    <li><strong>START:</strong>{{ $data['starttime'] }}</li>
                    <li class="wide"><strong>Description:</strong>{{ $data['description'] }}</li>
                    <li class="wide"><strong>Recipes:</strong>{!! $data['printrecipes'] !!}</li>
                </ul>
            </div>            
            <div class="row">
                <p class="info"><a href="{{ route('pages.school') }}"> Go Back to Classes</a></p>
            </div>            
        </div> <!-- /.col-md-4 specs !-->

        <div class="col-md-6 content">
            <div class="wrap">
                <div class="inner" style="position:relative">
                    @if ($data['spotsleft'] > 0)
                    <img src="{{ url('../images/bookmark.png') }}" class="bookmark">
                    <div id="booking_complete" class="hidden">
                        <h2>Booking Complete</h2>
                        <p class="thanks"></p>
                        <hr/>
                        <p>Print this page out for your records if you like, or you can click the following link to @mdash;</p>
                        <p><img src="{{ url('../images/save_calendar_med.jpg') }}" alt="save_calendar_med" style="float:left;margin:0 5px 0 0;"
                            />
                            <a class="linktopage" href="">Save this booking to your calendar</a></p>
                        <p>If you have any questions please feel free to give us a call at the office: (07) 5446 8977 &mdash;
                            we'll be happy to assist you however we can. See you soon!</p>
                        <p><a class="linktopage" href="{{ route('pages.school') }}">Back to Classes</a></p>
                    </div>
                    <!-- /#booking_complete -->

                    <div id="booking_timeout" class="hidden">
                        <h2>Oops!</h2>
                        <p>It looks like we're experiencing some technical difficulties. To make sure your booking is complete
                            please give us a call at the office (07) 5446 8977. We apologize for the inconvenience.</p>
                        <p><strong>Error:</strong> The script response timed out.</p>
                    </div> <!-- /#booking_timeout -->
                    <form method="post" name="theForm" id="theForm" class="spiritform">
                        <input type="hidden" name="spotsbooked" value="{{ $data['bookings'] }}">
                        <input type="hidden" name="scheduleid" value="{{ $data['scheduleid'] }}">
                        <input type="hidden" name="spotsbooked" value="{{ $data['emaildescription'] }}">
                        <input type="hidden" name="starttime" value="{{ $data['starttime'] }}">
                        <input type="hidden" name="starttime" value="{{ $data['classdate'] }}">
                        <input type="hidden" name="classname" value="{{ $data['classname'] }}">
                        <input type="hidden" name="maxseats" value="{{ $data['maxseats'] }}">
                        <input type="hidden" name="classprice" value="{{ $data['classprice'] }}">
                        <input type="hidden" name="classfulldate" value="{{ $data['classfulldate'] }}">
                        <input type="hidden" name="vouchers_to_use" value="">
                        <input type="hidden" name="total_voucher_amount" value="0">
                        <input type="hidden" name="pay_balance" value="false" />

                        <fieldset class="personal_information">
                            <legend>Personal Information</legend>

                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" class="required" />

                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" class="required" />

                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="required phone" />

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="required email" />

                            <label for="seats" class="seats">No. seats required</label>
                            <select id="seats" name="seats" style="width:50px;">
                                @for($i = 0; $i < $data['spotsleft']; $i++)
                                    <option value="{{$i + 1}}" selected="{{ $i==0 ? 'selected' : ''}}" >{{$i + 1}}</option>
                                @endfor
                            </select>

                            <label for="nametags">Names of those attending the class:*</label>
                            <textarea rows=3 id="nametags" name="nametags" placeholder="Example: John, Neil, Terry" class="required" /></textarea>
                            <p><small>*Names will be used to make nametags.</small></p>
                            <hr />
                        </fieldset>

                        <fieldset class="payment_details">
                            <legend>Payment Details</legend>
                            <div id="totalsummary">
                                <p>Total amount payable for 1 seat
                                    <strong><big>${{ $data['classprice'] }}</big></strong></p>
                            </div>

                            <div class="radios">
                                <p>Will you be using a gift voucher?</p>
                                <div class="sub">
                                    <input type="radio" name="usevoucher" id="usevoucher_yes" value="yes" /> <label for="usevoucher_yes">Yes, please!</label>
                                    <input type="radio" name="usevoucher" id="usevoucher_no" value="no" checked="checked" />                                    <label for="usevoucher_no">No, thank you.</label>
                                </div>
                            </div>
                            <hr />
                        </fieldset>

                        <div id="paymenttype_voucher">
                            <fieldset>
                                <legend>Gift Voucher</legend>

                                <label for="vouchers">Enter your gift voucher number(s) here:*<sup>&dagger;</sup></label>
                                <textarea id="vouchers" name="vouchers" rows="3" cols="30"></textarea>

                                <p><small>* Don't worry if your voucher doesn't cover the full amount, we will fix that in the next step.</small></p>
                                <p><small>&dagger; Please separate multiple vouchers with spaces or commas.</small></p>
                                <hr />

                                <div class="tac">
                                    <label for="chk_tc1"><input type="checkbox" id="chk_tc1" name="chk_tc1" />
                                            Yes &mdash; I have read and agreed to the 
                                            
                                                <a href="http://www.spirithouse.com.au/newwindow/tandc.htm" rel="1" class="terms" >terms and conditions</a> of this purchase
                                                <!-- <a href='#nogo' onclick="javascript:tandc_window();">terms and conditions</a> of this purchase. -->
                                            </label>
                                    <hr />
                                </div>

                                <button type="submit" class="submit-disable" id="submit_voucher"><span>Check Voucher(s)</span></button>
                            </fieldset>

                            <div class="tandc specs">
                                <h2>Terms and Conditions:</h2>
                                <p>While our classes are fun, friendly and laid-back, we do have a few conditions that you should
                                    be aware of:</p>
                                <UL>
                                    <li class="wide"><strong>Cancellations &amp; No-shows</strong> Classes are non refundable unless 5 days
                                        notice is given. If you need to cancel or change a class, please call our friendly
                                        office on (07) 5446 8977.
                                        <li class="wide"><strong>Suitable Footwear</strong> For safety reasons, please bring covered shoes
                                            to wear during class. This will protect you from any spills or dropped knives.
                                            <li class="wide"><strong>Allergies etc.</strong> Classes DO NOT cater for vegetarians or those
                                                with food allergies unless stated in the class description. All dishes may
                                                contain traces of peanuts. Because the focus is on a 'shared food experience',
                                                the class can not cook one-off special dishes.
                                                <li class="wide"><strong>Vouchers</strong>If using a voucher you MUST present your voucher
                                                    to us on the day of the class - if the voucher has been forgotten or
                                                    lost, the full amount will be charged to the recepients credit card and
                                                    will be refunded when the vouchers have been delivered to us.
                                                    <li class="wide"><strong>Recipe Changes</strong>A recipe might be different to the description
                                                        - this is rare but sometimes an ingredient might be unavailable on
                                                        the day.
                                </UL>
                                <p>&nbsp;</p>
                            </div>
                            <!-- /.tandc specs -->
                        </div>
                        <!-- /#paymenttype_voucher -->

                        <div id="paymenttype_creditcard">
                            <fieldset>
                                <legend>Credit Card</legend>

                                <label for="nameoncard1">Name on Credit Card</label>
                                <input type="text" name="nameoncard1" id="nameoncard1" value="">

                                <label for="cardnumber1">Credit Card Number</label>
                                <input type="text" name="cardnumber1" id="cardnumber1" />

                                <label for="expiry_m1" style="float: left; margin-right: 10px; ">Credit Card Expiry</label>
                                <select name="expir_m1" class="cc_droplist">
                                    <option value="01">January</option>
                                    <option value="02">Feburary</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select name="expiry_y1" class="cc_droplist">
                                    @for ($j =date('Y'); $j < 2024; $j++)
                                        <option value="{{ substr($j,-2, 2) }}">{{ $j }}</option>
                                    @endfor
                                </select>

                                <label for="ccv1" style="float: left; line-height: 40px;margin-right: 10px;">Card Security Number (CCV)</label>
                                <input type="text" name="ccv1" id="ccv1" size=4 maxlength=4 style="width: 43px; float: left;">
                                <img src="{{ url('../images/ccv.png') }}" width="46" height="28" class="ccv" alt="Back of Credit card showing CCV" title="The CCV can be found on the back of your Credit Card.">
                                <br>
                                <hr/>

                                <div class="tac">
                                    <label for="chk_tc2"><input type="checkbox" id="chk_tc2" name="chk_tc2" />
                                        Yes &mdash; I have read and agreed to the 
                                    <a href="http://www.spirithouse.com.au/newwindow/tandc.htm" rel="1" class="terms" >terms and conditions</a> of this purchase
                                    <hr/>
                                </div>
                                <button type="submit" class="submit-disable" id="submit_credit"><span>Pay Now</span></button>
                                <hr/>
                            </fieldset>

                            <div class="tandc specs">
                                <h2>Terms and Conditions:</h2>
                                <p>While our classes are fun, friendly and laid-back, we do have a few conditions that you should be aware of:
                                <UL>
                                <li class="wide"><strong>Cancellations & No-shows</strong> Classes are non refundable unless 5 days notice is given. If you need to cancel or change a class, please call our friendly office on (07) 5446 8977.
                                <li class="wide"><strong>Suitable Footwear</strong> 
                                For safety reasons, please bring covered shoes to wear during class. This will protect you from any spills or dropped knives.

                                <li class="wide"><strong>Allergies etc.</strong>
                                Classes DO NOT cater for vegetarians or those with food allergies unless stated in the class description. All dishes may contain traces of peanuts. Because
                                the focus is on a 'shared food experience', the class can not cook one-off special dishes. 
                                <li class="wide"><strong>Vouchers</strong>If using a voucher you MUST present your voucher to us on the day of  the class - if the voucher has been forgotten or lost, 
                                the full amount will be charged to the recepients credit card and will be refunded when the vouchers have been delivered to us.
                                <li class="wide"><strong>Recipe Changes</strong>A recipe might be different to the description - this is rare but sometimes an ingredient might be unavailable on the day. 
                                </UL>
                                <p>&nbsp;</p>
                            </div> 
                        </div> <!-- /#paymenttype_creditcard -->
                    </form>
                    @else
                        <h2>Terribly Sorry</h2>
                        @if($data['from'] == "waitlist")
                            <p>Ah nuts! You weren't fast enough!</p>
                            <p>It looks like you just missed out on the last few spots that were free.</p>
                            <p>If any more places open up, we will notify you again. If you'd like off the list, click <a href="">here</a>.</p>
                        @else
                            <p>Sorry - there are no spots left in this class at the moment. Would you like to 
                            <a href="">join the waitlist?</a></p>
                            <button><span><a class="linktopage" href="school2.php">Back to Calendar</a></span></button>
                        @endif
                    @endif
                </div> <!-- /.inner -->
            </div> <!-- /.wrap -->
        </div><!-- /.content .col-md-6 -->

        <div class="col-md-2 seatsleft">
            <div id="seatsleft">
                <h2>Seats Left</h2>
                <div class="seatsleft_bottom">
                    {{ $data['spotsleft'] }}
                </div> <!-- /.seatsleft_bottom -->
            </div><!-- /#seatsleft-->
        </div> <!-- /.col-md-2 -->
    </div> <!-- /.row -->
</div><!-- /.section -->

@endsection

@section('scripts')

<script >
    (function() {
    var tandc = $('div.tandc');
    tandc.hide();
    $('a.terms').click(function(event){
        event.preventDefault();
        tandc.slideToggle(200);
    }             
    );

    })();
</script>
<script>
    var javascript_vars = {"classprice":"100"}
</script>
<script src="{{ asset('js/booking.js') }}"></script>
@endsection
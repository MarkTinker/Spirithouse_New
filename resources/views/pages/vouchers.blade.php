@extends ('layouts.main')

@section('title', ': Restaurant &amp; Cooking School &mdash; Gift Vouchers')

@section('pagetitle')
<h1>Make Someone Happy</h1>
@endsection

@section('pagedescription')
<p>Spirit House Gift Vouchers make the Perfect Gift.</p>
@endsection

@section('content')
    <div class="row">
        <p class="info">
            If you're short on time, choose to download your voucher instantly and print them at your convenience. Otherwise we can send your voucher in the next business mail.
        </p>
    </div>

    <div class="row section">
        <div class="col-md-4 specs">
            <h2>Voucher F.A.Q.</h2>
            <ul>
                <li class='wide'><strong>How much does a voucher cost?</strong>Whatever dollar amount you choose. The most common amount is $150 which covers a meal for two at the restaurant or one cooking class.</li>
                <li class='wide'><strong>How soon will I get it?</strong>Immediately, if you choose the <span class="teal">download and print</span> option, or two to three days via snail mail.</li>
                <li class='wide'><strong>Validity:</strong> Spirit House vouchers are valid for twelve months.</li>
                <li class='wide'><strong>Where can I use it?</strong>Your voucher can be used at the restaurant or the cooking school.</li>
                <li class='wide'><strong>What if I lose the voucher?</strong>Simply call the office on (07) 5446 8977 and we'll track the number for you.</li>
                <li class='wide'><strong>Can I book online with vouchers?</strong>You can book cooking classes online &mdash; just type in your voucher number.</li>
            </ul>
        </div>
        <div class="col-md-8 specs content">
            <h2>Purchase your gift vouchers.</h2>
            <div class="wrap">
                <div class="inner">
                    <img src="{{ asset('images/bookmark.png') }}" class="bookmark" />
                    <div id="voucher_complete" style="display:none">
                        <h2>Voucher Purchase Successful</h2>
                        <p class="thanks"></p>
                        <hr/>
                        <p>If you have any questions about your purchase please feel free to give us a call at the office: (07) 5446 8977 &mdash; we'll be happy to assist you however we can.</p>
                    </div>

                    <div id="voucher_timeout" style="display:none">
                        <h4>Oops!</h4>
						<p>It looks like we're experiencing some technical difficulties. Your Voucher purchase is probably complete, but please
							give us a call at the office (07) 5446 8977, to confirm. We apologize for the inconvenience.</p>
						<p><strong>Error:</strong> The script response timed out.</p>
                    </div>

                    <form action="#" method="post" name="theForm" id="theNewForm" class="spiritform" data-eway-encrypt-key="yAcvTTUEaZ6MkjqipEek4WYz5GNLTmfXBDolh5DxGomwARYCcDi3LCprwxhLAoWDVju1b2fUHEfCdTfkeNAuOvtMtj3eG5E1sqduXK/z1DhpA0wzraVCofxiR1xWlaT09fQ/R1Y2C5zUEnERTG0xzrcwFQ7D0Jv+Jlz4jiYtzFNCD+7y4C4rPzHP0nfHH2D2PYI+nqaSlXB6GJReNoHX5MPU8LLlYV+zQeV3NMvYYVT0zptOw2vltSQSih5/f9+FRKM41nyoaEXmNeADjf7NJYuwzSPT2u3/iHCbM5ISyKgcUtckXZqucmtZ7JqpwpX1J7YsONNwDUfFdGKyoAa3Jw==">

						<fieldset>
							<legend>Delivery Details</legend>
							<label for="firstname">Your Name</label>
							<input type="text" name="firstname" id="firstname">

							<label for="email">Email</label>
							<input type="text" name="email" id="email" type='email' />

							<label for="emailcheck">Confirm Email</label>
							<input type="text" name="emailcheck" id="emailcheck" type='email' />
							<hr />
						</fieldset>

						<fieldset>
							<legend>Delivery Mode</legend>

							<div class="radios">
								<p>How would you like the vouchers delivered?</p>
								<div class='sub_flat'>

									<div class='radio_item'>
										<input type="radio" name="deliverymode" value="email" id="deliverymode_email" checked="checked" />
										<label for="deliverymode_email">Download &amp; Print (PDF) &mdash; <em>We'll email them to you, too.</em></label>
									</div>

									<div class='radio_item'>
										<input type="radio" name="deliverymode" value="address" id="deliverymode_post" />
										<label for="deliverymode_post">Post the vouchers to my street address</label>
									</div>

								</div>
							</div>

							<div id="hideaddress">
								<label for="phone">Phone Number</label>
								<input type="text" name="phone" id="phone" type='tel'>

								<label for="address">Address</label>
								<textarea name="address" id="address"></textarea>

								<label for="notes">If you have any special requests please enter them here:</label>
								<textarea name='notes' id='notes' /></textarea>
							</div>
							<hr />

						</fieldset>

                        <fieldset>
							<legend>Purchase Details</legend>

							<label for="qty">I would like </label>
							<select class='qty' name='qty' id='qty'>
                                @for ($i = 1; $i <= 6; $i++)
                                    <option value="{{$i}}" selected="selected" >{{$i}} Voucher</option>                                
                                @endfor
                            </select>
                            <label for="amount">at </label>
                            $<input type="text" name="amount" id="amount"/>.00 each.
                            <div id="infoAmount" class="information">
                                <p>The cost of one cooking class is <em>$150.00</em>, just so you know!</p>
                            </div>
                            <hr/>

                            <div id="recipientBlock">
                                <label for="fromname">These voucher/s are from:</label>
                                <input type="text" name="fromname" id="fromname" placeholder="Eg: Mum and Dad or your name etc.">

                                <label>To whom are you giving the voucher/s?</label>
                                <ol id="recipients">
                                    @for ($i = 1; $i <= 6; $i++)
                                        <li class="recipient_wrap recipient{{$i}}">
                                            <input type="text" name="recipient{{$i}}" id="recipient{{$i}}" placeholder="Voucher{{ $i }} &mdash; Name of recipient."/>
                                        </li> 
                                    @endfor
                                </ol>
                                <hr/>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Payment Details</legend>
                            <div id="totalsummary">
                                <p>Total amount payable for 1 seat <strong><big>$</big></strong></p>
                            </div>

                            <hr/>

                            <label for="nameoncard1">Name on Credit Card</label>
							<input type="text" name="EWAY_CARDNAME" id="nameoncard1" />

							<label for="cardnumber1">Credit Card Number</label>
							<input type="text" data-eway-encrypt-name="EWAY_CARDNUMBER" id="cardnumber1" />

                            <div class="row form-group">
                                <label for='expiry_m1' class="col-md-5">Credit Card Expiry</label>
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
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5" class="labelccv" for="ccv1">Card Security Number (CCV)</label>
                                <div class="col-md-4">
                                    <input type="text" data-eway-encrypt-name="EWAY_CARDCVN" id="ccv1" size="4" maxlength="4" />                                    
                                </div>                                
                                <div class="col-md-3">
                                    <img src="{{ asset('images/ccv.png') }}" width="46" height="28" class="ccv" alt="Back of Credit card showing CCV" title="The CCV can be found on the back of your Credit Card." />
                                </div>
                            </div>
                            <div id="eWAYBlock">
                                <div style="text-align:center; float: left;">
                                    <a title="eWAY Payment Gateway" target="_blank" rel="nofollow">
                                        <img alt="eWAY Payment Gateway" src="https://www.eway.com.au/developer/payment-code/verified-seal.ashx?img=12&size=7&pid=7acd3e4d-daf1-41d0-af3a-d18d59323c84" />
                                    </a>
                                </div>
                            </div>
                            <hr/>
                            <div class="tac">
                                <label for="chk_tc2"><input type="checkbox" id="chk_tc2" name="chk_tc2" />
                                    Yes &mdash; I have read and agreed to the 
                                    <a href="#nogo" rel="1" class="terms" >terms and conditions</a> of this purchase.
                                </label>
                                <hr />
                            </div>
                            <button type="submit" class="submit" id="submit_credit"><span>Pay Now</span></button>
                        </fieldset>
                    </form>
                    <script src="https://secure.ewaypayments.com/scripts/eCrypt.min.js"></script>
                    <div class="tandc specs">
                        <h2>Terms and Conditions:</h2>
                        <p>Vouchers can be used in the restaurant or the cooking school. 
                        We do have one condition on vouchers though:</p>
                        <ul>
                            <li class="wide"><strong>Don't Lose your Voucher</strong>If using a voucher you MUST present your voucher to 
                            us on the day of the class or your restaurant reservation- if the voucher has been forgotten or lost, 
                            the full amount will be charged to the recepients credit card and will be refunded when the vouchers
                                have been delivered to us.
                        </ul>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/vouchers.js') }}"></script>
<script>
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
@endsection
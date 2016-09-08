@extends('app')

@section('header_styles')

    <!--page level css starts-->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar-master/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/demo/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <!--end of page level css-->

@stop

@section('content')
<div class="container">

    <div class="row" style="margin-bottom: 30px;">
        <div class="services">
            <h2>
                <label class="border-bottom">FAQs
                </label>
            </h2>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="middle_center">

                <div id="main_middle_sec_panel">
                    <div id="main_middle_left_panel">
                        <div class="main_left_details">

                            <div class="main_middle_left_control_panel">

                              <h3><i class="fa fa-files-o"></i>&nbsp;        Providing solutions for:</h3>
                            </div>
                            <ul>
                                <li><a>Account collections</a></li>
                                <li><a>Charity fundraising</a></li>
                                <li><a>Customer retention</a></li>
                                <li><a>Market research</a></li>
                                <li><a>Opinion polling</a></li>
                                <li><a>Political campaigns</a></li>
                                <br><br>
                            </ul>
                            <div class="clear"></div>
                            <div class="left-contact row ">
                                <div class="col-sm-2 text-center">
                                    <img src="images/law.gif" alt="">
                                </div>
                                <div class="col-sm-8 text-center">
                                    <label>&nbsp;Law Enforcement inquiry?</label>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <a href="{!! URL::route('front.law') !!}">
                                       <input type="image" src="images/click.png" value="" style="float: right; border:none; margin:0px 0px 5px 0px;">
                                    </a>
                                </div>
                            </div>
                            <div class="clear"></div>
                            &nbsp;
                            <div class="left-contact row ">
                                <div class="col-sm-2 text-center">
                                    <img src="images/cust.gif" alt="">
                                </div>
                                <div class="col-sm-8 text-center">
                                    <label>&nbsp;Consumer complaint?</label>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <a href="/contact">
                                       <input type="image" src="images/click.png" value="" style="float: right; border:none; margin:0px 0px 5px 0px;">
                                    </a>
                                </div>
                            </div>
                            <div class="clear"></div>
                            &nbsp;
                            <div class="main_left_bottom_login_panel row">
                                <div class="left_bottom_bg_login">

                                    <div class="left_bottom_bg_login_details">
                                        <h3>Join our mailing list</h3>
                                        <p>Just enter your email address in the box below. </p>
                                        <form method="POST" action="{!! URL::route('user.email') !!}" style="margin-bottom: 30px;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <input type="text" name="ADDME" style="width:225px; height:25px; ">
                                           <input type="image" src="images/go.gif" style="margin:0px 0px 0px 5px; border:none;">
                                        </form>
                                        <div class="clear"></div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-8 col-xs-12">
            <div id="main_middle_right_panel">

                <div class="main_middle_right_details">
                  <img src="images/faq.png" alt="" style="float:left;">
                  <h2>Frequently Asked Questions </h2>
                  <h4>&nbsp;</h4><br>
                    <div>
                        <h3>What is Omega Services?</h3>
                        <p>
                        Omega Services is a telecommunications services company serving the commercial dialing industry.
                        </p><p><br>
                        </p><h3>Are you telemarketers then?</h3>
                        <p>
                        No.  Omega Services does not do any dialing.  We provide nationwide numbers for our clients to use in their call campaigns and the ability to dynamically control the Caller ID name appearance and return call routing, allowing them greater flexibility, regulatory compliance and increasing their contact rate.
                        </p><p><br>
                        </p><h3>If I was contacted by what I was told is an Omega Services number, it was actually by a client of Omega's?</h3>
                        <p>
                        Exactly.
                        </p><p><br>
                        </p><h3>So your <i>clients</i> are telemarketers?</h3>
                        <p>
                        Some of them are, but we also provide services to pollsters, media outlets, marketing research agencies, charities, political campaigns, collection bureaus, customer service departments... anyone who does a lot of outdialing in the course of their business.
                        </p><p><br>
                        </p><h3>So you help them hide their identity?</h3>
                        <p>
                        Far from it.  In fact, it's in order to maintain compliance with state and federal regulations regarding commercial dialing that many of our clients use our services.  There are various rules dictating what kind of Caller ID name appearance a company must have, or what numbers they can use to contact their clients, or how return calls and 'Do Not Call' requests must be handled.  Omega Services has the service footprint and the operational flexibility to help our clients maintain compliance with those rules - and to help their customers contact them, whether to contract business or simply request that they stop calling.<br><br>Omega Services is committed to 100% transparency with regard to our clients and their identities and to provide such information in response to any law enforcement, regulatory agency, carrier or consumer request.
                        </p><p><br>
                        </p><h3>I've been receiving calls from one of your clients and I want them to stop.</h3>
                        <p>
                        First, allow us to apologize on behalf of our client.  Contrary to popular impression, the last thing that most commercial dialers want is to harass the people that they're calling.  But any time you have large call campaigns or automated dialing processes, it's bound to happen.<br><br>
                        Our first suggestion is the fastest and easiest, and that's to call back the number that called you and tell the operator who answers that you are receiving unwanted calls and wish them to remove your number from their dialing list.<br><br>
                        If you are unable to resolve the problem that way, you can use our <a href="/contact">Contact Us</a> page to send us a 'Do Not Call' request.  We will forward that on to the client for you, and those requests are generally received directly by management.  It is a matter of our client's contract with Omega that they act upon such requests quickly and to the complainant's satisfaction.  Make sure to include not only the number that is calling you but also the number they are dialing, so that we may process your request.<br><br>
                        If you are still not satisfied or you wish the client's contact information for your records, Omega maintains an automated 'Do Not Call' system at <a href="callto://+17169323240">(716) 932-3240</a> which will provide you with the name and contact information for the company calling you.  Please do not feel that this is your last option, however.  If you have been unable to find satisfaction with any of the methods above, please <a href="/contact">let us know</a> and we will see to it that you are satisfied.
                        </p><p><br>
                        </p><h3>There are some other numbers that have been calling me as well, but they're not Omega numbers.  Can you help me with those?</h3>
                        <p>
                        Unfortunately, we can only assist you with 'Do Not Call' requests for Omega's own clients, but there are additional resources available.  Often simply Googling the number will get you the name of the carrier, and contacting them should help you find resolution.<br><br>Beyond that, if you're not already signed up with the <a href="https://www.donotcall.gov/">National Do Not Call Registry</a>, we recommend you take a moment to add your number to their list.  Though it may take a few months for your number to propagate out to the dialing community, that should at least help stop many of the unwanted calls.  You should be aware however that not all dialing is covered by the Do Not Call Registry and you may still be contacted by charities or for political purposes, since such calls are not commercial in nature.
                        </p><p></p>
                    </div>

                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
</div>
@stop

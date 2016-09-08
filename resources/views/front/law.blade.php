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
        <div class="services" style="height: 50px;">

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
                  <img src="images/law_icon.png" alt="" style="float:left;">
                  <h2>Law Enforcement Inquiries</h2>
                  <h4>Who we are, what we do, and how to submit information requests</h4>
                    <div style="margin-top: 30px;">
                    <p>
                      Omega Services provides customized CNAM and return call routing for call centers - marketing, pollsters, charities, collection agencies, political action groups, consumer surveys, etc.  Omega does not perform any dialing for our clients, nor do we carry their outbound call traffic or have access to any information regarding their outbound dialing.  The call that was reported by your caller ID or trap-and-trace device was likely made by an Omega client through their dialer and using their own circuits.  Outbound call records would have to be requested from the client's own local exchange carrier.<br><br>Omega is committed to 100% transparency and will provide to any law enforcement or regulatory agency the client contact, length of service and return call forwarding information for numbers in our database.  We accept subpoena service by email, mail or fax.  There is no charge for number history research or document production.<br>
                      </p><p><br>
                      </p><div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div style="margin-top: 50px;">
                        <h5>Contact Information:</h5>
                        <div>
                          <h4><img src="images/ico-email.png" alt="Email" width="20" height="16" hspace="2">Email: <a href="mailto:omega@calleridmanagement.com">omega@calleridmanagement.com</a></h4>
                          <h4><img src="images/ico-phone.png" alt="Fax" width="20" height="16" hspace="2">Voice message line: (785) 675-0490</h4>
                          <h4><img src="images/ico-fax.png" alt="Fax" width="20" height="16" hspace="2">Tollfree Fax: (800) 558-1273</h4>
                          <h4><img src="images/dnc_icon.gif" alt="DNC" width="20" height="16" hspace="2">Automated number look-up: (716) 932-3240</h4><br><br>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
</div>
@stop

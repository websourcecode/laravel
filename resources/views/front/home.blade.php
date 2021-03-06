@extends('app')

@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ihover/src/ihover.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/demo/css/styles.css') }}">
@stop

@section('content')
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ asset('assets/images/slider_1.jpg') }}" alt="slider-image" class="img-responsive">
    </div>
    <div class="item">
        <img src="{{ asset('assets/images/slider_2.jpg') }}" alt="slider-image" class="img-responsive">
    </div>
    <div class="item">
        <img src="{{ asset('assets/images/slider_3.jpg') }}" alt="slider-image" class="img-responsive">
    </div>
</div>
<div class="container" style="margin-top:30px;">
    <div class="row">
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
                      <img src="images/cidm.gif" alt="" style="float:left;">
                      <h2>Higher connect rate.  More callbacks.</h2>
                      <h4>Use Caller ID Management to reach more customers</h4><br>
                      <p>If you were meeting a potential client for the first time, would you hand them
                            a business card that read <strong>UNAVAILABLE</strong> or <strong>UNKNOWN</strong>
                            ? Of course not. But that's what many call centers are displaying right now when they
                            use a tollfree number or unmanaged DID to contact their customers.<br><br>
                            Studies show that matching your CNAM display to your call campaign can increase
                            your answer rate. With Caller ID Management, you can keep your existing telephone
                            service providers yet have access to numbers from throughout the lower 48 states,
                            with CNAM tailored to your call campaign - <i>and you can even make money doing it.</i></p>
                      <p><span><a href="/services">read more</a></span></p>
                      <div class="clear"></div>
                </div>

                <div class="main_middle_right_sec_details">
                    <img src="images/img3.gif" alt="" style="float:left;">
                    <h2>Caller ID Management is the solution</h2>
                    <h4>Powered by Omega Services, a leader in CNAM provisioning since 2004</h4>

                    <div style="clear:both;" class="row" >

                        <div class="col-sm-3 main_middle_img"><img src="images/img5.gif" alt="" style="margin:10px 0px 0px 0px; width: 80%;">
                            <div class="clear"></div>
                        </div>

                        <div id="main_middle_right_ul" class="col-sm-9">
                            <ul>
                                <li><a>works with your existing local &amp; long distance providers</a></li>
                                <li><a>numbers available throughout the lower 48 states</a></li>
                                <li><a>lets you specify and manage your own Caller ID name display</a></li>
                                <li><a>provides dynamic user-directed return call routing</a></li>
                                <li><a>costs nothing to set up, maintain, or use</a></li>
                                <li><a>in fact, WE PAY YOU to use our service!</a></li>
                            </ul>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="clear"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>
    </div>
</div>

@stop



@section('footer_scripts')

    <script type="text/javascript">
        @if (isset($alert))
        $(document).ready(function() {
            alert('{{ $alert['msg'] }}');
        });
        @endif
    </script>

    <script type="text/javascript" src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/demo/js/scrollview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
@stop
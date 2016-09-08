@extends('app')
@section('header_styles')

    <!--page level css starts-->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar-master/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/demo/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <!--end of page level css-->

@stop


{{-- Page content --}}
<!-- Container Section Start -->
@section('content')
    <div class="clear"></div>
    <div class="container">
        <!-- About Us Section Start -->
        <div class="row">
            <!-- image Section Start -->
            <div class="services">
                <h2>
                    <label class="border-bottom">About Us
                    </label>
                </h2>
            </div>
            <div class="col-md-6">
                <div class="item martop1"><img src="{{ asset('assets/images/about_1.jpg') }}" alt="slider-image" class="img-responsive">
                </div>
            </div>
            <!-- //Image Section End -->
            <!-- About Us Section Start -->
            <div class="col-md-6">
                <div class="main_middle_right_details">
                   <img src="images/about.png" alt="" style="float:left;">
                   <h2>Omega Services, LLC</h2>
                   <h4>Pioneering CNAM solutions for the commercial dialing industry</h4><br>
                   <div>
                        <div>
                            <p>Since 2004, Omega Services has been a leader in customized CNAM and return call routing for the commercial dialing industry, developing solutions that provide additional revenue streams and allow clients to remain in compliance with an ever-evolving regulatory structure. <br>
                             <br>
                             With multiple carrier partners providing coverage throughout the entire lower 48 states and unparalleled agent support and customer service, Caller ID Management has become the solution of choice for a wide range of clients, from company in-house call centers to some of the nation's largest commercial dialing operations. <br>
                             <br>CNAM revenue is a fraction of a cent per dip generated, so a CNAM revenue solution is best for users with a high volume of outbound traffic terminating within the lower 48 states. Charity fundraising, political dialing, consumer surveys, collections, etc. are usually all good candidates for a CNAM revenue share program.<br>
                             <br>Omega continues to pursue innovation and is committed to working with our clients to develop solutions to fit to their dialing practices and business models.  If you are unsure whether Caller ID Management is right for you, please contact us for a free consultation.<br>
                             <br></p>
                        </div>

                   </div>
               </div>
            </div>
            <!-- //About Us Section End -->
        </div>
        <!-- //About Us Section End -->

    </div>

@stop

@section('footer_scripts')
    <!-- page level js -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar-master/bootstrap-progressbar.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/demo/js/scrollview.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/aboutus.js') }}" type="text/javascript"></script>
@stop




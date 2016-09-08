@extends('app')
@section('header_styles')

    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/contact.css') }}">
    <style>
    .sentmailshow{
    display: none;
    }
    </style>
    <!--end of page level css-->
@stop
@section('content')
<!--  Contact Form Section Start -->
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
                          <img src="images/contact.png" alt="" style="float:left;">
                          <h2>Contact Us </h2>
                	      <h4>Questions?  Comments?  Need more information?  Drop us a note.</h4><br>
                      <div>

                          <div class="contactemail">
                              <table width="97%">
                                <tbody><tr>
                                  <td width="145" align="left" valign="top" class="body" id="COMPANY"><strong>Company:</strong></td>
                                  <td width="280" align="left" valign="top">
                                  <input name="Company" type="text" size="30" id="company">
                                  </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="body" ><strong>Full Name:</strong></td>
                                  <td align="left" valign="top"><input name="Name" type="text" size="30" id="name"></td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="body" ><strong>Address: </strong></td>
                                  <td align="left" valign="top"><input name="Address" type="text" size="30" id="address"></td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="body" ><strong> Phone: </strong></td>
                                  <td align="left" valign="top"><input name="Phone" type="text" size="30" id="phone"></td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="body" ><strong> Email: </strong></td>
                                  <td align="left" valign="top"><input name="Email" type="text" size="30" id="email"></td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="body" ><strong> Comments: </strong></td>
                                  <td align="left" valign="top"><textarea name="comments" cols="55" rows="6" id="comment"></textarea></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td align="right">
                                  <input type="image" src="images/submit.png" name="B1" style="border:none; margin-right: 135px;"  id="contactemail">
                                  </td>
                                </tr>
                              </tbody></table>
                          </div>
                          <div class="sentmailshow" style="height: 300px; padding-top: 100px; padding-left: 100px;">
                                <h3 style="color: red">Your comment has been received. Thanks!</h3>
                          </div>
                          <div> <br>
                            <h4><img src="images/ico-email.png" alt="Email" width="20" height="16" hspace="2">Email: <a href="mailto:omega@calleridmanagement.com">omega@calleridmanagement.com</a></h4>
                              <h4><img src="images/ico-fax.png" alt="Fax" width="20" height="16" hspace="2">Tollfree Fax: (800) 558-1273</h4>
                              <h4><img src="images/dnc_icon.gif" alt="DNC" width="20" height="16" hspace="2">Do Not Call info: (716) 932-3240</h4><br><br>
                              <a href="http://twitter.com/intent/user?screen_name=OmegaSvcs"><img src="images/twitter-icon.png" alt="Twitter Follow" align="right" width="41" height="50" border="0" hspace="3"></a>&nbsp;&nbsp;
                              <a href="http://www.facebook.com/omegasvcs"><img src="images/facebook-icon.png" alt="Facebook Follow" align="right" width="41" height="50" border="0" hspace="3"></a>
                              <div align="right"><h6>Follow us on Facebook and Twitter!&nbsp;</h6></div>
                          </div>

                			</div>


                	            <div class="clear"></div>
                              </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
</div>
<!-- //Contact Form Section End -->
@stop
@section('footer_scripts')
<script type="text/javascript">
$(document).ready(function(){
  $(document).on("click", "#contactemail", function() {

    var name = $('#name').val();
    var company = $('#company').val();
    var address = $('#address').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var comment = $('#comment').val();

    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
      url: '{!! URL::route("contact.email") !!}',
      type: "post",
      data: {'name':name,'company':company,'address':address,'email':email, 'phone':phone,'comment':comment},
      success: function(data){
        $('.contactemail').css('display', 'none');
        $('.sentmailshow').css('display', 'block');
      }
    });
  });
});
</script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/gmap.js') }}"></script>
@stop
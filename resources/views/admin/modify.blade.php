@extends('admin.app')

@section('header_styles')
<link href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<style>
    .form-horizontal .form-group .col-sm-10 input{width:80%;}
    .form-horizontal .form-group .col-sm-10 select{width:80%;}
    #menu li.active2>a {
            background: #181b1f;
            color: #fff;}
</style>
@stop

@section('content')


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-crosshairs"></i>
                            Customer Search
                        </h3>
                        <span class="pull-right">
                            <i class="fa fa-fw fa-times removepanel clickable"></i>
                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal row" role="form" method="get" action="{!! URL::route('admin.modify') !!}" id="search_form">
                            <div class="col-sm-offset-2 col-sm-8">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="CustomerID : " id="customer_id" name="customer_id">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Company : " id="company" name="company">
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning cus-search" type="submit">Search</button>
                                        </span>
                                    </div>
                                </div>
                                 <div class="input-group mar-left">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if (isset($users))
            @if (count($users) > 1)
              <div class="col-md-12">
                 <div class="panel panel-primary">
                     <div class="panel-body">
                         <form class="form-horizontal row" role="form">
                             @foreach ($users as $company)
                                <a data-id="{{$company->ID}}" data-name="{!! $company->COMPANY !!}" class="company_button btn btn-success">{!! $company->COMPANY !!}</a>

				<br />
                             @endforeach
                         </form>
                     </div>
                 </div>
             </div>
            @endif
            @endif

            @if (isset($users))
            @if (count($users) == 1)
            @foreach ($users as $user)
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form class="form-horizontal row" role="form">
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ID:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="id" value="{!!$user->ID!!}" readonly="readonly"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">COMPANY:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="company1" value="{!!$user->COMPANY!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADDRESS:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="address" value="{!!$user->ADDRESS!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">CITY:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="city" value="{!!$user->CITY!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">STATE:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="state" value="{!!$user->STATE!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ZIP:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="zip" value="{!!$user->ZIP!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADMIN:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="admin" value="{!!$user->ADMIN!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PHONE:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="phone" value="{!!$user->PHONE!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">FAX:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="fax" value="{!!$user->FAX!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">EMAIL:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="email" value="{!!$user->EMAIL!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">SSN/EIN:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="ssn_ein" value="{!!$user->SSN_EIN!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT NAME:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="itname" value="{!!$user->ITNAME!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT PHONE:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="itphone" value="{!!$user->ITPHONE!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT FAX:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="itfax" value="{!!$user->ITFAX!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT EMAIL:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="itemail" value="{!!$user->ITEMAIL!!}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">AGENT:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="agent" value="{!!$user->AGENT!!}" readonly="readonly"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">RATE:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="rate" id="rate">
                                        @for ($i = 0; $i < 76; $i = $i+5)
                                        <option value="{{$i}}%">{{$i}}%</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            @if (isset($infos))
                            @foreach ($infos as $info)
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">UID:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="uid" value="{!!$info->uid!!}" readonly="readonly"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PASSWORD:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="password" value="{!!$info->pwd!!}" readonly="readonly" />
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ANI:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="ani" value="{!!$user->ANI!!}"/>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a id="change_cus" class="btn btn-success">change</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endif
        </div>

        <!--main content ends-->
    </section>
@stop

@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/custom_js/datatables.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    @if (isset($alert))
    $(document).ready(function() {
        alert('{{ $alert['msg'] }}');
    });
    @endif
    @if (isset($user))
    $(document).ready(function() {
        document.getElementById("rate").value = "{!!$user->RATE!!}";
    });
    @endif

    $(document).ready(function() {

       $('.company_button').click(function(){

            var companyName = $(this).attr('data-name');
            var companyId = $(this).attr('data-id');

            $('input#customer_id').val(companyId);
            $('form#search_form').submit();
        });
        $('a#change_cus').click(function(){

            var id = document.getElementById("id").value;
            var company = document.getElementById("company1").value;
            var address = document.getElementById("address").value;
            var city = document.getElementById("city").value;
            var state = document.getElementById("state").value;
            var zip = document.getElementById("zip").value;
            var admin = document.getElementById("admin").value;
            var phone = document.getElementById("phone").value;
            var fax = document.getElementById("fax").value;
            var email = document.getElementById("email").value;
            var ssn_ein = document.getElementById("ssn_ein").value;
            var itname = document.getElementById("itname").value;
            var itphone = document.getElementById("itphone").value;
            var itfax = document.getElementById("itfax").value;
            var itemail = document.getElementById("itemail").value;
            var agent = document.getElementById("agent").value;
            var rate = document.getElementById("rate").value;
            var uid = document.getElementById("uid").value;
            var password = document.getElementById("password").value;
            var ani = document.getElementById("ani").value;

            $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
              url: '{!! URL::route("cus.update") !!}',
              type: "post",
              data: {'id':id,
                        'company':company,
                        'address':address,
                        'city':city,
                        'state':state,
                        'zip':zip,
                        'admin':admin,
                        'phone':phone,
                        'fax':fax,
                        'email':email,
                        'ssn_ein':ssn_ein,
                        'itname':itname,
                        'itphone':itphone,
                        'itfax':itfax,
                        'itemail':itemail,
                        'agent':agent,
                        'rate':rate,
                        'uid':uid,
                        'password':password,
                        'ani':ani
                        },
              success: function(data){
                alert(data.msg);
              }
            });
          });
    });
</script>
@stop

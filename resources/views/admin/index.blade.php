@extends('admin.app')

@section('header_styles')
<link href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<style>
    .form-horizontal .form-group .col-sm-10 input{width:80%;}
    #menu li.active1>a {
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
                        <form class="form-horizontal row" role="form" method="get" action="{!! URL::route('admin.backend') !!}" id="search_form">
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
                                    <label for="input-text" class="control-label">{!!$user->ID!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">COMPANY:</label>
                                <div class="col-sm-10">

                                     <label for="input-text" class="control-label">{!!$user->COMPANY!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADDRESS:</label>
                                <div class="col-sm-10">
                                     <label for="input-text" class="control-label">{!!$user->ADDRESS!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">CITY:</label>
                                <div class="col-sm-10">
                                     <label for="input-text" class="control-label">{!!$user->CITY!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">STATE:</label>
                                <div class="col-sm-10">
                                     <label for="input-text" class="control-label">{!!$user->STATE!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ZIP:</label>
                                <div class="col-sm-10">
                                     <label for="input-text" class="control-label">{!!$user->ZIP!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADMIN:</label>
                                <div class="col-sm-10">
                                    <label class="control-label">{!!$user->ADMIN!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PHONE:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->PHONE!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">FAX:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->FAX!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">EMAIL:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->EMAIL!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">SSN/EIN:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->SSN_EIN!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT NAME:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->ITNAME!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT PHONE:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->ITPHONE!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT FAX:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->ITFAX!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT EMAIL:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->ITEMAIL!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">AGENT:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->AGENT!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">RATE:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$user->RATE!!}</label>
                                </div>
                            </div>
                            @if (isset($infos))
                            @foreach ($infos as $info)
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">UID:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$info->uid!!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PASSWORD:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label">{!!$info->pwd!!}</label>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ANI:</label>
                                <div class="col-sm-10">
                                    <label for="input-text" class="control-label" style="text-align: left;">
                                    @foreach ($masters as $key => $master)
                                    {!! $key == 0 ? '' : ',' !!}
                                    {!!$master->ANI!!}
                                    @endforeach
                                    </label>
                                </div>
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
    $(document).ready(function() {
       $('.company_button').click(function(){

            var companyName = $(this).attr('data-name');
            var companyId = $(this).attr('data-id');

            $('input#customer_id').val(companyId);
            $('form#search_form').submit();
        });

    });
</script>
@stop

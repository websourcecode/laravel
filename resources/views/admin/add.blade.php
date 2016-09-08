@extends('admin.app')

@section('header_styles')
<link href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<style>
#menu li.active3>a {
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
                            Add Customer
                        </h3>
                        <span class="pull-right">
                            <i class="fa fa-fw fa-times removepanel clickable"></i>
                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal row" name="add_form" role="form" action="{!! URL::route('add.newcustomer') !!}" onsubmit="return validate();" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter ID" name="id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">COMPANY</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter COMPANY" name="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADDRESS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter ADDRESS" name="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">CITY</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter CITY" name="city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">STATE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter STATE" name="state">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ZIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter ZIP" name="zip">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ADMIN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter ADMIN" name="admin">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PHONE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter PHONE" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">FAX</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter FAX" name="fax">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">EMAIL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter EMAIL" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">SSN/EIN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter SSN/EIN" name="ssn_ein">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT NAME</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter IT NAME" name="itname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT PHONE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter IT PHONE" name="itphone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT FAX</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter IT FAX" name="itfax">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">IT EMAIL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter IT EMAIL" name="itemail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">AGENT</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter AGENT" name="agent">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">AGENT</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="rate" id="rate">
                                        @for ($i = 0; $i < 76; $i = $i+5)
                                        <option value="{{$i}}%">{{$i}}%</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">UID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter UID" name="uid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">PASSWORD</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter PWD" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-text" class="col-sm-2 control-label">ANI</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter ANI" name="ani">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success add_new pull-right" type="submit" style="margin-right: 40%;">ADD CUSTOMER</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

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
    function validate() {

        if (document.forms["add_form"]["id"].value == null || document.forms["add_form"]["id"].value == "") {
            alert("ID must be filled out");
            return false;
        }
        if (document.forms["add_form"]["uid"].value == null || document.forms["add_form"]["uid"].value == "") {
            alert("UID must be filled out");
            return false;
        }
        if (document.forms["add_form"]["password"].value == null || document.forms["add_form"]["password"].value == "") {
            alert("PASSWORD must be filled out");
            return false;
        }

        return true;
    }
</script>
@stop

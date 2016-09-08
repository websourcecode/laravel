@extends('dataview.app')

@section('header_styles')
    <link href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
<div class="container">
    <h2>{{ $masters[0]->COMPANY }}</h2>
    <div class="panel panel-primary">
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                    <tr class="table-title">
                      <td>PLAT</td>
                      <td>STATE</td>
                      <td>NUMBER</td>
                      <td>CNAM</td>
                      <td>RING-TO</td>
                      <td>SUBMIT</td>
                      <td>NOTE</td>
                      
                    </tr>
                </thead>
                <tbody>

                    @foreach($masters as $master)
                        <tr class="master-data">
                          <td class="platform"> {{ $master->PLATFORM }} </td>
                          <td class="state"> {{ $master->STATE }} </td>
                          <td class="ani"> {{ $master->ANI }} </td>
                          <td> <input type="text" value="{{ $master->CNAM }}" name="CNAM" class="c_nam" /> </td>
                          <td> <input type="text" value = " {{ $master->RTN }}" name="RTN" class="rtn"/> </td>
                          <td>
                               <button id="change_did" class="btn btn-success">change</button>
                          </td>
                          <td class="note" > {{ $master->MEMO }} </td>
                          
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

     <P>
        <b>NOTICE: As covered in the Master Services Agreement, you agree to use this service in a manner that is in full
         compliance with all applicable laws and regulations. This includes, but is not limited to, providing a VALID number
          in the Service Number field so that any return calls are properly routed to you or your client. This number should
           accept calls with either a live agent or a recorded message with identifying information and a method for the caller
            to register his number for your Do Not Call list. By using this service, you consent that Omega Services, LLC will
             release your company name and contact information in the course of responding to individual complaints,
              carrier requests or official inquiries.
        </b>
    </P>
</div>

@stop
<style>
#topmenu li a.admin {
    color:#000;
    background:url(../images/topmenuleft.gif) left bottom no-repeat;
}

#topmenu li a.admin span {
    background:url(../images/topmenuright.gif) right  bottom no-repeat;
}
</style>
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/custom_js/datatables.js') }}" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(document).on("click", "button#change_did", function() { 

    var ani = $(this).parents('tr').find('.ani').html();
    var c_nam = $(this).parents('tr').find('.c_nam').val();
    var rtn = $(this).parents('tr').find('.rtn').val();


    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
      url: '{!! URL::route("did.update") !!}',
      type: "post",
      data: {'ani':ani,'c_nam':c_nam,'rtn':rtn},
      success: function(data){
        alert(data.msg);
      }
    });
  });
});
</script>@stop

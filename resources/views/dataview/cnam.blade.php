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

                      <td>NUMBER</td>

                      <td>CNAM</td>

                      <td>VERIFY</td>

                      <td>CURRENTLY DISPLAYING</td>



                    </tr>

                </thead>

                <tbody>



                    @foreach($masters as $master)

                        <tr class="master-data">

                          <td class="ani"> {{ $master->ANI }} </td>

                          <td id="cnam"> {{ $master->CNAM }} </td>

                          <td>

                               <button id="verify" class="btn btn-success">VERIFY CNAM</button>

                          </td>

                          <td class="display" >  </td>



                        </tr>

                    @endforeach

                </tbody>



            </table>

        </div>

    </div>



     <P>

        <b>NOTICE: The "Verify CNAM" button performs a *live* CNAM lookup.

         The displayed result is the current CNAM stored with TNSI or SNET.

          If this value does not match your recent assignment, keep in mind that CNAM changes can take up

           to 8 hours after submission to process. If you still do not see your CNAM assignment displayed after that time, please

            <a href="/contact" style="color:#337ab7">contact Omega Services</a>.

        </b>

    </P>

</div>



@stop



@section('footer_scripts')

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>

<script src="{{ asset('assets/js/custom_js/datatables.js') }}" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){

 
$(document).on("click", "button#verify", function() {



    var ani = $(this).parents('tr').find('.ani').html();

    var ani1 = ani.trim();

    var url = "https://dip.cidname.com/" +ani1 + "/d2b9d70450fdcc2348f9b22147bfecc553911e42083f7&output=raw&reply=0";

    var objButton = $(this);

    $.ajax({

        headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },

      url: '{!! URL::route("cnam.verify") !!}',

      type: "post",

      data: {'url':url},

      success: function(data){

        objButton.parents('tr').find('.display').html(data.status);

      }

    });

  });

});

</script>





@stop


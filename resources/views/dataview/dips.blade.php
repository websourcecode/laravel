@extends('dataview.app')



@section('header_styles')


<link href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />

<style>

table {

  color:#000000;

  font-size: 11px;

}
.chr_overflow{
 
  overflow:auto;
}


table tr td, table tr th {

    padding: 8px 3px 8px 3px !important;

}

</style>

@stop



@section('content')

<div class="suckertreemenu" align="left" style="margin-top:20px;">

    <ul id="treemenu1">

        <li><a>ARCHIVED</a></li>

        <?php

            $year =  date("Y")-1;

	    if ( date("m") * 1 < 4) $year --;

            $month =  date('m', strtotime(date('Y-m')." -15 month"));

            for ($i = 0; $i < 15; $i ++) {

                $month ++;

                if ($month == 13) {

                    $month = 1;

                    $year ++;

                }

        ?>

        <li><a href="{!! URL::route('dips', array('month'=> $month, 'year' => $year)) !!}" class="month-data" >{!! DateTime::createFromFormat('!m', $month)->format('M')." ".$year !!}</a></li>

        <?php





         }?>

    </ul>



</div>

<div  class="payment-title">

 <h3>{{ $master->COMPANY }}- {!! DateTime::createFromFormat('!m', $month1)->format('F')." ".$year1 !!}</h3>

</div>





<div class="panel panel-primary">

    <div class="panel-body chr_overflow">

        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>

                <tr>

                    <td>NUMBER</td>

                    <td>ST</td>

                    <td>PL</td>

                    <td>MEMO</td>

                    <td>ADMIN</td>

                    <td>TOTAL</td>

                    <td>01</td>

                    <td>02</td>

                    <td>03</td>

                    <td>04</td>

                    <td>05</td>

                    <td>06</td>

                    <td>07</td>

                    <td>08</td>

                    <td>09</td>

                    <td>10</td>

                    <td>11</td>

                    <td>12</td>

                    <td>13</td>

                    <td>14</td>

                    <td>15</td>

                    <td>16</td>

                    <td>17</td>

                    <td>18</td>

                    <td>19</td>

                    <td>20</td>

                    <td>21</td>

                    <td>22</td>

                    <td>23</td>

                    <td>24</td>

                    <td>25</td>

                    <td>26</td>

                    <td>27</td>

                    <td>28</td>

                    <td>29</td>

                    <td>30</td>

                    <td>31</td>

                </tr>

                <tr class="total-dips">

                    <td align="center">TOTAL_DIPS</td>

                    <td align="center"></td>

                    <td  align="center"></td>

                    <td align="right"></td>

                    <td  align="right"></td>

                    <td align="right">{!!$total->total!!}</td>

                    <td align="right">{!!$total->d01!!}</td>

                    <td align="right">{!!$total->d02!!}</td>

                    <td align="right">{!!$total->d03!!}</td>

                    <td align="right">{!!$total->d04!!}</td>

                    <td align="right">{!!$total->d05!!}</td>

                    <td align="right">{!!$total->d06!!}</td>

                    <td align="right">{!!$total->d07!!}</td>

                    <td align="right">{!!$total->d08!!}</td>

                    <td align="right">{!!$total->d09!!}</td>

                    <td align="right">{!!$total->d10!!}</td>

                    <td align="right">{!!$total->d11!!}</td>

                    <td align="right">{!!$total->d12!!}</td>

                    <td align="right">{!!$total->d13!!}</td>

                    <td align="right">{!!$total->d14!!}</td>

                    <td align="right">{!!$total->d15!!}</td>

                    <td align="right">{!!$total->d16!!}</td>

                    <td align="right">{!!$total->d17!!}</td>

                    <td align="right">{!!$total->d18!!}</td>

                    <td align="right">{!!$total->d19!!}</td>

                    <td align="right">{!!$total->d20!!}</td>

                    <td align="right">{!!$total->d21!!}</td>

                    <td align="right">{!!$total->d22!!}</td>

                    <td align="right">{!!$total->d23!!}</td>

                    <td align="right">{!!$total->d24!!}</td>

                    <td align="right">{!!$total->d25!!}</td>

                    <td align="right">{!!$total->d26!!}</td>

                    <td align="right">{!!$total->d27!!}</td>

                    <td align="right">{!!$total->d28!!}</td>

                    <td align="right">{!!$total->d29!!}</td>

                    <td align="right">{!!$total->d30!!}</td>

                    <td align="right">{!!$total->d31!!}</td>

                </tr>

            </thead>

            <tbody>



                @foreach($results as $result)

                    <tr>

                        <td align="center">{!!$result->ANI!!}</td>

                        <td align="center">{!!$result->STATE!!}</td>

                        <td  align="center">{!!$result->PLATFORM!!}</td>

                        <td align="right">{!!$result->MEMO!!}</td>

                        <td  align="right">{!!$result->ADMIN!!}</td>

                        <td align="right">{!!$result->TOTAL!!}</td>

                        <td align="right">{!!$result->D01!!}</td>

                        <td align="right">{!!$result->D02!!}</td>

                        <td align="right">{!!$result->D03!!}</td>

                        <td align="right">{!!$result->D04!!}</td>

                        <td align="right">{!!$result->D05!!}</td>

                        <td align="right">{!!$result->D06!!}</td>

                        <td align="right">{!!$result->D07!!}</td>

                        <td align="right">{!!$result->D08!!}</td>

                        <td align="right">{!!$result->D09!!}</td>

                        <td align="right">{!!$result->D10!!}</td>

                        <td align="right">{!!$result->D11!!}</td>

                        <td align="right">{!!$result->D12!!}</td>

                        <td align="right">{!!$result->D13!!}</td>

                        <td align="right">{!!$result->D14!!}</td>

                        <td align="right">{!!$result->D15!!}</td>

                        <td align="right">{!!$result->D16!!}</td>

                        <td align="right">{!!$result->D17!!}</td>

                        <td align="right">{!!$result->D18!!}</td>

                        <td align="right">{!!$result->D19!!}</td>

                        <td align="right">{!!$result->D20!!}</td>

                        <td align="right">{!!$result->D21!!}</td>

                        <td align="right">{!!$result->D22!!}</td>

                        <td align="right">{!!$result->D23!!}</td>

                        <td align="right">{!!$result->D24!!}</td>

                        <td align="right">{!!$result->D25!!}</td>

                        <td align="right">{!!$result->D26!!}</td>

                        <td align="right">{!!$result->D27!!}</td>

                        <td align="right">{!!$result->D28!!}</td>

                        <td align="right">{!!$result->D29!!}</td>

                        <td align="right">{!!$result->D30!!}</td>

                        <td align="right">{!!$result->D31!!}</td>

                    </tr>

                @endforeach



            </tbody>

        </table>

    </div>

</div>



@stop



@section('footer_scripts')



<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>

<script src="{{ asset('assets/js/custom_js/datatables.js') }}" type="text/javascript"></script>

<script type="text/javascript">
 

$(document).ready(function(){

var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0) // If Internet Explorer, return version number
    {

       $("div").removeClass("chr_overflow");
    }
   
    $('.month-data').click(function(){



        var month = $(this).attr('data-month')

        var year = $(this).attr('data-year')



        $.ajax({

            headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

          url: '{!! URL::route("dip.reload") !!}',

          type: "post",

          data: {'month':month,'year':year},

          success: function(data){



          }

        });

    });

    $( "td" ).removeClass( "sorting" );

});

</script>

@stop


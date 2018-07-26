@extends('layouts.app')


@section('content')
<div class="page-content row">
<div class="page-content-wrapper m-t">

<?php


 ?>
<div class="sbox" style="border-top: none">
    <div class="sbox-title"> <h3>DASHBOARD </h3></div>
    <div class="sbox-content">
    <div class="ribon-sximo">
        <section >



        </section>
    </div>




    </div>
</div>
</div>



</div>
</div>

<script type="text/javascript" src="{{ asset('sximo5/js/plugins/jquery.sparkline.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1C84C6',
                    fillColor: "transparent"
                });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();

       })
    </script>

@stop

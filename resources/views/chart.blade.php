@extends('layouts.app')

@section('content')
    
    <div class='chart-bg min-width'>
        <div class='chart-intro text-center'>
            <img src="{{asset('storage/icon_computer.png')}}" alt="">
            <h4>巴士時空軌跡圖</h4>
            <span>以時空軌跡圖多方面檢視<br>巴士營運及班距監控巴士司機的駕駛操作</span>
            {!! Form::open(['url' => '/chart/submit', 'name' => 'chart-form', 'onsubmit' => 'return form_check()']) !!}
                <div class='chart-form margin-top'>
                    <div>
                        <h6>查詢日期與班次</h6>
                        <span>請輸入至少一組日期與巴士路線</span>
                    </div>

                    <div class='container'>
                        <div class='row'>
                            <div class='col-md'>
                                路線一
                                <div class='row' style='padding:10px 0 10px 0;'>
                                    <div class='col-md'>
                                        {{Form::text('first-date', '', ['class' => 'form-control input-type', 'type' => 'text', 'id' => 'first-datepicker', 'placeholder' => '日 期', 'autocomplete'=> 'off'])}}
                                    </div>
                                    <div class='col-md'>
                                        {{Form::text('first-bus', '', ['class' => 'form-control input-type left-input', 'placeholder' => '巴 士 路 線'])}}
                                    </div>
                                </div>
                            </div>
                            <div class='col-md'>
                                路線二
                                <div class='row' style='padding:10px 0 10px 0;'>
                                    <div class='col-md'>
                                    {{Form::text('second-date', '', ['class' => 'form-control input-type', 'type' => 'text', 'id' => 'second-datepicker', 'placeholder' => '日 期', 'autocomplete'=> 'off'])}}
                                    </div>
                                    <div class='col-md'>
                                        {{Form::text('second-bus', '', ['class' => 'form-control input-type left-input', 'placeholder' => '巴 士 路 線'])}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        {{Form::submit('確 認', ['class' => 'btn btn-primary btn-init', 'style' => 'margin-top:10px'])}}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>

        <div class='chart-result'>
            <canvas id="myChart"  style='idth:100% !important;height:100% !important;'></canvas>
        </div>

        <footer class='margin-top'>a</footer>
    </div>

    


    {!! Charts::scripts() !!}
    <script>
    function form_check() {
        var fdate = document.forms["chart-form"]["first-date"].value;
        var fbus = document.forms["chart-form"]["first-bus"].value;
        
        var sdate = document.forms["chart-form"]["second-date"].value;
        var sbus = document.forms["chart-form"]["second-bus"].value;
        
        if (fdate == "" && fbus == "") {
            if (sdate == "" && sbus == "") {
                alert("請輸入至少一組日期與巴士路線");
                return false;
            }
        }
    }

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    </script>
@endsection
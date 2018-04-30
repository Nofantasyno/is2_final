<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Final</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="col-md-12">
            <div style="height:385px; width: 770px;"><canvas id="myChart" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
            <div id="departments">
                <ul>@foreach($emps as $emp)
                        <li id="department" value="{{round($emp->average_salary)}}" name="{{$emp->dept_name}}">{{$emp->dept_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="/js/salaryByDeps.js"></script>
</html>

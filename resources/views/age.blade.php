<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Final</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="col-md-12">
            <div style="height:385px; width: 770px;"><canvas id="myChart" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                <div id="ages">
                    <param name="Youngest" value="{{$youngest->age}}">
                    <param name="Oldest" value="{{$oldest->age}}">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="/js/age.js"></script>
</html>

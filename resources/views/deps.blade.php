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
                    <ul>
                        @foreach($departments as $department)
                            <li><a href="{{action('NewController@deptEmp', $department->dept_no)}}"> {{$department->dept_name}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

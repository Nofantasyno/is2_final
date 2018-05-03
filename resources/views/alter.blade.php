<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Final</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    Sort:
                    <a href="/?sort=asc">Ascending</a>
                    <a href="/?sort=desc">Descending</a>
                </div>
            </div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Manager</th>
                    <th>Salary</th>
                </tr>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                        <td>{{$employee->title}}</td>
                        <td>{{$employee->dept_name}}</td>
                        <td>{{$employee->first_name}}</td>
                        <td>{{$employee->salary}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">{{$employees->links()}}</div>
    </div>
</div>
</body>
</html>

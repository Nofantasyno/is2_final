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
            <div class="row">{{$dept->dept_name}}</div>
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
                        <td>{{$employee->empTitle->first->title->title}}</td>
                        <td>{{$employee->empDept->last()->department->dept_name}}</td>
                        <td>{{$employee->empDept->last()->department->deptManager->last()}}</td>
                        <td>{{$employee->empSalary->last()->salary}}</td>

                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">{{$employees->links()}}</div>
    </div>
</div>
</body>
</html>

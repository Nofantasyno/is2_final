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
                <p>Department: {{$department->dept_name}}</p>
                <p>Head of department: {{$department->deptManager->emp->first_name}} {{$department->deptManager->emp->last_name}}</p>
            </div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Salary</th>
                </tr>
                @foreach($deptEmps as $deptEmp)
                    <tr>
                        <td>{{$deptEmp->deptEmp->first_name}} {{$deptEmp->deptEmp->last_name}}</td>
                        <td>{{$deptEmp->deptEmp->empTitle->first()->title}}</td>
                        <td>{{$deptEmp->deptEmp->empSalary->salary}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">{{$deptEmps->links()}}</div>
    </div>
</div>
</body>
</html>

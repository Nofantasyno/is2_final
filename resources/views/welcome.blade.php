<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Final</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="col-md-12">
                    <div class="row">
                    </div>
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Department</th>
                                <th>Manager</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr id="{{$employee->empDept->department->dept_no}}">
                                <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                                <td>{{$employee->empTitle->first()->title}}</td>
                                <td>{{$employee->empDept->department->dept_name}}</td>
                                <td>{{$employee->empDept->department->deptManager->last()->emp->last_name}} {{$employee->empDept->department->deptManager->last()->emp->first_name}}</td>
                                <td>{{$employee->empSalary->last()->salary}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Department</th>
                                <th>Manager</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="/js/DataTable.js"></script>
</html>

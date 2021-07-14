<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header shadow-lg">
                        <h3>Work Process </h3>
                        <span class="badge bg-success">Total Work Unit: {{$metrics['totalWorkload']}} Unit</span>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <th>Name-Surname</th>
                                    <th>Unit</th>
                                    <th>Time (Week)</th>
                                    <th>Work Done</th>
                                </thead>
                                <tbody>
                                @foreach($allEmployees as $key => $value)
                                    <tr>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['unit']}}</td>
                                        <td>{{$metrics['totalFinishWeek']}} week</td>
                                        <td>{{$value['unit'] == $metrics['highPerformanceEmployee'] ? ($value['unit'] * $metrics['totalWeeklyHour'] * $metrics['totalFinishWeek']) + $metrics['leftOverTime'] : ($value['unit'] * $metrics['totalWeeklyHour'] * $metrics['totalFinishWeek'])}} Unit</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

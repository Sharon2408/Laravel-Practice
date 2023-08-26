@extends('navbar')
@section('content')
@section('title')
    Compact Function
@endsection

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>CG_VAK TRAINEES IT Department</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($emp3 as $emp3)
                        <tbody>
                            <td>{{ $emp3->name }}</td>
                            <td>{{ $emp3->department }}</td>
                            <td>{{ $emp3->city }}</td>
                            <td>{{ $emp3->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
                <h1>CG_VAK TRAINEES HR Department</h1>
                <h2>Using Compact Function</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($emp4 as $emp4)
                        <tbody>
                            <td>{{ $emp4->name }}</td>
                            <td>{{ $emp4->department }}</td>
                            <td>{{ $emp4->city }}</td>
                            <td>{{ $emp4->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
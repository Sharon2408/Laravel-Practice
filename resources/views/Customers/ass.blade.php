@extends('navbar')
@section('content')
@section('title')
    Associative Array
@endsection

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>CG_VAK TRAINEES IT Department</h1>
                <h2>Using Associative array</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($emp1 as $emp1)
                        <tbody>
                            <td>{{ $emp1->name }}</td>
                            <td>{{ $emp1->department }}</td>
                            <td>{{ $emp1->city }}</td>
                            <td>{{ $emp1->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
                <h1>CG_VAK TRAINEES HR Department</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($emp2 as $emp2)
                        <tbody>
                            <td>{{ $emp2->name }}</td>
                            <td>{{ $emp2->department }}</td>
                            <td>{{ $emp2->city }}</td>
                            <td>{{ $emp2->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
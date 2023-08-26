@extends('navbar')
@section('content')
@section('title')
    Cgvak
@endsection

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>CG_VAK TRAINEES</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($emp as $emp)
                        <tbody>
                            <td>{{ $emp->name }}</td>
                            <td>{{ $emp->department }}</td>
                            <td>{{ $emp->city }}</td>
                            <td>{{ $emp->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
@endsection

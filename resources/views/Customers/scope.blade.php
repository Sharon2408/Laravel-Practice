@extends('navbar')
@section('content')
@section('title')
    Scope Array
@endsection

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>CG_VAK TRAINEES IT Department</h1>
                <h2>From Model with id</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($id as $id)
                        <tbody>
                            <td>{{ $id->name }}</td>
                            <td>{{ $id->department }}</td>
                            <td>{{ $id->city }}</td>
                            <td>{{ $id->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
                <h2>From Model with name</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($name as $name)
                        <tbody>
                            <td>{{ $name->name }}</td>
                            <td>{{ $name->department }}</td>
                            <td>{{ $name->city }}</td>
                            <td>{{ $name->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
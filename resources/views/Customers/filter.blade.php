@extends('navbar')
@section('content')
@section('title')
    Filter
@endsection
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>CG_VAK TRAINEES</h1>
                <h1>Filtering Record From Controller</h1>
<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>City</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>
                    @foreach ($empdet as $empdet)
                        <tbody>
                            <td>{{ $empdet->name }}</td>
                            <td>{{ $empdet->department }}</td>
                            <td>{{ $empdet->city }}</td>
                            <td>{{$empdet->contact_no }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
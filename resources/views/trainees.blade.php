@extends('navbar')
@section('content')
@section('title')
Trainees
@endsection

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center bg-primary">
                <h1>G2 TRAINEES</h1>
                <ul>
                    @foreach ($train as $x)
                        <li>
                            {{ $x }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

@endsection
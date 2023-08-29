@extends('navbar')

@section('content')
    <style>
        #image {
            background-image: url(https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        body,
        html {
            height: 100%;
        }
    </style>
    <div class="container-fluid" id="image">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center" style="font-family:Pacifico;font-size: 32px;">Laravel</h1>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

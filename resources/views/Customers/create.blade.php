@extends('navbar')
@section('content')
    <h2 class="text-center"> Add New Customer </h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 border border-dark rounded-3 shadow-lg">
                <form action="/Customers" method="post">
                    @csrf
                    @include('Customers/form')
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection

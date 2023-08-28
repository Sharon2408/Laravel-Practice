@extends('navbar')
@section('content')
@section('title')
    Edit
@endsection
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center"> Update Details of {{ $employee->name }} </h4>
        <div class="col-5 border border-dark rounded-3 shadow-lg">
            <form action="/Customers/{{ $employee->id }}" method="post">
                @method('PATCH')
                @include('Customers/form')
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Customer</button>
                    <br><br>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection

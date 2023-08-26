@extends('navbar')
@section('content')
@section('title')
Edit
@endsection
 <h2> Edit Details of {{$employees->name}} </h2> 
  <div class="py-3">
    <form action="/Customers/{{$employees->emp_id}}" method="post">
    @method('PATCH')
    {{-- @include('Customers/form') --}}
    <div class="mb-3 mt-3  col-sm-6">  
       <button type="submit" class="btn btn-primary">Update Customer</button>
     </div>  
@csrf
</form> 
</div>


@endsection
@extends('navbar')
@section('content')
@section('title')
CRUD
@endsection
<h1></h1>
<div class="container">
    <div class="row">
        <div class="col">
        <a class="btn btn-primary" href="/Customers/form">Create</a>
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>
                        <td>Employee ID</td>
                        <td>Employee Name</td>
                        <td>Department</td>
                        <td>City</td>
                        <td>Company</td>
                        <td>Working Status</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emp as $emp)
                        <tr>
                            <td>{{ $emp->emp_id }}</td>
                            <td>{{$emp->name}}</td>
                            <td>{{$emp->department}}</td>
                            <td>{{$emp->city}}</td>
                            <td>{{$emp->company_id}}</td>
                            <td>{{$emp->active}}</td>
                            <td class="text-center"><a class="btn btn-info" href="/Customers/{{$emp->emp_id}}/edit">Edit</a></td>
                            <td class="text-center"><a class="btn btn-danger" href="" >Delete</a></td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

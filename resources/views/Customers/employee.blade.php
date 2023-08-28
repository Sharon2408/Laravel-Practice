@extends('navbar')
@section('content')
@section('title')
    CRUD
@endsection
<h1></h1>
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/Customers/create">Add Employee</a>
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
                            <td>{{ $emp->id }}</td>
                            <td>{{ $emp->name }}</td>
                            <td>{{ $emp->department }}</td>
                            <td>{{ $emp->city }}</td>
                            <td>{{ $emp->company_id }}</td>
                            <td>{{ $emp->active }}</td>
                            <td class="text-center"><a class="btn btn-info"
                                    href="/Customers/{{ $emp->id }}/edit">Edit</a></td>
                            <td class="text-center">
                                <form action="/Customers/{{ $emp->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

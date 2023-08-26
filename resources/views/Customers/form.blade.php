@extends('navbar')
@section('content')
@section('title')
Form
@endsection
<div class="container">
    <form action="/Customers" method="post">
        @csrf
        <div class="row">
            <div class="col-5">

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Employee Name:</label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="name"
                        autocomplete="off" value="{{ old('name')  }}">
                    <small class="text-danger"> {{ $errors->first('name') }}</small>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="" placeholder="Department" name="department"
                        autocomplete="off" value="{{ old('department') }}">
                    <small class="text-danger"> {{ $errors->first('department') }}</small>
                </div>
                <div class="mb-3 mt-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="" placeholder="City" name="city"
                        autocomplete="off" value="{{ old('city') }}">
                    <small class="text-danger"> {{ $errors->first('city') }}</small>
                </div>
                <div class="mb-3">
                    <label for="contact_no" class="form-label">contact No:</label>
                    <input type="text" class="form-control" id="" placeholder="Contact No."
                        name="contact_no" value="{{ old('contact_no') }}">
                    <small class="text-danger"> {{ $errors->first('contact_no') }}</small>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="company_id">Select Company</label>
                    <select class="form-control" name="company_id" id="">
                        <option value="">--Select</option>
                        @foreach ($company as $company)
                            <option value="{{ $company->company_id }}">{{ $company->company_name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <small class="text-danger"> {{ $errors->first('company_id') }}</small>
                    <br>
                    <div class="mb-3">
                        <label for="active" class="form-label">Working Status</label>
                        <select name="active" class="form-control" id="">
                            <option value="">--Select</option>
                            <option value="1">Currently Working</option>
                            <option value="0">Not Working</option>
                        </select>
                        <br>
                        <small class="text-danger"> {{ $errors->first('active') }}</small>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
    </form>
</div>

@endsection


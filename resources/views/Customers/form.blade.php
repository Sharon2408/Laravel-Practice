
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3 mt-3">
             @csrf
                <label for="name" class="form-label">Employee Name:</label>
                <input type="text" class="form-control" id="" placeholder="Name" name="name"
                    autocomplete="off" value="{{ old('name') ?? $employee->name }}">
                 <small class="text-danger"> {{ $errors->first('name') }}</small>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="" placeholder="Department" name="department"
                    autocomplete="off" value="{{ old('department') ?? $employee->department }}">
                <small class="text-danger"> {{ $errors->first('department') }}</small>
            </div>
            <div class="mb-3 mt-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="City" name="city"
                    autocomplete="off" value="{{ old('city') ?? $employee->city }}">
                <small class="text-danger"> {{ $errors->first('city') }}</small>
            </div>
            <div class="mb-3">
                <label for="contact_no" class="form-label">Contact No:</label>
                <input type="text" class="form-control" id="" placeholder="Contact No." name="contact_no"
                    value="{{ old('contact_no') ?? $employee->contact_no }}">
                <small class="text-danger"> {{ $errors->first('contact_no') }}</small>
            </div>
            <div class="mb-3">
                <label class="form-label" for="company_id">Select Company</label>
                <select class="form-control" name="company_id" id="">
                    @foreach ($employee->getCompanyid() as $companykey => $companyvalue)
                        <option value="{{$companykey}}" {{$employee->company_id == $companyvalue ? 'selected' : ''}} >{{ $companyvalue }}</option>
                    @endforeach
                </select>
                <small class="text-danger"> {{ $errors->first('company_id') }}</small>
                <br>
                <div class="mb-3">
                    <label for="active" class="form-label">Working Status</label>
                    <select name="active" class="form-control" id="">
                       @foreach($employee->getActive() as $activekey => $activevalue)
                        <option value="{{$activekey}}" {{$employee->active == $activevalue ? 'selected' : ''}}>{{$activevalue}}</option>
                       @endforeach
                    </select>
                    <small class="text-danger"> {{ $errors->first('active') }}</small>
                </div>
            </div>
        </div>
    </div>
   

   

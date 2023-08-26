<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Customers;
use App\Models\Employee;
use App\Models\Company;

class CustomersController extends Controller
{
    public function index()
    {
        // $cgtrainees=["Arun","Darshan","Srikanth","Hemanth","Harita","Harishmitha","Yamini","Vignesh","Siva","Karthikeyan","Harshan"];
        $emp = Employee::all();
        // dd($emp);
        return view('Customers/cgvak', ['emp' => $emp]);
    }

    public function filterRecords()
    {
        $empdet = Employee::where('name', 'Peter')->get();
        return view('Customers/filter', ['empdet' => $empdet]);
    }

    public function assArray()
    {
        $emp1 = Employee::where('department', 'IT')->get();
        $emp2 = Employee::where('department', 'HR')->get();
        return view('Customers/ass', ['emp1' => $emp1, 'emp2' => $emp2]);
    }

    public function compArray()
    {
        $emp3 = Employee::where('department', 'IT')->get();
        $emp4 = Employee::where('department', 'HR')->get();
        return view('Customers/comp', compact('emp3', 'emp4'));
    }

    public function company()
    {
        $company = Company::all();
        $emp = Employee::all();
        return view('Customers/form', compact('company','emp'));
    }

    public function employee(){
        $emp = Employee::all();
        return view('Customers/employee', compact('emp'));
    }
    public function scope()
    {
        $id = Employee::id()->get();
        $name = Employee::name()->get();
        return view('Customers/scope', compact('id', 'name'));
    }

    public function show(Employee $employee){

        return view ('Customers/show',compact('employee'));
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required | min:3',
            'department' => 'required',
            'city' => 'required',
            'contact_no' => 'required',
            'company_id' => 'required',
            'active' => 'required',
        ]);

       
        $emp = Employee::create($data);
       return redirect('Customers/employee');
       
 // $emp8 = new Employee();
        // $emp8->name = request('name');
        // $emp8->department = request('department');
        // $emp8->city = request('city');
        // $emp8->contact_no = request('contact_no');
        // $emp8->company_id = request('company_id');
        // $emp8->active = request('active');
        // $emp8->save();
    }
}
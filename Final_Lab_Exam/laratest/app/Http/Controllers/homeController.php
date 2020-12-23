<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use App\Employee;
use App\Job;

class homeController extends Controller
{

    function index(Request $req){
        
        $name = $req->session()->get('username');
        if($name == "admin"){
            return view('home.adminHome', compact('name'));
        }
        else
        {
            return view('home.employeeHome', compact('name'));
        }
        //return view('home.index', compact('name'));
    }

    public function create(){
        return view('home.create');
    }

    public function createJob(){
        return view('home.createJob');
    }

    public function store(UserRequest $req){
        
        $employee = new Employee();
        $employee->username         = $req->username;
        $employee->password         = $req->password;
        $employee->name             = $req->name;
        $employee->company_name     = $req->company_name;
        $employee->contact_number   = $req->contact_number;
        if($employee->save()){
            return redirect()->route('home.userlist');
        }else{
            return back();
        }
    }

    public function userlist(){
        $employees  = Employee::all();
        return view('home.userlist')->with('employees', $employees);
    }
    public function jobList(){
        $jobs  = Job::all();
        return view('home.jobList')->with('jobs', $jobs);
    }

    public function show($id){
        $employee = Employee::find($id);   
        return view('home.show', $employee);
    }

    public function edit($id){
        $employee = Employee::find($id);       
        return view('home.edit', $employee);
    }

    public function update($id, Request $req){

        $employee = Employee::find($id); 
        $employee->username         = $req->username;
        $employee->password         = $req->password;
        $employee->name             = $req->name;
        $employee->company_name     = $req->company_name;
        $employee->contact_number   = $req->contact_number;
        $employee->save();

        return redirect()->route('home.userlist');
    }

    public function delete($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function destroy($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }
}

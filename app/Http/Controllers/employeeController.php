<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Employee.index', [
            'employees' => employee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'name' => 'required | min:5',
            'department' => 'required | min: 1',
            'job_title' => 'required | min: 2' 
        ]);
        $employee = new employee();
        $employee->name = $request->get('name');
        $employee->dpi = $request->get('dpi');
        $employee->department = $request->get('department');
        $employee->job_title = $request->get('job_title');
        $employee->inmediate_boss = $request->get('inmediate_boss');
        $employee->save();

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('Employee.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validaData = $request->validate([
            'name' => 'required | min:5',
            'department' => 'required | min: 1',
            'job_title' => 'required | min: 2' 
        ]);
        $employee = new employee();
        $employee->name = $request->get('name');
        $employee->dpi = $request->get('dpi');
        $employee->department = $request->get('department');
        $employee->job_title = $request->get('job_title');
        $employee->inmediate_boss = $request->get('inmediate_boss');
        $employee->save();

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/employees');
    }

    public function confirmDelete($id){
        $employee = Employee::findOrFail($id);
        return view('Employee.confirmDelete', [
            'employee' => $employee
        ]);
    }
    
}

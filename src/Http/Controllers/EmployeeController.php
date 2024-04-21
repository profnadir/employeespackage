<?php

namespace Profnadir\Employeespackage\Http\Controllers;

use Profnadir\Employeespackage\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(config('employeespackage.paginate'));

        return view('employeespackage::employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employeespackage::employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'ville'=> 'required',
            'company' => 'required',
            'salaire' => 'required'
        ]);

       Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employe Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employeespackage::employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employeespackage::employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'ville'=> 'required',
            'company' => 'required',
            'salaire' => 'required'
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employe Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        
        return redirect()->route('employees.index')->with('success', 'Employe été supprimé avec succès');
    }
}

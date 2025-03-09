<?php

namespace App\Http\Controllers;

use App\Models\AddNewEmployee;
use Illuminate\Http\Request;

class AddNewEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Afficher la liste des employés
    public function index()
    {
        $employees = AddNewEmployee::all();
        return view('employee.liste-employee', compact('employees'));
    }

    // Creer un nouvel employé
    public function create()
    {
        return view('employee.add-new-employee');
    }

    // Afficher un employé spécifique
    public function show($id)
    {
        $employee = AddNewEmployee::find($id);

        if (!$employee) {
            return response()->json(['message' => 'Employé non trouvé'], 404);
        }

        return response()->json($employee);
    }

    // Ajouter un nouvel employé
    public function store(Request $request)
    {
        if (AddNewEmployee::where('employeeId', $request->employeeId)->exists()) {
            return back()->withErrors(['employeeId' => 'Cet ID employé existe déjà.']);
        }
            $employee = new AddNewEmployee();
            $employee->employeeId = $request->employeeId;
            $employee->firstName = $request->firstName;
            $employee->lastName = $request->lastName;
            $employee->middleName = $request->middleName;
            $employee->IdNumber = $request->IdNumber;
            $employee->picture = $request->picture;
            $employee->phone = $request->phone;
            $employee->gender = $request->gender;
            $employee->department = $request->department;
            $employee->function = $request->function;
            $employee->dependant = $request->dependant;
            $employee->dateOfBirth = $request->dateOfBirth;
            $employee->title = $request->title;
            $employee->relationship = $request->relationship;
            $employee->name = $request->name;
            $employee->adress = $request->adress;
            $employee->phoneEmercency = $request->phoneEmercency;
            $employee->save();

            return redirect()->route('addnewemployee.index')->with('success', 'Employé ajouté avec succès !');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AddNewEmployee $addNewEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AddNewEmployee $addNewEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AddNewEmployee $addNewEmployee)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Display a listing of the resource

    public function index(){
        $companies = Company::paginate(5);
        return view('companies.index', compact('companies'));
    }

    // Show the forrm for creating a new resource

    public function create(){
        return view('companies.create');
    }

    // store a newly created resource in storage
     
    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required',
            'address'=>'required',
        ]);

        Company::create($request->post());

        return redirect()->route('companies.index')->with('success', 'Company has been created successfully.');
        
    }

    // show the form for editing the specified resource

    public function edit(Company $company){
        return view('companies.edit', compact('company'));
    }

    // Update the specified resource in storage.

    public function update(Request $request, Company $company){
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'address'=>'required'
        ]);

        $company->fill($request->post())->save();
        return redirect()->route('companies.index')->with('Success', 'Company has been updated successfully');
    }

    // Remove the specified resource from storage

    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('companies.index')->with('Success', 'Company has been deleted successfully');
    }
}

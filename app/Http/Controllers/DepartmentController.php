<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Models\Department;
class DepartmentController extends Controller
{
   
    public function index()
    {
        $department=Department::get();

        return view('department.index')->with('department',$department);
    }

   
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}

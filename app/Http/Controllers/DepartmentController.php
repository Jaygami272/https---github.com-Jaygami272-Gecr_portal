<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
class DepartmentController extends Controller
{
   
    public function index()
    {
        $department=Department::get();

        return view('department.index')->with('department',$department);
    }

   
    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            
            'email' => 'required|unique:users,email',
            
        ]);
        $ex=Department::where('department_name',$request['department_name'])->count();
        if($ex==1){
            Flash::error('This Department is already exist..');
            return redirect(route('departments.index'));
        }
        // $request->validate([
        //     'department_name'=>'required|unique:departments,department_name',
        // ]);
        
        if($ex==0){
            
        $string = Str::random(8);
        $role = Role::where('slug', 'hod')->first();
        $department=new Department();
        $user=new User();
        Flash::success('Department Save Successfully');
        $department->department_name=$request['department_name'];
        $department->save();
        $d_id=Department::where('department_name',$request['department_name'])->first();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=Hash::make($string);
        $user->role_id=$role->id;
        $user->department_id=$d_id->id;
        $user->save();
        $detail = [
            'description' => $string,
        ];
        $operator['to']=$request['email'];
        Mail::send('operators.mailindex', $detail, function ($message) use($operator) {
            $message->subject("Hello");
            $message->to($operator['to']);
        });

        return redirect(route('departments.index'));
       
    }else{
        Flash::success('Department Save Successfully');
        return redirect(route('departments.index'));
    }
    
    }
    
    public function show($id)
    {
       
    }

    
   

   
    public function edit($id)
    {
        $departments=Department::find($id);
       
        $role=Role::where('slug','hod')->first();
        $user=User::where('role_id',$role->id)->where('department_id',$departments->id)->first();
       
       
        if(empty($departments)){
            Flash::error('Department not found');
            return redirect(route('departments.index'));
        }
        
        return view('department.detail')->with('users',$user);
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}

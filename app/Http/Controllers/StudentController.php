<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\view\view;

use App\Models\student;

class StudentController extends Controller
{
    function insert(Request $req){
        $req->validate([
           'sname' => 'required',
           'sroll' => 'required',
           'simage' => 'required|image|mimes:jpeg,jpg,png,svg|max:10000',
           'sclass' => 'required',
           
       ]);
    $fileName = time() . '.' . $req->simage->extension();
    $req->simage->move(public_path('images'),$fileName);
   $sname=$req->get('sname');
   $sroll=$req->get('sroll');
   
   $sclass=$req->get('sclass');
   
   
   $addstudent= new student();
   $addstudent->name = $sname;
   $addstudent->Rol_no = $sroll;
   $addstudent->image = $fileName;
   $addstudent->class = $sclass;
   $addstudent->save();
   return redirect()->intended('Teacher_Panel');
   
       }
    function readData(){
        $sdata=student::all();
        return view('Teacher_Panel',['data'=>$sdata]);
       
    }
    public function show($id)
    {
       
        $sdata = student::findOrFail($id);
    
        return view('view_details', ['sdata' => $sdata]);
    }
    public function edit($id)
    {
        $students = student::where('id',$id)->first();
        return view('edit', ['students' => $students]);
    }
    public function update(Request $req, $id)
    {
        $req->validate([
            'sname' => 'required',
            'sroll' => 'required',
            'simage' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:10000',
            'sclass' => 'required',
            
        ]);
        $addstudent=student::where('id',$id)->first();
        if(isset($req->simage)){
            $fileName = time() . '.' . $req->simage->extension();
            $req->simage->move(public_path('images'),$fileName);
            $addstudent->image = $fileName;

        }

    $addstudent->name = $req->sname;
    $addstudent->Rol_no = $req->sroll;
    $addstudent->class = $req->sclass;
   
    $addstudent->save();
    return redirect()->intended('Teacher_Panel');
    }
    public function destroy($id)
    {
        $sdata = student::find($id);
        $sdata->delete();
  
        return redirect('/Teacher_Panel')->with('sdata', $sdata)->with('success', 'Product deleted successfully');

    }
}

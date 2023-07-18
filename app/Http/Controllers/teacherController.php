<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teacher;
use Hash;

class teacherController extends Controller
{
    function insert(Request $req){
        $req->validate([
           'name' => 'required',
           'username' => 'required',
           'password' => 'required|confirmed|min:6',
           'password_confirmation' => 'required',
           
       ]);
   
   $tname=$req->get('name');
   $tusername=$req->get('username');
   $tpassword=Hash::make($req->get('password'));
   
  
   
   
   $record= new teacher();
   $record->name = $tname;
   $record->username = $tusername;
   $record->password = $tpassword;
  
   $record->save();
   return redirect()->intended('Teacher_Panel');
   
       }
 function customLogin(Request $request)
{ $request->validate([
    'username' => 'required',
    'password' => 'required',
]);

$username = $request->username;
$password = $request->password;

// Use Laravel's query builder to safely retrieve the user by username
$user = DB::table('teachers')->where('username', $username)->first();

if ($user && Hash::check($password, $user->password)) {
    // Password matches, user is authenticated
    return redirect()->intended('Teacher_Panel');
} else {
    // Password doesn't match or user not found
    return redirect()->back()->with('error', 'Invalid credentials');
}
}
}

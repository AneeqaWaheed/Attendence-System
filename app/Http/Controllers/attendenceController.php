<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\attendence;
use App\Models\student;
class attendenceController extends Controller
{
    public function store(Request $request, $studentId)
    {
        // dd($request->all());
        // try {
            // $request->validate([
            //     'status' => 'required',
            // ]);
    
            $student = student::findOrFail($request['studentId']);
            $status = $request['status'];

            $record = new attendence();
            $record->status = $request->status;
    
            // Assuming you have a relationship between Attendance and Student models
            $record->student()->associate($student);
    
            $record->save();

    
            return response()->json(['message' => 'Attendance value stored successfully']);
        // } catch (\Exception $e) {
        //     \Log::error("Error storing attendance value: " . $e->getMessage());
        //     return response()->json(['message' => 'Error storing attendance value'], 500);
        // }
    }
    

}

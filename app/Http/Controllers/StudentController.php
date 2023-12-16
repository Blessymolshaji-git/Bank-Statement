<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;


class StudentController extends Controller
{ 
    public function form(){
        return view('students.create');
    } 


    public function createstudent(Request $request)
    {
        //dd("jjjjjj");
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'class' => 'required',
            'rollnumber' => 'required',
            'number' => 'required',
            'email' => 'required',
            'place' => 'required',
        ]);
        $data = $request->all();
       //dd ($data );
       Student::create($request->all());
        return redirect()->route('list.student')->with('success','Student has been saved');
    }
    public function liststudent( ){
        $students = Student::latest()->paginate(10);
    //dd($students);
        return view('students.list',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    
        
    }

    public function showstudent( $id){
        $student = Student::find($id);
       // dd( $student);
        return view('students.show',compact('student'));
}

public function editstudent($id)
{
    $student = Student::find($id);
    // dd( $student);
     return view('students.edit',compact('student'));
}



public function studentupdate(Request $request, Student $student )
{
    $student = Student::first(); 
   // dd($student);
    

    $student->update($request->all());
    // dd($student);

    return redirect()->route('list.student')
                    ->with('success','student updated successfully');
}
public function destroy(Student $student)
{
    $student->delete();

    return redirect()->route('list.student')
                    ->with('success', 'student deleted successfully');
}
}
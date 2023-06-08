<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $student = Student::paginate(10);
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        p($request->all());
        die;

        $validate = $request->validate([
            'name'=> 'required|max:5',
            'email'=>'required',
            'class'=>'required',
        ]);
        //
       // Student::create($request->all());

        $student = new Student;
        $student->name =  $request->name;
        $student->email =  $request->email;
        $student->class =  $request->class;
        $query = $student->save();

        if($query){
            return \redirect()->route('student.index')->with('success','Added successfully');
        }

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
        Student::where('id', $id)->delete();
        return redirect()->route('students.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //

        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        if($request->name===null){
            return back()->with('fail', 'Failed to process');
        }
        // $student->update($request->all());
        // return redirect()->route('student.index')->with('success','Updated Successfully');
      //  $student = new Student;
        $student->name =  $request->name;
        $student->email =  $request->email;
        $student->class =  $request->class;
        $query = $student->save();

        if($query){
            return \redirect()->route('student.index')->with('success','updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //dd($student);
        //
    //    $query = $student->delete();
    //     return redirect('index')->with('success','Deleted Successfully');
    }





}

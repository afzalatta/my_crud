<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Model\Classs;

class TeacherController extends Controller
{
    //
    public function teacherStudent()
    {
        // Lazy loading
        $teachers =  Teacher::get();
        foreach ($teachers as $key => $teacher) {
            $students =  $teacher->student;
            foreach($students as $student) {
                echo $student->name;
            }
        }


        //following 2 lines of code shows one teacher in json data structure.
        // $teacher = Teacher::find(1);
        // echo $teacher;


        //following line of code shows all teachers and students
      //  return Teacher::with('student')->get();
    }



    public function teacherClass()
    {

        // Eager loading

        return  Student::with('class')->get();

    }


}

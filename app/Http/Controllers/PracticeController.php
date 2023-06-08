<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\Student;

class PracticeController extends Controller
{
    //

    public function show($name){
        $data = [
            'nokia' => '3310',
            'samsung' => 'Glaxy Hot'
        ];

        return view('employee',['devices'=>$data[$name] ?? 'The device'." ".  $name .' does not exist']);

    }

    public function dbOperations()
    {
        return  DB::table('students')
        ->where('class','<>','it')
        ->get();

        // $player = Student::all();
        // $serializedUser = $player->toJson();

        // p($serializedUser);


    }


    public function institute(Player $id)
    {
        return $id;
    }



}

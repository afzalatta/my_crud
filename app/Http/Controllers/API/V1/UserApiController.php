<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class UserApiController extends Controller
{
    //
    public function index()
    {
        return [
            'status' => true,
            'code'=> 200,
            'message'=> 'The users has been listed',
            'data'=>  User::all()
         ];
        $client = new Client();
        $headers = [
        'Cookie' => 'PHPSESSID=h9k3jgs0ad15b8gbtn8rqjrq2a'
        ];
        $request = new Request('GET', 'https://gnews.io/api/v4/top-headlines?country=pk&category=general&apikey=c2273d87575fdf1e6c7232adc5fb65cb', $headers);
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();


    }

    public function userCreate(Request $request)
    {
        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

      return [
            'status'=> true,
            'message' => 'User has been added successfully',
            'data'=> $user
        ];
    }

    public function userList(Request $request)
    {
        $user = User::all();
    }
}

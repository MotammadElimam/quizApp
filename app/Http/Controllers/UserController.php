<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('student_id') ?? null;
        return view('home', [ 'student_id' => $id ]);
    }

    public function show(Request $request)
    {
        $user = User::find($request->user_id);
        
        if($user) {
            dd($user);
        } else {
            die('Student ID Does Not Exist');
        }
    }

    public function create()
    {
        return view('student');
    }

    public function store(Request $request)
    {
        $code = substr(str_shuffle("0123456789"), 0, 4);

        $user = User::create([
            'code' => $code,
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        if($user) {
            return redirect()->route('home', ['student_id' => $user['code']]);
        } else {
            die('Error Creating User');
        }
    }
}

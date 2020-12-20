<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function addUsers(Request $request)
    {
        $validatedData = $request->validateWithBag('post', [
            'matric' => 'required|unique:matric_no',
            'email' => 'required|unique:email',
            'password' => 'required|min:8|max:12'
        ]);

        DB::table('addUser')->insert([
            'firstname' => $request->fn,
            'lastname' => $request->ln,
            'level' => $request->level,
            'department' => $request->department,
            'matric_no' => $request->matric,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return view('login', compact('validatedData'));
    }
}

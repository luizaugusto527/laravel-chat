<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    function update(Request $request)  {
       $request->validate([
        'name'=>['required','string','max:50'],
        'user_name'=>['required','string','max:50'],
        'email'=>['required','email','max:100'],
       ]);
    }
}

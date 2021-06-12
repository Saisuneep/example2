<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello($name,$sername,$age)
    {
        $data = [
            'name' => $name,
            'sername' => $sername,
            'age' => $age
        ];
        return view('user.hello', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
       return [
            'NIS' => 3103120133,
            'Name' => 'Meiwildan Muhammad Farrel',
            'phone' => "081215662436",
            'class' => "XII RPL 4"
        ];
    }
}

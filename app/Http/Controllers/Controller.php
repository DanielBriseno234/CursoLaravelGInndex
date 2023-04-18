<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        $user = User::find(1);

        return view('welcome', ['user' => $user]);
    }
}

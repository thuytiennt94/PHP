<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class ProfileController extends BaseController
{
    public function showProfile($name){
        return view('profile') ->with('name', $name);
    }
}

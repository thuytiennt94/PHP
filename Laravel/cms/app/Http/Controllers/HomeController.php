<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    public function showWelcome(){
//        return 'home controller';
//        return view('home');
        return view('index');
    }
}

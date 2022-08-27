<?php

namespace App\Http\Controllers;
use Faker\Provider\Base;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
    public function showDetails(){
        return 'About Details Information';
    }

    public function showSubject($theSubject){
        return "Details information about $theSubject";
    }
}

<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showBeranda(){
        return view('template.base');
    }

    function showPC(){
        return view('template.section.pc');
    }

    function showLaptop(){
        return view('template.section.laptop');
    }

    function showSmartphone(){
        return view('template.section.smartphone');
    }

    function showAccessories(){
        return view('template.section.accessories');
    }

    function showDetails(){
        return view('details');
    }
}

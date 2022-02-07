<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IntegrationController extends Controller
{
    public function index(){
        return view('integrations');
    }

    public function itemConnect($seflink){
        return $seflink;
    }
}

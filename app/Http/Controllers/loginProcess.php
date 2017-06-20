<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginProcess extends Controller
{
    public function checkLogin()
    {
      $ID = $_POST['ID'];
      $PW = $_POST['PW'];

      return view('Auth.loginProcessTest')->with('ID',$ID)->with('PW',$PW);
    }
}

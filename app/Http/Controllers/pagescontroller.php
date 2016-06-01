<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pagescontroller extends Controller
{
  public function getabout(){
      $companyname="code Executbale";
      $isuserregistered=False;
      return view('pages.about')->with('name',$companyname)
      ->with('iur',$isuserregistered);
  }
  public function gethelp(){
      return view('pages.help');
  }
  public function getcontact(){
      return view('pages.contact');
  }

}

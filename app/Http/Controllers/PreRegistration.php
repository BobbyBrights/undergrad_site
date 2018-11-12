<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreRegistration extends Controller
{
  /**
   * Show pre-registration form
   *
   * @return View
   */
  public function showForm()
  {
    return view('pre-registration', ['fail'=>false]);
  }

  public function register(Request $request)
  {
    try {
      $data = $request->all();
      DB::table('preregistered')->insert([
          'uni_course' => $data['uniCourse'],
          'email' => $data['email'],
          'phone' => $data['phone'],
          'name' => $data['name'],
          'ig_username' => $data['igUsername'],
          'update_agreement' => $data['informCheck']
      ]);
      return view('successfulRegistration');
    }
    catch (QueryException $e){
      return view('pre-registration', ['fail'=>true]);
    }

  }
}

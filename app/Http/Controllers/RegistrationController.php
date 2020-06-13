<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use DB;
use Auth;

class RegistrationController extends Controller
{
	public function login(){
		 return view('login');
	}
	public function ceklogin(Request $request){
		 $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('login');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

	}
	public function input()
    {
    	    
        return view('registration');
    }
  public function proses(Request $request)
    {
        $this->validate($request,[
          
           'lastname' => 'required',
         
            'email' => 'required|email',
         'password'  =>  'required|min:3|same:passwordconfirmation',
		 'passwordconfirmation'  =>  'required|min:3',
		'termandcondition'=>'required',

        ]);

    	// $date='01-'.$request->month.'-'.$request->year;

      DB::table('users')->insert([
		'lastname' => $request->lastname,
		'firstname' => $request->firstname,
		'email' => $request->email,
		'password'=>Hash::make($request->password),
		'address' =>$request->address,
		'date_birth'=>$request->date_birth,
		'membership_type'=>$request->membership_type,
		'cvv'=>$request->cvv,
		'card_number'=>$request->card_number,
		// 'exp_card'=>$date

	]);

    	
 
        // return view('proses',['data' => $request]);
      return view('login',['data' => $request])->with('message', 'Registration Success');
    }
    function logout()
    {
     Auth::logout();
     return redirect('login');
    }
}

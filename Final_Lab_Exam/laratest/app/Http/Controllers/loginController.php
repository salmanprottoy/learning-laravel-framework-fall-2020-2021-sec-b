<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
    	
    	//$req->session()->put('name', $req->username);
    	//$req->session()->put('password', $req->password);
		//$data = $req->session()->get('name');
		//$req->session()->has('name');
    	//$req->session()->forget('name');
		//$req->session()->flush();
		//$req->session()->flash('msg', 'invalid username/password');
		//$req->session()->flash('error', 'DB error');
		//$req->session()->keep('msg');
		//$req->session()->reflash();
		//$data =$req->session()->pull('name');

        /* $user = DB::table('user_table')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->first(); */

        $user = User::where('username', $req->username)
                    ->where('password', $req->password)
                    ->first()->get();

    	if(is_countable($user) && count($user) > 0){
    		$req->session()->put('username', $req->username);
            $req->session()->put('type', $req->username);
            
    		return redirect()->route('home.index');
    	}else{
    		$req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    		//return view('login.index');
    	}
    }
}

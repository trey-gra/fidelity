<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    //
    public function userList(){
    	$usr = user::all();
    	return view('users.userList', ['users' => $usr]);
    }

    public function create_user(){
    	return view('users.create_user', ['role' => \App\role::all()]);
    }

    public function save_user(Request $r){
    	try {
    		$newUser = new user;
    		$newUser->first_name = $r->fname;
    		$newUser->last_name = $r->lname;
    		$newUser->role_id= $r->role_id;
    		$newUser->email= $r->email;
    		$newUser->password= bcrypt($r->password);
    		$newUser->save();
    		return view('users.userList', ['users' => user::all()]);
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }

    public function edit_user($id){
    	$user = user::find($id);
    	return view('users.edit_user', ['user' => $user, 'role' => \App\role::all()]);
    }

    public function update_user(Request $req){
    	//dd($req);
    	$user = user::find($req->id);
    	try {
    		//dd($req);
    		if($req['password']){
    			$user->first_name = $req->first_name;
    			$user->last_name = $req->last_name;
    			$user->role_id = $req->role_id;
    			$user->email = $req->email;
    			$user->password = bcrypt($req->password);
    		}else{
    			$user->first_name = $req->first_name;
    			$user->last_name = $req->last_name;
    			$user->role_id = $req->role_id;
    			$user->email = $req->email;
    		}
    		$user->update();
    		return view('users.userList', ['users' => user::all()]);
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
}

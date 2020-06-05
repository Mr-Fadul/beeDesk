<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
public function dashboard(){
    if(Auth::check() === true){
        return view('admin.dashboard');   
    }
    return redirect()->route('admin.login');
}

public function index()
{
   return view('admin.home');
}

public function showLoginForm(){
    return view('admin.formLogin');
}

public function login(Request $request ){
    //var_dump($request->all());
   
    if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
        //return redirect()->back()->withInput()->withErrors(['O email informado não é válido!']);      
        $login['success']=false;
        $login['message']="O email informado não é válido!"; 
        echo json_encode($login);
        return;
    }
    $credentials =[
        'email' => $request->email, 
        'password' => $request->password
    ];
    if(Auth::attempt($credentials)){
        $login['success']=true;
        //return redirect()->route('admin');
        echo json_encode($login);
        return;
    }
    //return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
    $login['success']=false;
    $login['message']="Os dados informados não conferem!"; 
    echo json_encode($login);
    return;
}
public function logout(){
    Auth::logout();
    return redirect()->route('admin');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session()
    {
        echo "teste sessão";
        session(['name' => 'Marcello']);
        echo '<br>'. session('name');
        session()->put('last name','fadul');
        echo '<br>'. session()->get('last name');
        //Session::put('email','marcello@email.com');
        Session::put('email',null);
        echo '<br>'. Session::get('email');
        Session::put(['cart_product'=>'1', 'cart_quantity' => 2,'price'=>199]);
        Session::forget(['price','cart_quantity', 'cart_product']);
        echo '<br>';
        if(Session::has('email')){
            echo "o email é válido!";
        }else{
            echo "o email não é válido!";
        }
        echo '<br>';
        if(Session::exists('email')){
            echo "o email é válido!";
        }else{
            echo "o email não é válido!";
        }

        //Session::flash('message','o artigo foi salvo com sucesso!');
        echo '<br>';
        echo Session::get('message');

        var_dump(Session::all(), session()->all());

        
    }
}

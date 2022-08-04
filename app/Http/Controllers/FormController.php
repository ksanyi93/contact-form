<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    function save_questions(Request $request){
        Session::put($request->name_input, $request->email_input, $request->message);

        return redirect('/');
    }





    function validate_questions(Request $request){
        $request->validate([
            'name_input'=>'required',
            'email_input'=>'email|required',
            'message'=>'required'
        ]);

        return redirect('/')->with('message', 'Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
    }
}

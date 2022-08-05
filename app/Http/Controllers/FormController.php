<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Question;

class FormController extends Controller
{


    function save(Request $request){
            
            $request->validate([
            'name'=>'required|min:4|max:30',
            'email'=>'required|email',
            'description'=>'required|min:4|max:255'
        ]);


        Question::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description
           ]);

        return redirect('/')->with('success_message', 'Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
    }
}

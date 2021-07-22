<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
class FormController extends Controller {
    public function send(Request $request) {
        $form = new Form;
        $request->validate([
            "username" => 'min:2|max:20|email'
        ]);


//        return redirect()->route('form')->with('success', "Hello " . $request-> username);

//        return back();


//        return dd($request -> username);


        $form -> username = $request -> username;
        $form->save();
        return back();



    }
}

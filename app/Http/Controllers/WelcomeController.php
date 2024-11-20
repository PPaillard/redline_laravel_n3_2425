<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\View\View;

class WelcomeController extends Controller
{

    function index () : View {
        return view('home');
    }

    function contact () : View {
        return view('contact');
    }

    function contactSubmit(ContactFormRequest $request) {
        dd($request->validated());
        return view('contact');
    }
}

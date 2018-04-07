<?php

namespace App\Http\Controllers\Front;

use App\ModelFront\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\NewsLetterRequest;
use Illuminate\Support\Facades\Session;

class NewsLetterController extends Controller
{
    public function add(Request $request)
    {

        $newsletter = new NewsLetter;
        $newsletter->fill($request->all())->save();

        Session::flash('message', 'Muchas gracias por registrarse.');
        return back();
    }
}

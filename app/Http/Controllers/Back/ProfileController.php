<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('back.profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request['name'];
        $user->email = $request['email'];

        if($request->password != NULL){
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Validator;
use Auth;
use App\User;
class UserController extends Controller
{
    public function viewAuth()
    {
        return View('movies.auth');
    }

    public function viewRigester()
    {
        return View('movies.rigester');
    }

    public function addUser(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if($user->save())
        {
            $cred = $request->only('email','password');
            if(Auth::attempt($cred));
            return redirect('/');

        }
        return abort(500);

    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function viewlog()
    {
        return View('movies.login');
    }

    public function logUser(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);
        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
//        {
//            return Auth::user();
//        }
        $cred = $request->only('email','password');
        if(Auth::attempt($cred,true))
        {
//            return Auth::user();
            return redirect('/');
        }
        return back()->withErrors(['Wrong Password Or Email'])->withInput();
    }
}

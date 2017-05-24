<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');

    }

    public function registerSponsor(Request $request)
    {
        if ($request->isMethod('post'))
        {
            /*$this->validate($request, [
                'name'=> 'required',
                'email'=> 'required|unique:users',
                'password'=> 'required'

            ]);*/

            echo "in reg";
            $name = $request['firstname'];
            $email = $request['email'];
            $password = bcrypt($request['password']);

            $user = new User();

            $user->name = $name;
            $user-> email = $email;
            $user-> password= $password;

            $user->save();
        }


        return view('register');
    }

    public function search(Request $request)
    {
        //General search bar

        return view('dashboard.search');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;

class AssocierControlleurs extends Controller
{

    function create()
    {
        return view('associer.create');

    }

    function store(Request $request)
    {
        $inputs = $request->validate([
            'name' => 'required|regex:/[a-zA-Z0-9\s]+/',
            'email' => '|required|email',
            'password' => 'required'
        ]);
        $user = new User();
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->password = bcrypt($inputs['password']);
        $user->save();
        return view('associer.index');
    }

    function show(Request $request, $id)
    {
        $user = Auth::user();
        return view('associer.show', [
            'isUser' => true,
            'user' => User::find($id)
        ]);
    }

    function rendu($vueName = '')
    {
        echo view('associer.associer.' . $vueName);
    }

    function delete(Request $request, $id)
    {

        User::destroy($id);
        return back();

    }

    function index()
    {
        return view('associer.index');
    }

    function test($var)
    {
        // var_dump(
        // $var);
    }
}

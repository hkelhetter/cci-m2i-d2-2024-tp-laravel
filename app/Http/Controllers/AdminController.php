<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        return view('admin.index', [
            'users' => User::all()->toArray()
        ]);
    }

    public function login(Request $request)
    {
        if ($request->password == env('ADMIN_PASSWORD')) {
            $request->session()->put('isAdmin', true);
        }
        return back();
    }
}

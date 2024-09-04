<?php

namespace App\Http\Controllers\Authenticated\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class TopsController extends Controller
{
    public function show(Request $request){
        $role = Auth::user()->role;

        return view('authenticated.top.top', compact('role'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
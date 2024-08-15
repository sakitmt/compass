<?php

namespace App\Http\Controllers\Authenticated\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class TopsController extends Controller
{
    public function show(Request $request){
        $user = Auth::user();
        $role = $user->role; // ユーザーのロールを取得する。必要に応じて修正してください。

        return view('authenticated.top.top', ['role' => $request -> role]);
        return view('authenticated.top.top');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
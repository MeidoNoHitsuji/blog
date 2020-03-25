<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Http\Request;

class UserController extends RegisterController
{
    public function index(){
        return view('index');
    }

    public function post(Request $request){
        $v = $this::validator($request->all());
        if($v->fails()){
            return $v->errors();
        }else{
            $data = $request->toArray();
            $data['avatar'] = 'storage/'.$request->file('avatar')->store('uploads', 'public');
            $user = $this::create($data);
            return view('index', compact('user'));
        }
    }
}

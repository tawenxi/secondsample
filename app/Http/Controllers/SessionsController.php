<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;//是一个门面



class SessionsController extends Controller
{
    /**
     * summary
     *
     * @return void
     * @author 
     */
    
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * summary
     *
     * @return void
     * @author 
     */
    
    public function store(Request $request)
    {
    	$this->validate($request,[
    		"email"=>"required|email|max:255",
    		"password"=>"required"
    		]);
    	$credentials=[
    		"email"=>$request->email,
    		"password"=>$request->password
    		];
    	if (\Auth::attempt($credentials)) {
    		$request->session()->flash('success', "欢迎登陆成功");
    		return redirect()->route('users.show', [\Auth::user()]);
    	} else {
    		$request->session()->flash('danger', "抱歉，您的用户名或者密码不正确");
    		return redirect()->back();

    	}
    	

        
    }


    /**
     * summary
     *
     * @return void
     * @author 
     */
    
    public function logout()
    {
        Auth::logout();
	   \Session::flash('success', "您已经成功退出登录");
	    return redirect()->route('sessions.create');
    }
}

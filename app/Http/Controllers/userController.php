<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class userController extends Controller
{

    public function admindex()
    {
        return view('admin.admin1');

    }
    public function alluserindex()
    {
        return view('user.orgnalpage');
    }
    public function allprogramerindex()
    {
        return view('programer.programer');
    }
    public function ChangePassword()
    {
        return view('user.changepassword');
    }
    public function ChangePasswordF(Request $request)
    {

        $validated = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'password_confirmation' => 'required'
        ]);
        $user=auth()->user();
        if (Hash::check($request->oldpassword, $user->password)) {
            if($request->newpassword!=$request->password_confirmation)
            return "The passwords doesnot match weith password confirmation...";
            $user->password=Hash::make($request->newpassword);
            $user->update();
            return Redirect::to('/orgnalpage');
        }else {
            return "The passwords doesnot match...";
        }
        
        return $request;
    }
   
}

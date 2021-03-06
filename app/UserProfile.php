<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public static function emailValidation($request)
    {
        $request->validate([
            'email' =>  'required|email'
        ]);
    }

    public static function changeUserEmail($request)
    {
        $user = User::find($request->user_id);
        $user->email = $request->email;
        $user->update();
    }

    public static function changeUserPassword($request)
    {
        $user = User::find($request->user_id);
        $user->password = bcrypt($request->new_password);
        $user->update();
    }

    public static function deleteUserAccount($request)
    {
        $user = User::find($request->user_id);
         $user->delete();
    }


}

<?php


namespace App\Http\Controllers\api\v1;


use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
//        $user = new User;
//
//        $user->name = '小陈';
//        $user->email = '547433687@qq.com';
//        $user->password = md5(123456);
//        $user->api_token = str_random(60);

        User::create([
            'name'=>'小范',
            'email'=>'547433688@qq.com',
            'password'=>md5(123456),
            'api_token'=> str_random(60)
        ]);

    }
}
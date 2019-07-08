<?php

namespace App\Http\Controllers;


use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

       public $successStatus = 200;
    /**
     * @var UserRepository
     */
    private $user;

    /**
     * UserController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function getAllUsers()
    {
        return $this->user->getAll();
    }


    public function flutterLogin()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success =  $user;
            return response()->json( $success);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
//        $user_list = User::where('id',1)->first();
////        dd(json_encode($user_list));
//        return json_encode($user_list);
    }

    public function login(){
        return$this->user->login();
    }

    public function getuserlist(User $model)
    {
        $user = $model->all();
        return json_encode($user);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: bisesh
 * Date: 03/07/2019
 * Time: 14:53
 */

namespace App\Repositories;


use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @var User
     */
    private $model;

    /**
     * UserRepositoryImpl constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $this->model->all();
    }

    public function login()
    {




//        $data = Input::except(array('_token'));
//
//        $rule = array(
//            'email' => 'required|email',
//            'password' => 'required',
//        );
//
//        $validator = Validator::make($data,$rule);
//        if ($validator->fails())
//        {
//            return "Login error";
//        }else
//            {
//            $data = Input::except(array('_token'));
//            var_dump($data);
//            }
    }
}

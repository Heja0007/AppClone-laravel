<?php
/**
 * Created by PhpStorm.
 * User: bisesh
 * Date: 03/07/2019
 * Time: 14:52
 */

namespace App\Repositories;


interface UserRepository
{
    public function getAll();

    public function login();
}

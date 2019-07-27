<?php
/**
 * Created by PhpStorm.
 * User: bisesh
 * Date: 15/07/2019
 * Time: 15:43
 */

namespace App\Repositories;


use App\States;

class StatesRepositoryImpl implements StatesRepository
{
    /**
     * @var States
     */
    private $model;

    /**
     * @param States $model
     */
    public function __construct(States $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $this->model->all();
    }
}

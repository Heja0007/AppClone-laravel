<?php

namespace App\Http\Controllers;


use App\Repositories\StatesRepository;
use App\States;
use Illuminate\Http\Request;

class StateController extends Controller
{

    /**
     * @var StatesRepository
     */
    private $states;

    public function __construct(StatesRepository $states)
    {
        $this->states = $states;
    }

    public function All()
    {
        return $this->states->getAll();
    }

    public function GetStates(States $model)
    {
        $states = $model->all();
        return json_encode($states);
    }

}

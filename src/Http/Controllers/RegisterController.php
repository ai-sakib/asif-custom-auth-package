<?php

namespace Sakib\AsifAuth\Http\Controllers;

use Illuminate\Routing\Controller;
use Sakib\AsifAuth\Classes\AuthRegister;
use Sakib\AsifAuth\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    protected $authRegister;

    public function __construct(AuthRegister $authRegister)
    {
        $this->authRegister = $authRegister;
    }

    public function create()
    {
        return $this->authRegister->showRegisterView();
    }

    public function store(RegisterRequest $request)
    {
        return $this->authRegister->createNewUser($request);
    }
}

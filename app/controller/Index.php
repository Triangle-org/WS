<?php

namespace app\controller;

use Triangle\Ws\Response;
use Throwable;

class Index
{
    /**
     * @throws Throwable
     */
    public function index(string $request): Response
    {
        return response('Добро пожаловать в Triangle Web!');
    }
}

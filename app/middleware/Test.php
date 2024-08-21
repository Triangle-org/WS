<?php

namespace app\middleware;

use Throwable;
use Triangle\Middleware\MiddlewareInterface;
use Triangle\Ws\Request;

class Test implements MiddlewareInterface
{
    /**
     * @param Request $request
     * @param callable $handler
     * @return mixed
     */
    public function process($request, callable $handler)
    {
        return $handler($request)->withHeader('withHeader', 'Работает!!!');
    }
}
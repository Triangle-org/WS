<?php

use Triangle\Router;

Router::any('/hello/{name}', function (string $request, string $name) {
    return response("Привет, $name!");
});
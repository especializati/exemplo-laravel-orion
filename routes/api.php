<?php

use App\Http\Controllers\{
    UserController
};
use Orion\Facades\Orion;

Orion::resource(
    name: '/users',
    controller: UserController::class,
);

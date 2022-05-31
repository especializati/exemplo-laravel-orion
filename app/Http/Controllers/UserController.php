<?php

namespace App\Http\Controllers;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class UserController extends Controller
{
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = User::class;
}

<?php
/**
 * Created by PhpStorm.
 * User: yinjian
 * Date: 15/11/22
 * Time: 下午11:46
 */
namespace App\Api\V1\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Api\V1\Model\User;

class UserController extends BaseController
{
    public function show()
    {
        return User::all();
    }
}
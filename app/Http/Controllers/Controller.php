<?php

namespace App\Http\Controllers;

use App\Models\Admin\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /* public function make()
    {


        $user = new Admin();


        $user->username = "driss";
        $user->password = bcrypt("123456");
        $user->com_code = 1;
        $user->save();
    } */
}

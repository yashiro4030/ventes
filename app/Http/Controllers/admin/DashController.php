<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    //

    public function Dash()
    {

        return view('admin.dash');
    }
}

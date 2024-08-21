<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\GecrUsers;
use App\Providers\RouteServiceProvider;

class GecrController extends Controller
{
    //
    use GecrUsers;

}

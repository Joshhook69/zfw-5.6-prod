<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App , Illuminate\Support\Facades\Validator, 
    Illuminate\Support\Facades\Input, App\Visit, Mail, Redirect, App\ActivityLog, Auth, 
    App\User, App\SMFMember, App\Announcement;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

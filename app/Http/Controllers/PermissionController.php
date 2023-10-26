<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $user1 = User::where('id', 1)->first();
        $user1->givePermissionTo(['ModuleAdmin']);

        dd($user1);
    }
}

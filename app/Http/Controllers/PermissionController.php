<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $user1 = User::where('id', 2)->first();
        $user1->givePermissionTo(['ModuleEgg']);

        dd($user1);
    }
}

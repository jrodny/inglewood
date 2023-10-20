<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $user1 = User::find(1);
        $user1->givePermissionTo(['ModuleEgg', 'ModuleRecvEgg', 'ModuleHatchery', 'ModuleShed', 'ModuleReports', 'ModuleAdmin']);

        dd($user1);
    }
}

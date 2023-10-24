<?php

namespace App\Http\Controllers\Pages\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FindCustomerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('Pages.crm.tables.find-customer');
    }
}

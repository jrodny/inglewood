<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('Pages.admin.users.user-index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEditUserRequest $request)
    {

        $user = User::create($request->validated());

        //give permission to this user
        $moduleList = $request['modules'];
        $user->givePermissionTo([$moduleList]);

        return redirect()->route('admin.dashboard')->with('success', 'User created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $id)
    {
        $userPermissions = $id->hasPermissition()->get();
        return view('Pages.admin.users.user-edit', ['id' => $id, 'permissions' => $userPermissions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateEditUserRequest $request, User $id)
    {

        $id->update($request->validated());


        //remove permission to this user
        $moduleList = $request['modules'];
        DB::table('model_has_permissions')
        ->where('model_id', $id->id)
        ->whereIn('permission_id', $moduleList)
        ->delete();


        return redirect()->route('admin.dashboard')->with('success', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

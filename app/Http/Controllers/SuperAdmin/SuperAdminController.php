<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class SuperAdminController extends Controller
{
    //
    public function dashboard()
    {
        // return view('super-admin.dashboard');
        return Inertia::render('SuperAdmin/Dashboard');

    }

    public function users()
    {
        $users = User::with('roles')->where('role','!=',1)->get();
        // return view('super-admin.users', compact('users'));
        return Inertia::render('SuperAdmin/Users', ['users' => $users]);
    }

    public function manageRole()
    {
        $users = User::where('role','!=',1)->get();
        $roles = Role::all();
        // return view('super-admin.manage-role', compact(['users','roles']));
        return Inertia::render('SuperAdmin/ManageRole', ['users' => $users, 'roles' => $roles]);
    }

    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id
        ]);
        return redirect()->back();
    }

}

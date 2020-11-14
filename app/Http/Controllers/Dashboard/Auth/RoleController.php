<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $i = 1;
        return view('dashboard.auth.role.index', compact('roles','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('dashboard.auth.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50'
        ]);

        $role = Role::firstOrCreate([
            'name' => $request->name
        ]);

        $role->syncPermissions($request->input('permission'));


        if ($request != null) {
            // return response()->json([
            //     'status' => "ok",
            //     'messages' => "Role Baru Berhasil Ditambahkan",
            //     'route' => route('role.index')
            // ], 200);
        } else {
            // return response()->json([
            //     'status' => "fail",
            //     'messages' => "Role Baru Gagal Ditambahkan"
            // ]);
        }

        return redirect()->route('role.index')->with('success', 'Role Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::find($id);
        $permissions = Permission::all();
        $rolePermissions = DB::table('role_has_permissions')->where('role_id', $id)
                           ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                           ->all();

        return view('dashboard.auth.role.edit', compact('roles','permissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'permission' => 'required'
        ]);


        $role = Role::find($id);
        $role->name =  $request->name;
        $role->save();
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('role.index')->with('success', 'Role Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.index')->with('success','Role Berhasil Dihapus');
    }
}

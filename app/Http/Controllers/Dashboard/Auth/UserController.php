<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $no = 1;
        return view('dashboard.auth.user.index', compact('users','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.auth.user.create', compact('roles'));
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
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if ($request != null) {
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $user = User::create($input);
            $user->assignRole($request->input('role'));
            return response()->json([
                'status' => "ok",
                'messages' => "User Baru Berhasil Ditambahkan",
            ], 200);
        }
        else {
            return response()->json([
                'status' => 'fail',
                'messages' => 'Password Tidak Sama',
            ]);
        }
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
        $user = User::find($id);
        return view('dashboard.auth.user.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required',
            'password' => 'required'
        ]);



        if ($request != null) {
            $user = User::find($id);
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $user->update($input);

            // return response()->json([
            //     'status' => 'ok',
            //     'messages' => 'User Berhasil Di Perbaharui',
            //     'route' => route('users.index')
            // ], 200);
            return redirect()->route('users.index')->with('success', 'User Berhasil Di Perbaharui');

        } else {
            return response()->json([
                'status' => 'fail',
                'messages' => 'Password Tidak Sama',
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = User::find($id);
        $role->delete();
        return redirect()->route('users.index')->with('success','User Berhasil Dihapus');
    }
}

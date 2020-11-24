<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::all();
        return view('dashboard.menu.index', compact('menus'));
=======
        $data = Menu::all();
        return view('dashboard.menu.index', compact('data'));
>>>>>>> indonesia
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create');
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
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'foto' => 'required'
        ]);

        $data = $request->all();
<<<<<<< HEAD
        dd($data);

        $data['foto'] = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images/menu/'.$data['nama_menu']), $data['foto']);

        if ($data != null ) {
            Menu::create($data);
            return response()->json([
                'status' => 'ok',
                'messages' => 'Menu Baru Berhasil Ditambahkan',
                'route' => route('menu.index')
            ], 200);
        } else {
            return response()->json([
                'status' => 'fail',
                'messages' => 'Gagal Menambahkan Menu Baru'
            ], 422);
        }


        // return redirect()->route('menu.index')->with('success', 'Menu Berhasil Ditambahkan');
=======
        
        $data['foto'] = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images/menu/'. $request->nama_menu), $data['foto']);

        Menu::create($data);

        return redirect()->route('menu.index')->with('success','Menu Baru Berhasil Ditambahkan !');

>>>>>>> indonesia
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

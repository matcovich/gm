<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateUserRequest;
use App\Tipo;
use App\User;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function inicio()
    {

        $users = User::all();
        return view('admin.index', compact('users'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        $tipos = trans('users.tipos');

        return view('admin.users.create', compact('user', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $data = $this->validate([
//            'tipo' => 'in:'.implode(',', Tipo::getList()),
//    ]);
        $this->validate($request, ['tipo' => 'required']);
//
//        $user = new User([
//        ]);
//
//        $user-> tipo = $data ['tipo'];

        $user = User::create([
            'tipo' => $request->get('tipo'),
        ]);

        return redirect()->route('admin.users.edit', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $vehiculos = Vehiculo::all();
        return view('admin.users.show', compact('user', 'vehiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->updateUser($user);
        return redirect()->route('admin.users.show', ['user' => $user])->with('flash','El cliente fue editado exitosamente !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index', $user)->with('flash','El cliente fue eliminado con exito!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Planta;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countUser = User::count();
        $countPlant = Planta::count();

        return view('admin/DashboardAdmin',compact('countUser','countPlant'));
    }

    public function controleUsuario(){
        $users = User::all();
        return view('admin/ControleUsuario',compact('users'));
    }

    public function adicaoAdmin(){
        return view('admin/AdicaoAdmin');
    }


    public function controlePlanta(){
        $plantas = Planta::all();
        return view('admin/ControlePlanta',compact('plantas'));
    }

    public function adicaoPlanta(){
        return view('admin/AdicaoPlanta');
    }


    public function apagarUsuario($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/ControleUsuario');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

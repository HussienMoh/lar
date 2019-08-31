<?php

namespace App\Http\Controllers\Backend;


use App\Models\User;

class Users extends BackendController
{

    public function index()
    {
        $users = User::paginate(10);
        return view('Backend.Dashboard.users.index' , compact('users'));
    }
    public function create()
    {
        return view('Backend.Dashboard.users.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //return "a";
        return view('Backend.Dashboard.users.edit');
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}

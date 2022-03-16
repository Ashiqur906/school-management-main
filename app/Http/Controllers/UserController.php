<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::orderBy('id' , 'desc')->get();
        return view('backend.pages.user.index',[
            'users' => $users
        ]);
    }

   
    public function create()
    {
        return view('backend.pages.user.create-edit');
    }

    
    public function store(UserRequest $request)
    {     
        $user = new User();
        $user->fill($request->all());
        if($request->has('profile')){
            $user->profile = Storage::put('user', $request->file('profile'));
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('users.create')->with('success' , 'Data added successfully');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
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

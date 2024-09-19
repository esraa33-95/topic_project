<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
             'email'=>'required|email|unique:users',
             'username'=>'required|string|unique:users',
             'password'=>'required|string|confirmed|min:8',
             'password_confirmation'=>'required|string',
            
            
        ]);
            $data['password'] = Hash::make($data['password']);
            $data['active'] = 1;
            $data['email_verified_at'] = now();

            User::create($data);
            return redirect()->route('user.index');
        
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
    public function edit(string $id)
    {
        $user = User::findOrfail($id);
        return view('admin.edit_user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{

    $data = $request->validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'email' => 'required|email|unique:users,email,' . $id,
        'username' => 'required|string|unique:users,username,' . $id,
        'password' => 'nullable|string',
        'active' => 'boolean',
    ]);

        $data['password'] = Hash::make($request['password']);
        User::where('id',$id)->update($data);
        return redirect()->route('user.index');  

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    

   


}

<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $users = User::all(); 
        return view('users.users', ['users' => $users]);

    }

    /**
     * Create the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function create()
    { 
          

        return view('users.create');

    }

    /**
     * Store the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function store(Request $request)
    { 
          
        $request->validate([ 
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $request->merge(['password' => Hash::make($request->password)]);
        
        $user = User::create($request->all()); 
       
       return redirect()->route('users')->with('status', 'User Created!');

    }



    /**
     * Edit the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function edit($id)
    { 
         
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);

    }

    /**
     * Update the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function update($id, Request $request)
    { 
         
        $user = User::find($id);

        if($request->newpassword){

            $user->password = Hash::make($request->newpassword);
        }           
        if($request->name){

            $user->name = $request->name;
        }        
        if($request->email){

            $user->email = $request->email;
        }  
        $user->save();      

        return redirect()->route('users')->with('status', 'Updated!');

    }
  
    /**
     *
     * Delete the user.
     *
     */
    public function delete($id)
    { 
         
        $user = User::find($id);
 
        $user->delete();      

        return redirect()->route('users')->with('status', 'Succesful Delete!');

    }


}

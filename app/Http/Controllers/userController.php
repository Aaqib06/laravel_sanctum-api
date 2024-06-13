<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\position;
use App\Models\role;
use App\Models\student;
use App\Models\student_role;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
  $user= User::paginate(2);
 return view('show',['data'=>$user]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user= new user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->city=$request->city;
        $user->roles=$request->roles;
        $user->save();
        if($user){
            return redirect()->route('user.index')->with('success', 'user added successfully');
        }
    
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
        $user= User::find($id);
        return view('edit',['data'=>$user]);
    
           
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=user:: find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->city=$request->city;
        $user->roles=$request->roles;
        $user->save();
        if($user){
        return redirect()->route('user.index')->with('success', 'user update successfully');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=user::find($id);
        $user->delete();
        
            return redirect()->route('user.index')->with('success', 'user deleted successfully');
    }
   
}

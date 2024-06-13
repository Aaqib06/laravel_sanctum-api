<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function show(){
       $user= DB::table('users')->paginate(3);
        return view('show',['data'=>$user]);  
  

    }
    public function register(request $req){



   $user= user::create([
        'name'=>$req->name,
        'email'=>$req->email,
        'password'=>$req->password,
        'city'=>$req->city,
        'roles'=>$req->roles,
        
       
        ]);
        if($user){
            return redirect()->route('/')->with('success',"user created successfully");
        }
    }
    public function edit( string $id){
        $user= DB::table('users')->find($id);
          return view('edit',['data'=>$user]);  
  
      
     
    }
    public function update(request $req ,$id){
       
        $user=DB::table('users')->where('id' ,$id)->update([
          
            'name'=>$req->name,
            'email'=>$req->email,
          
            'city'=>$req->city,
            'roles'=>$req->roles,
            
        ]);
        if($user){
            return redirect()->route('/')->with('success','user update successfully');
        }
    }
    public function delete(string $id){
        $user=DB::table('users')->where('id',$id)->delete();
        if($user){
            return redirect()->route('/')->with('success','user deleted successfully');
        }

    }
    public function login(request $req){
      $credentials=$req->validate([
    
        "email"=>"required|email",
        "password"=>"required",
   
      ]);
      if(auth::attempt($credentials)){
          return redirect()->route('dashboard');
      }

  
}
public function dashboard(){
   {
        return view('dashboard');
    }
}
public function logout(){
    auth::logout();
    return view('login');
}
}
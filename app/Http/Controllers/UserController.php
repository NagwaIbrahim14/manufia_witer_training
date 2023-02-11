<?php

namespace App\Http\Controllers;
use  App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        //to get all users
        // $users=User::get();

        // to get some users pagiantor
        $users=User::OrderBy('id','DESC')->paginate(6);
        return view('users.index',['users'=>$users]);
    }
    public function show($id){
        // dd($id);

        $user=User::find($id);

        return view('users.show', ['user' => $user] );
    }
    public function destroy($id){
        // dd($id);
        User::where('id',$id)->delete();
        return redirect()->route('users.index');

    }
    public function edit($id ){
        // dd($id);
        $user=User::find($id);
        return view('users.edit', ['user' => $user] );

    }
    public function update($id ,Request $request){
        // dd($id ,$request->all());
        $user=User::find($id);
        $user->update($request->except('_method','_token'));
        return redirect()->route('users.index');
    }
    public function create(Request $request){
        return view('users.create');
     }
     public function store(Request $request){
         // dd($request->all());
         $user=User::create($request->except('_token'));


         return redirect()->route('users.index');
     }
}

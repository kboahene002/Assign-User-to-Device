<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::paginate(5);
        return view('addUser.addUser' , compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=> 'required',
            'email'=>'email|unique:users',
            'password'=> 'required|min:5',
            'password_confirmation'=>'required_with:password|same:password|min:5'
        ]);
        $user = User::create([
            'name'=> $request->name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email
        ]);
        if($user){
            return redirect()->route('infoUser.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $findd = User::where('id' , $id)->first();
        // return $findd;
        return view('addUser.editUser' , compact('findd'));

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
        $find = User::where('id', $id)->update([
            'name'=>$request->name
        ]);
        if($find){
            return redirect()->route('infoUser.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::where('id', $id)->delete();
        if($delete){
            return redirect()->route('infoUser.create');
        }
    }
}

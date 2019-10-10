<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;



class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin', compact('data'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password1' => 'required',
            'password2' => 'required',
        ]);
        if($request->password1 != $request->password2){
            return redirect()->route('admin.index')->with('status', 'Password dan re type password tidak sama');
        }
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = md5($request->password);
        $data->save();
        return redirect()->route('admin.index')->with('status', 'Admin Berhasil Ditambah!');
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
        $data = User::where('id', $id)->get();
        return view('adminEdit', compact('data', 'id'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password1' => 'required',
            'password2' => 'required',
        ]);
        if($request->password1 != $request->password2){
            return redirect()->route('admin.index')->with('status', 'Password dan re type password tidak sama');
        }
        $data = User::where('id', $id)->firstOrFail();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = md5($request->password1);
        $data->save();
        return redirect()->route('admin.index')->with('status', 'Admin Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.index')->with('status', 'Data Berhasil Dihapus');
    }

    public function login(Request $request){

        $email = $request->email;
        $password = md5($request->password);
        $data = User::where('email', $email)->firstOrFail();
        $password2 = $data->password;
        if($password == $password2){
            Session::put('name',$data->name);
            Session::put('login', 1);
            return redirect()->route('dashboard')->with('status', 'Login Berhasil');
        }
        else{
            return redirect()->route('login')->with('status', 'Username atau Password salah');
        }
    }

    public function logout(Request $request){

        Session::flush();
        return redirect()->route('login')->with('status', 'Logout Berhasil');
    }
}

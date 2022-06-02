<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('auth.profile');
    }

    public function edit($id, Request $request){
        try {
            $data_user                      = User::find($id);
            $data_user->name                = $request->input('name');
            $data_user->email               = $request->input('email');
            $data_user->password            = Hash::make($request->input('password'));
            $data_user->save();

            Alert::success('Berhasil','Data Profile Berhasil Diubah');
            return redirect('/profile');
        } catch (\Throwable $th) {
            Alert::error('Gagal','Data Profile Gagal Diubah');
        }

    }
}

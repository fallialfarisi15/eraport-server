<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\siswa;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return ["error" => "Username or password is not matched"];
            // throw ValidationException::withMessages([
            //     'username' => ['The provided credentials are incorrect.'],
            // ]);
        }
        $response = [
            'user' => $user,

        ];

        return response($response, 201);

        // $user = User::where('username', $request->username)->first();
        // if (!$user || Hash::check($request->password, $user->password)) {
        //     return ["error" => "Email or password is not matched"];
        // }
        // return $user;
    }
    public function ambilsiswa(){
        $siswa = siswa::all();
        return response($siswa, 201);
    }

    public function ProfilSiswa(Request $request){
        $siswa = siswa::where('id',$request->id)->get();
        return response($siswa, 201);
    }
    public function register(Request $request)
    {
        $user = new User;
        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->nip = $request->input("nip");
        $user->kelas = $request->input("kelas");
        $user->password = Hash::make($request->input("password"));
        $user->save();
        return response($user, 201);
    }
}

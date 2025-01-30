<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index(){

        $users = DB::select("SELECT * FROM users" );

        //$users = User::where('age', '>=' ,18)->get(); //Se pueden concatenar más where para && o usar orWhere para ||
        //User::where('age', '>=' ,18)->orderBy('age', 'asc')->get()
        //User::where('age', '>=' ,18)->limit(5, 10)->get()
        //User::where('age', '>=' ,18)->first()
         //User::find(1) --Es el ID o findOrFail(1)

        return view('user.index', compact('users'));

        // return view('user.index', [
        //     "users" => $users
        // ]);
    }

    public function create(){
        $user = new User;
        $user->name = "Juan";
        $user->email = "mail@mail.com";
        $user->password = Hash::make('1234567');
        $user->age = 19;
        $user->address = "Calle 80";
        $user->zip_code = 29090;
        $user->save();

        return redirect()->route('user.index');
    }


}

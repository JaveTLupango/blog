<?php

namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into users(name, email,password)
        // values (?,?,?)', [
        //     'admin', 'admin@admin.com', 'password'
        // ]);
//         $users = DB::select('select * from users');
// return $users;


        return view('home');
    }
}
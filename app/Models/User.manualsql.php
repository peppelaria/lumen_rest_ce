<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from rcuz_chronoforms_data_user_registration where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }
}
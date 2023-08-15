<?php

namespace App\Http\Controllers;

//use App\Models\User;

use App\Models\User;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    //
    //public function index(User $users) {
    public function index(User $users) {

        return view('listings.index', [

            //'users' => $users
            'users' => User::all()
        ]);
    }
}

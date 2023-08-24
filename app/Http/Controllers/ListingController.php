<?php

namespace App\Http\Controllers;

//use App\Models\User;

//use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    //
    //public function index(User $users) {
    public function index() {

        return view('listings.index', [

            //'users' => $users
            'listings' => Listing::all()
        ]);
    }

    //public function index(User $users) {
        public function show(Listing $listing) {

            return view('listings.show', [
    
                //'users' => $users
                'listing' => $listing
            ]);
        }
}

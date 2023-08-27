<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

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

        //public function index(User $users) {
        public function create() {

            return view('listings.create', [

            ]);
        }

        //public function index(User $users) {
        public function store(Request $request) {

            //dd($request);

            $formFields = $request->validate([
                'title' => 'required',
                'company' => ['required', Rule::unique('listings', 'company')],
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'
            ]);

            //$formFields['user_id'] = 6;
            $formFields['user_id'] = auth()->id();
            

            // Saves data to database
            Listing::create($formFields);

            return redirect('/');
            
        }


        //public function index(User $users) {
        public function edit(Listing $listing) {

            return view('listings.edit', [

                'listing' => $listing
            ]);
        }


        //public function index(User $users) {
        public function update(Request $request, Listing $listing) {

            //dd($request);

            $formFields = $request->validate([
                'title' => 'required',
                'company' => 'required',
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'
            ]);

            //$formFields['id'] = 1;
            
            // Saves data to database
            $listing->update($formFields);


            return redirect('/');
        }

        // Delete Listing
    public function destroy(Listing $listing) {

        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {

            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/');
    }

}

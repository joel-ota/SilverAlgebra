<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

    //all listings!!!! prestani se gubit
    public function index() {
       
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['tag', 'search']))->paginate(6)
    ]);
    }
    //jedan!uno!one listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);    
    }

    //kreiranje novih
    public function create () {
        return view('listings.create');
    }

    //spremanje imputa od drugih ljudit
    public function store (Request $request){
            $formFields = $request ->validate([
                'title' => 'required',
                'company' => ['required', Rule::unique('listings','company')],
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'logo' => 'nullable',
                'description' => 'required'
            ]);

            if($request->hasFile('logo')) {
                $formFields['logo'] = $request->file('logo')
                ->store('logos', 'public');
            }
            $formFields['user_id'] = auth()->id();
            Listing::create($formFields);

          

            return redirect('/')->with('message', 'Posao kreiran bravo svakak cast super!');
    }
    //edit

    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

     //Update imputa od drugih ljudit
     public function update(Request $request, Listing $listing)
     {
        //auth vlasnik
      if($listing->user_id != auth()->id()){
          abort(403, 'Nemože!');
      }
     $formFields = $request ->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'logo' => 'nullable',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')
            ->store('logos', 'public');
        }

        $listing->update($formFields);

    

        return back()->with('message', 'Posao updatean');
}

        //delete
        public function delete(Listing $listing) {

            
                $listing->delete();
                return redirect('/')->with('message','Posao obrisan!');
        }
    
}

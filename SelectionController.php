<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectionController extends Controller {
    
    public function index() {
         $country = [
            'Spain',
            'Germany',
            'Suice',
            'France',
            'Porutgal',
            'Russia',
            'Belgium',
            ];
            
        $countrySelection = $request->input('country', 'France');

        return view('Continent.selectCountry', ['country' => $country, 'countrySelection' => $countrySelection]);
    }
}

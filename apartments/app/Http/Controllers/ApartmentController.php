<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function search(Request $request, Apartment $apartment) {
        $apartment = $apartment->newQuery();

        if ($request->has('name')) {
            $apartment->where('name', 'like', '%'.$request->input('name').'%');
        }

        if ($request->has('bedrooms') && $request->input('bedrooms') > 0) {
            $apartment->where('bedrooms', $request->input('bedrooms'));
        }

        if ($request->has('bathrooms') && $request->input('bathrooms') > 0) {
            $apartment->where('bathrooms', $request->input('bathrooms'));
        }

        if ($request->has('storeys') && $request->input('storeys') > 0) {
            $apartment->where('storeys', $request->input('storeys'));
        }

        if ($request->has('garages') && $request->input('garages') > 0) {
            $apartment->where('garages', $request->input('garages'));
        }

        if ($request->has('from') && $request->input('from') > 0) {
            $apartment->where('price', '>=', $request->input('from'));
        }

        if ($request->has('to') && $request->input('to') > 0) {
            $apartment->where('price', '<=', $request->input('to'));
        }

        return $apartment->get()->toJson();
    }
}

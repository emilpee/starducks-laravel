<?php

namespace App\Http\Controllers;

use App\Starduck;
use Illuminate\Http\Request;
use Validator;

class DuckController extends Controller
{

    public function index() {
        $starducks = Starduck::all();
        return view('starducks.index', [
            'starducks' => $starducks
        ]);
    }

    public function create() {
      return view('starducks.create');
    }

    public function store(Request $request) {

         $validator = Validator::make($request->all(), [
            'firstName'    => 'required|max:100',
            'lastName'    => 'required|max:100',
            'email'    => 'required|unique:employees|max:100',
            'department'    => 'required|max:100',
            'salary'  => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            return redirect('starducks/create')
                ->withErrors($validator)
                ->withInput();
        }
        Starduck::create($request->all());
        return redirect('starducks');

    }


    public function show($id) {
        $starduck = Starduck::findOrFail($id);
        return view('/starducks/starduck', [
            'starduck' => $starduck
        ]);
    }
}
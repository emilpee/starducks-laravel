<?php

namespace App\Http\Controllers;

use App\Starduck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Validator;

class DuckController extends Controller
{

    public function index() {
        $starducks = DB::table('employees')
        ->whereBetween('salary', array(20000, 25000))
    //  ->where('department', '=', 'Slaveri')
        ->orderBy('lastName', 'asc')
        ->orderBy('firstName', 'asc')
        ->paginate(20);
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

    public function edit($id) {
        $starduck = Starduck::find($id);
        return view('starducks.edit', [
            'starduck' => $starduck
        ]);
    }

    public function update(Request $request, $id) {
        $starduck = Starduck::findOrFail($id);
        $starduck->firstName = Input::get('firstName');
        $starduck->lastName = Input::get('lastName');
        $starduck->email = Input::get('email');
        $starduck->department = Input::get('department');
        $starduck->salary = Input::get('salary');
        $starduck->save();

        return redirect('starducks');
    }

    public function destroy($id) {
        $starduck = Starduck::findOrFail($id);
        $starduck->delete();
        
        return redirect('starducks');
    }

}
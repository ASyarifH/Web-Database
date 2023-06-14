<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;

class FarmerController extends Controller
{
    public function index()
    {
        $farmers = Farmer::all();
        return view('farmers.index', compact('farmers'));
    }

    public function create()
    {
        return view('farmers.create');
    }

    public function store(Request $request)
    {
        $farmer = new Farmer;
        $farmer->name = $request->input('name');
        $farmer->age = $request->input('age');
        $farmer->address = $request->input('address');
        $farmer->detail = $request->input('detail', '-');
        $farmer->save();

        return redirect()->route('farmers.index');
    }

    public function show($id)
    {
        $farmer = Farmer::find($id);
        return view('farmers.show', compact('farmer'));
    }

    public function edit($id)
    {
        $farmer = farmer::find($id);
        return view('farmers.edit', compact('farmer'));
    }

    public function update(Request $request, $id)
    {
        $farmer = farmer::find($id);
        $farmer->name = $request->input('name');
        $farmer->age = $request->input('age');
        $farmer->address = $request->input('address');
        $farmer->detail = $request->input('detail', '-');
        $farmer->save();

        return redirect()->route('farmers.index');
    }

    public function destroy($id)
    {
        $farmer = farmer::find($id);
        $farmer->delete();

        return redirect()->route('farmers.index');
    }
}

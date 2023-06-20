<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;
<<<<<<< HEAD
use App\Models\Crop;
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6

class FarmerController extends Controller
{
    public function index()
    {
        $farmers = Farmer::all();
        return view('farmers.index', compact('farmers'));
    }

    public function create()
    {
<<<<<<< HEAD
        $roles = ['Petani', 'Ahli Agronomi', 'Ahli Kesuburan Tanah', 'Ahli Hama dan Penyakit Tanaman', 'Ahli Ekonomi Pertanian', 'Ahli Gizi'];
        $crops = Crop::all();
        return view('farmers.create', compact('roles', 'crops'));;
=======
        return view('farmers.create');
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
    }

    public function store(Request $request)
    {
        $farmer = new Farmer;
        $farmer->name = $request->input('name');
        $farmer->age = $request->input('age');
        $farmer->address = $request->input('address');
        $farmer->detail = $request->input('detail', '-');
<<<<<<< HEAD
        $farmer->role = $request->input('role');
        $farmer->save();
    
=======
        $farmer->save();

>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
        return redirect()->route('farmers.index');
    }

    public function show($id)
    {
        $farmer = Farmer::find($id);
        return view('farmers.show', compact('farmer'));
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $farmer = Farmer::find($id);
        $roles = ['Petani', 'Ahli Agronomi', 'Ahli Kesuburan Tanah', 'Ahli Hama dan Penyakit Tanaman', 'Ahli Ekonomi Pertanian', 'Ahli Gizi'];
        return view('farmers.edit', compact('farmer', 'roles'));
=======
        $farmer = farmer::find($id);
        return view('farmers.edit', compact('farmer'));
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
    }

    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $farmer = Farmer::find($id);
=======
        $farmer = farmer::find($id);
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
        $farmer->name = $request->input('name');
        $farmer->age = $request->input('age');
        $farmer->address = $request->input('address');
        $farmer->detail = $request->input('detail', '-');
<<<<<<< HEAD
        $farmer->role = $request->input('role');
        $farmer->save();
    
        return redirect()->route('farmers.index');
    }
    
=======
        $farmer->save();

        return redirect()->route('farmers.index');
    }
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6

    public function destroy($id)
    {
        $farmer = farmer::find($id);
        $farmer->delete();

        return redirect()->route('farmers.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CropFarmer;
use App\Models\Crop;
use App\Models\Farmer;

class CropFarmerController extends Controller
{
    public function index()
    {
        $cropfarmers = CropFarmer::all();
        return view('cropfarmers.index', compact('cropfarmers'));
    }

    public function create()
    {
        $crops = Crop::all();
        $farmers = Farmer::where('role', 'Petani')->get();
        $ahliAgronomi = Farmer::where('role', 'Ahli Agronomi')->get();
        $ahliKesuburan = Farmer::where('role', 'Ahli Kesuburan Tanah')->get();
        $ahliHama = Farmer::where('role', 'Ahli Hama dan Penyakit Tanaman')->get();
        $ahliEkonomi = Farmer::where('role', 'Ahli Ekonomi Pertanian')->get();
        $ahliGizi = Farmer::where('role', 'Ahli Gizi')->get();

        return view('cropfarmers.create', compact('crops', 'farmers', 'ahliAgronomi', 'ahliKesuburan', 'ahliHama', 'ahliEkonomi', 'ahliGizi'));
    }

    public function store(Request $request)
    {
        $cropfarmer = new CropFarmer;
        $cropfarmer->crop_id = $request->input('crop_id');
        $cropfarmer->petani_id = $request->input('petani_id');
        $cropfarmer->ahli_agronomi_id = $request->input('ahli_agronomi_id');
        $cropfarmer->ahli_kesuburan_id = $request->input('ahli_kesuburan_id');
        $cropfarmer->ahli_hama_id = $request->input('ahli_hama_id');
        $cropfarmer->ahli_ekonomi_id = $request->input('ahli_ekonomi_id');
        $cropfarmer->ahli_gizi_id = $request->input('ahli_gizi_id');
        $cropfarmer->save();

        return redirect()->route('cropfarmers.index');
    }

    public function show($id)
    {
        $cropfarmer = CropFarmer::find($id);
        return view('cropfarmers.show', compact('cropfarmer'));
    }

    public function edit($id)
    {
        $cropfarmer = CropFarmer::find($id);
        $crops = Crop::all();
        $farmers = Farmer::where('role', 'Petani')->get();
        $ahliAgronomi = Farmer::where('role', 'Ahli Agronomi')->get();
        $ahliKesuburan = Farmer::where('role', 'Ahli Kesuburan Tanah')->get();
        $ahliHama = Farmer::where('role', 'Ahli Hama dan Penyakit Tanaman')->get();
        $ahliEkonomi = Farmer::where('role', 'Ahli Ekonomi Pertanian')->get();
        $ahliGizi = Farmer::where('role', 'Ahli Gizi')->get();

        return view('cropfarmers.edit', compact('cropfarmer', 'crops', 'farmers', 'ahliAgronomi', 'ahliKesuburan', 'ahliHama', 'ahliEkonomi', 'ahliGizi'));
    }

    public function update(Request $request, $id)
    {
        $cropfarmer = CropFarmer::find($id);
        $cropfarmer->crop_id = $request->input('crop_id');
        $cropfarmer->petani_id = $request->input('petani_id');
        $cropfarmer->ahli_agronomi_id = $request->input('ahli_agronomi_id');
        $cropfarmer->ahli_kesuburan_id = $request->input('ahli_kesuburan_id');
        $cropfarmer->ahli_hama_id = $request->input('ahli_hama_id');
        $cropfarmer->ahli_ekonomi_id = $request->input('ahli_ekonomi_id');
        $cropfarmer->ahli_gizi_id = $request->input('ahli_gizi_id');
        $cropfarmer->save();

        return redirect()->route('cropfarmers.index');
    }

    public function destroy($id)
    {
        $cropfarmer = CropFarmer::find($id);
        $cropfarmer->delete();

        return redirect()->route('cropfarmers.index');
    }
}
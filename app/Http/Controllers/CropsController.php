<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crop;

class CropsController extends Controller
{
    public function index()
    {
        $crops = Crop::all();
        return view('crops.index', compact('crops'));
    }

    public function create()
    {
        return view('crops.create');
    }

    public function store(Request $request)
    {
        $crop = new Crop;
        $crop->name = $request->input('name');
        $crop->alias = $request->input('alias');
        $crop->price = $request->input('price', 0);
        $crop->place = $request->input('place', '-');
        $crop->description = $request->input('description', '-');
        $crop->purpose = $request->input('purpose', '-');
        $crop->save();

        return redirect()->route('crops.index');
    }

    public function show($id)
    {
        $crop = Crop::find($id);
        return view('crops.show', compact('crop'));
    }

    public function edit($id)
    {
        $crop = Crop::find($id);
        return view('crops.edit', compact('crop'));
    }

    public function update(Request $request, $id)
    {
        $crop = Crop::find($id);
        $crop->name = $request->input('name');
        $crop->alias = $request->input('alias');
        $crop->price = $request->input('price', 0);
        $crop->place = $request->input('place', '-');
        $crop->description = $request->input('description', '-');
        $crop->purpose = $request->input('purpose', '-');
        $crop->save();

        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        $crop = Crop::find($id);
        $crop->delete();

        return redirect()->route('crops.index');
    }
}

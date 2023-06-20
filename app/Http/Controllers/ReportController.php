<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CropFarmer;

class ReportController extends Controller
{
    public function cropFarmerReport()
    {
        $cropFarmers = CropFarmer::all();

        return view('reporting', compact('cropFarmers'));
    }
}

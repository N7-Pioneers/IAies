<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function saveScannedData(Request $request)
    {
        $data = $request->input('data');

        // Process and save the data as needed

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitConversionController extends Controller
{
    public function manage()
    {
        return view('admin.unit_conversion.manage');
    }
}

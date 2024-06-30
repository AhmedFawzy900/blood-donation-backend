<?php

namespace App\Http\Controllers;

use App\Models\CarAdminsInfo;
use Illuminate\Http\Request;

class CarAdminsInfoController extends Controller
{
    public function getAllAdminsInfo() {
        $data = CarAdminsInfo::all();
        return $data;
    }
}

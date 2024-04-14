<?php

namespace App\Http\Controllers;

use App\Models\HospitalMedicalInfo;
use Illuminate\Http\Request;

class HospitalMedicalInfoController extends Controller
{
    public function saveHospitalMedicalInfo(Request $request){
        $hospital = new HospitalMedicalInfo();
        $hospital->hospital_id = $request->hospital_id;
        $hospital->count_A = $request->count_A;
        $hospital->count_B = $request->count_B;
        $hospital->count_O = $request->count_O;
        $hospital->count_AB = $request->count_AB;
        $hospital->count_Ap = $request->count_Ap;
        $hospital->count_Bp = $request->count_Bp;
        $hospital->count_Op = $request->count_Op;
        $hospital->count_ABp = $request->count_ABp;
        $hospital->location_latitude = $request->location_latitude;
        $hospital->location_longitude = $request->location_longitude;
        $hospital->save();
        return $hospital;
    }

    public function getHospitalsMedicalInfo(){
        $hospitals = HospitalMedicalInfo::get();
        return $hospitals;
    }
}

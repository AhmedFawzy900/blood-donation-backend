<?php

namespace App\Http\Controllers;

use App\Models\HospitalPersonalInfo;
use Illuminate\Http\Request;

class HospitalPersonalInfoController extends Controller
{
    public function saveHospitalPersonalInfo(Request $request)
    {
        $hospital = new HospitalPersonalInfo();
        $hospital->name = $request->name;
        $hospital->email = $request->email;
        $hospital->password = $request->password;
        $hospital->phone_number = $request->phone_number;
        $hospital->zip = $request->zip;
        $hospital->city = $request->city;
        $hospital->type = $request->type;
        $hospital->save();
        return $hospital ;
    }
    public function getHospitalsPersonalInfo(){
        $hospitals = HospitalPersonalInfo::all();
        return $hospitals;
    }

    // merged hospital data
    public function mergeUserData(){
        $mergedData = HospitalPersonalInfo::join('hospital_medical_info', 'hospital_personal_info.id', '=', 'hospital_medical_info.hospital_id')
            ->select('hospital_personal_info.*', 'hospital_medical_info.*')
            ->get();
        // Now you can use $mergedData for further processing or return it as a response
        return response()->json($mergedData);
    }

    // update hospital info
    public function updateHospitalInfo(Request $request, $id){
        $hospital = HospitalPersonalInfo::find($id);
        if($hospital){
            $hospital->name = $request->name ? $request->name : $hospital->name;
            $hospital->email = $request->email ? $request->email : $hospital->email;
            $hospital->password = $request->password ? $request->password : $hospital->password;
            $hospital->phone_number = $request->phone_number ? $request->phone_number : $hospital->phone_number;
            $hospital->zip = $request->zip ? $request->zip : $hospital->zip;
            $hospital->city = $request->city ? $request->city : $hospital->city;
            $hospital->type = $request->type ? $request->type : $hospital->type;
            $hospital->save();
            return $hospital;
        }else{
            return response()->json([
                'message' => 'Hospital not found'
            ], 404);
        }
    }
}

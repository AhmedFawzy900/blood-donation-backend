<?php

namespace App\Http\Controllers;

use App\Models\UserMedicalInfo;
use Illuminate\Http\Request;

class UserMedicalInfoController extends Controller
{
    public function saveUserMedicalInfo(Request $request)
    {
        $userMedicalInfo = new UserMedicalInfo();
        $userMedicalInfo->user_id = $request->user_id;
        $userMedicalInfo->surgery_last_3_months = $request->surgery_last_3_months;
        $userMedicalInfo->visted_dentist_last_3_months = $request->visted_dentist_last_3_months;
        $userMedicalInfo->chronic_disease = $request->chronic_disease;
        $userMedicalInfo->last_donate_time = $request->last_donate_time;
        $userMedicalInfo->blood_type = $request->blood_type;
        $userMedicalInfo->legal_to_donate = $request->legal_to_donate;
        $userMedicalInfo->note = $request->note;
        $userMedicalInfo->location_latitude = $request->location_latitude;
        $userMedicalInfo->location_longitude = $request->location_longitude;
        $userMedicalInfo->date = $request->date;
        $userMedicalInfo->save();

        if ($userMedicalInfo) {
            return response()->json([
                'status' => 200,
                'message' => 'User medical info saved successfully',
                'data' => $userMedicalInfo
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'User medical info not saved',
            ]);
        }

    }
    
    public function getUsersMedicalInfo()
    {
        $userMedicalInfo = UserMedicalInfo::all();
        return $userMedicalInfo;
    }

    public function getUserMedicalInfo($id)
    {
        $userMedicalInfo = UserMedicalInfo::where('user_id', $id)->first();
        return $userMedicalInfo;
    }
    public function updateUserMedicalInfo(Request $request, $id)
    {
        $userMedicalInfo = UserMedicalInfo::where('user_id', $id)->first();
        $userMedicalInfo->surgery_last_3_months = $request->surgery_last_3_months;
        $userMedicalInfo->visted_dentist_last_3_months = $request->visted_dentist_last_3_months;
        $userMedicalInfo->chronic_disease = $request->chronic_disease;
        $userMedicalInfo->last_donate_time = $request->last_donate_time;
        $userMedicalInfo->blood_type = $request->blood_type;
        $userMedicalInfo->legal_to_donate = $request->legal_to_donate;
        $userMedicalInfo->note = $request->note;
        $userMedicalInfo->date = $request->date;
        $userMedicalInfo->save();
        return $userMedicalInfo;
    }
}

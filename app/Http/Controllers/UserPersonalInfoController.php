<?php

namespace App\Http\Controllers;

use App\Models\UserPersonalInfo;
use Illuminate\Http\Request;

class UserPersonalInfoController extends Controller
{
    public function saveUserPersonalInfo(Request $request)
    {
        $user = new UserPersonalInfo();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->national_Id = $request->national_Id;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->type = $request->type;
        $user->age = $request->age;
        $user->password = $request->password;
        $user->date = $request->date;
        $user->save();
        return $user;
    }
    public function getUsersPersonalInfo()
    {
        $user = UserPersonalInfo::all();
        return $user;
    }
    public function mergeUserData()
    {
        $mergedData = UserPersonalInfo::join('user_medical_info', 'user_personal_info.id', '=', 'user_medical_info.user_id')
            ->select('user_personal_info.*', 'user_medical_info.*')
            ->get();

        // Now you can use $mergedData for further processing or return it as a response
        return response()->json($mergedData);
    }
    public function updateUserInfo(Request $request, $id) {
        $user = UserPersonalInfo::find($id);
        if($user){
            $user->name = $request->name ? $request->name : $user->name;
            $user->email = $request->email ? $request->email : $user->email;
            $user->national_Id = $request->national_Id ? $request->national_Id : $user->national_Id;
            $user->phone_number = $request->phone_number ? $request->phone_number : $user->phone_number;
            $user->gender = $request->gender ? $request->gender : $user->gender;
            $user->type = $request->type ? $request->type : $user->type;
            $user->age = $request->age ? $request->age : $user->age;
            $user->password = $request->password ? $request->password : $user->password;
            $user->save();
            return $user;
        }else{
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

    }
}

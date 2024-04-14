<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    public function makeRequest(Request $request) 
    {
        $BloodRequest  = new BloodRequest();
        $BloodRequest->from_id = $request->from_id;
        $BloodRequest->to_id = $request->to_id;
        $BloodRequest->status = $request->status;
        $BloodRequest->distance = $request->distance;
        $BloodRequest->donor_type = $request->donor_type;
        $BloodRequest->blood_type = $request->blood_type;
        $BloodRequest->sender_type = $request->sender_type;
        $BloodRequest->save();
        return $BloodRequest;
    }


    public function getRequests() 
    {
        $BloodRequests = BloodRequest::all();
        return $BloodRequests;
    }

    public function updateRequest($id, Request $request) 
    {
        $BloodRequest = BloodRequest::find($id);
        $BloodRequest->status = $request->status;
        $BloodRequest->save();
        return $BloodRequest;
    }

    public function deleteRequest($id) 
    {
        $BloodRequest = BloodRequest::find($id);
        $BloodRequest->delete();
        return $BloodRequest;
    }
}

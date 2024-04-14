<?php

namespace App\Http\Controllers;

use App\Models\DonateRequests;
use Illuminate\Http\Request;

class DonateRequestsController extends Controller
{
    public function saveDonateRequest(Request $request)
    {
        $Donate_Request = new DonateRequests();
        $Donate_Request->from_id = $request->from_id;
        $Donate_Request->to_id = $request->to_id;
        $Donate_Request->status = $request->status;
        $Donate_Request->distance = $request->distance;
        $Donate_Request->donor_type = $request->donor_type;
        $Donate_Request->blood_type = $request->blood_type;

        $Donate_Request->save();
        return $Donate_Request;
    }

    public function getDonateRequests()
    {
        $Donate_Requests = DonateRequests::all();
        return $Donate_Requests;
    }

    public function deleteDonateRequest($id)
    {
        $Donate_Requests = DonateRequests::find($id);
        $Donate_Requests->delete();
        return $Donate_Requests;
    }

    public function updateDonateRequest(Request $request, $id)
    {
        $Donate_Requests = DonateRequests::find($id);
        $Donate_Requests->status = $request->status;     
        $Donate_Requests->save();
        return $Donate_Requests;
    }


}

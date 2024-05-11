<?php

namespace App\Http\Controllers;

use App\Models\CarRequests;
use Illuminate\Http\Request;

class CarRequestsController extends Controller
{
    public function MakeRequest(Request $request){
        $carRequest = new CarRequests();
        $carRequest->name = $request->name;
        $carRequest->email= $request->email;
        $carRequest->phone = $request->phone;
        $carRequest->address = $request->address;
        $carRequest->message = $request->message;
        $carRequest->status = $request->status;

        $carRequest->save();
        return $request;
    }
    
    public function GetRequests(){
        $carRequests = CarRequests::all();
        return $carRequests;
    }

    public function GetRequest($id){
        $carRequest = CarRequests::find($id);
        return $carRequest;
    }

    public function deleteRequest($id){
        $carRequest = CarRequests::find($id);
        $carRequest->delete();
        return $carRequest;
    }

    public function updateRequest(Request $request, $id){
        $carRequest = CarRequests::find($id);
        $carRequest->status = $request->status;
        $carRequest->save();
        return $carRequest;
    }
}

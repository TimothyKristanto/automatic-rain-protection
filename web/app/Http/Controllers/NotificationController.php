<?php

namespace App\Http\Controllers;

use App\Models\SensorDetection;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function index(){
        $sensorDetections = SensorDetection::all();

        return view("notification", compact(
            "sensorDetections"
        ));
    }


}

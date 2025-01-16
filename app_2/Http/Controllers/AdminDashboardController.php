<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Photo;
use App\Models\Setting;
use App\Models\User;

use App\Models\passengerInformations;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Tourleader;
use App\Models\Supplier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user()->type; 

        $tourleaders = Tourleader::all();
        $airlines = Supplier::where('type','=','ATP')->get();
        $hotels = Hotel::all();
        $passengers = passengerInformations::all();

        return view('admin.dashboard', compact('tourleaders', 'airlines','hotels','user','passengers'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlertHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlertHistoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::user();
        $usercon = $user_id->id_user;    
        $alertHistory = AlertHistory::where('user_id', $usercon)->get();        
        return view('welcomeUsers', compact('alertHistory'));
    }    

}

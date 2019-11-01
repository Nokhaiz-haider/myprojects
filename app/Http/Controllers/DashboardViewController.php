<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardViewController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function all_candidates(){
        return view('dashboard/all-candidates');
    }

    public function scheduled_interviews(){
        return view('dashboard/scheduled-interviews');
    }

    public function evaluation_preliminary(){
        return view('dashboard/evaluation-preliminary');
    }

    public function evaluation_communication(){
        return view('dashboard/evaluation-communication');
    }

    public function evaluation_interview(){
        return view('dashboard/evaluation-interview');
    }
    
    public function allocation_dep(){
        return view('dashboard/allocation-dep');
    }
    
    public function vacancies(){
        return view('dashboard/vacancies');
    }
    
    public function pre_interview_checkin(){
        return view('dashboard/vacancies');
    }
    
    public function interviews_timing(){
        return view('dashboard/interviews-timing');
    }
}

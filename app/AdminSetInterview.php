<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AdminSetInterview extends Model
{
    public function set_interview_schedule(Request $request){
        
        $post = new admin_set_interview();

        $start_time = $request->input('start_time');
        #$start_time = $start_time - 12;
        // $start_time = strtotime($start_time);
        // $s_hour = date('H', $start_time);
        // $start_time = $s_hour - 12;
        // $start_time = $start_time.".00";

        $end_time = $request->input('end_time');
        #$end_time = $end_time - 12;
        $date = $end_time;
        $date = strtotime($date);
        $hours = date('H', $date);
        $hours--;
        $last_interview_start_time = $hours.".00.00";

        $checkBox = implode(',', $_POST['day']);

        $post->day_of_interviews = $checkBox;
        $post->start_time = $start_time;
        $post->last_interview_start = $last_interview_start_time;
        $post->end_time = $end_time;
        $post->interview_duration = $request->input('interview_duration');
        $post->min_hour = $request->input('min_hour');
        $post->total_appointments_current_day = 3;

        $post->save();

        return redirect('/interviews-timing');
    }
}

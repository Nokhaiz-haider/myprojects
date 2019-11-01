<?php 

namespace App\Traits;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\CandInterviews;
use App\AdminSetInterview;
/**
 * 
 */
trait InterviewTrait
{
    public function set_interview_schedule($cand_id){
        
        $data = CandInterviews::orderBy('updated_at', 'desc')->first();

        $inter = AdminSetInterview::all();

        $carbon = new Carbon();
        $today_date = $carbon->now('Asia/Karachi');
        $cand_last_interview_date = Carbon::parse($data['interview_date']);

        echo $today_date->toDateString();
        echo $cand_last_interview_date->toDateString();
        if($today_date->toDateString() >= $cand_last_interview_date->toDateString()){
            start:
            if($today_date->format('l')=='Monday'){
                  $check_day = $inter[0]['Tuesday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Tuesday'){
                    $check_day = $inter[0]['Wednesday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            } 
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Wednesday'){
                    $check_day = $inter[0]['Thursday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Thursday'){
                    $check_day = $inter[0]['Friday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{

                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Friday'){
                    $check_day = $inter[0]['Saturday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Saturday'){
                    $check_day = $inter[0]['Sunday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start;
                    }else{
                        $today_day_name = $today_date->add(1,'day')->toDateString();
                        if($data['interview_date']== $today_day_name){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                   
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Sunday'){
                $check_day = $inter[0]['Monday'];
                if($check_day=='0'){
                    $today_date = $today_date->add(1,'day');
                    goto start;
                }else{
                    $today_day_name = $today_date->add(1,'day')->toDateString();
                    if($data['interview_date']== $today_day_name){
                        if($data['end_time']!=$inter[0]['end_time']){
                            $interview_date = $today_date;
                            $start_time = $data['end_time'];
                            $duration = $inter[0]['duration'];
                            $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                            $last_interview_datetime = strtotime($combined_date_and_time);
                            $e = date('Y-m-d', $last_interview_datetime);   
                            $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                            $end_time = date('H:i:s', $interview_end_time);
                            $d = date('Y-m-d', $interview_end_time);
                            if( $d > $e){
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $today_date = $today_date->add(1,'day');
                            goto start_2;
                        }
                    }else{
                        $interview_date = $today_date;
                        $start_time = $inter[0]['start_time'];
                        $duration = $inter[0]['duration'];                                
                        $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                        $end_time = date('H:i:s', $interview_end_time);
                    }
                }
            }
        }else{
            $today_date = $cand_last_interview_date;
            start_2:
            if($today_date->format('l')=='Monday'){
                  $check_day = $inter[0]['Monday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Tuesday'){
                    $check_day = $inter[0]['Tuesday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }                        
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                   
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Wednesday'){
                    $check_day = $inter[0]['Wednesday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Thursday'){
                    $check_day = $inter[0]['Thursday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Friday'){
                    $check_day = $inter[0]['Friday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Saturday'){
                    $check_day = $inter[0]['Saturday'];
                    if($check_day=='0'){
                        $today_date = $today_date->add(1,'day');
                        goto start_2;
                    }else{
                        if($data['interview_date']== $today_date->toDateString()){
                            if($data['end_time']!=$inter[0]['end_time']){
                                $interview_date = $today_date;
                                $start_time = $data['end_time'];
                                $duration = $inter[0]['duration'];
                                $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                                $last_interview_datetime = strtotime($combined_date_and_time);
                                $e = date('Y-m-d', $last_interview_datetime);   
                                $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                                $end_time = date('H:i:s', $interview_end_time);
                                $d = date('Y-m-d', $interview_end_time);
                                if( $d > $e){
                                    $today_date = $today_date->add(1,'day');
                                    goto start_2;
                                }
                            }else{
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $interview_date = $today_date;
                            $start_time = $inter[0]['start_time'];
                            $duration = $inter[0]['duration'];                                
                            $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                            $end_time = date('H:i:s', $interview_end_time);
                        }
                    }
            }elseif($today_date->format('l')=='Sunday'){
                $check_day = $inter[0]['Sunday'];
                if($check_day=='0'){
                    $today_date = $today_date->add(1,'day');
                    goto start_2;
                }else{
                    if($data['interview_date']== $today_date->toDateString()){
                        if($data['end_time']!=$inter[0]['end_time']){
                            $interview_date = $today_date;
                            $start_time = $data['end_time'];
                            $duration = $inter[0]['duration'];
                            $combined_date_and_time = $data['interview_date'] . ' ' . $data['end_time'];
                            $last_interview_datetime = strtotime($combined_date_and_time);
                            $e = date('Y-m-d', $last_interview_datetime);   
                            $interview_end_time = strtotime("+".$duration."minutes", $last_interview_datetime);
                            $end_time = date('H:i:s', $interview_end_time);
                            $d = date('Y-m-d', $interview_end_time);
                            if( $d > $e){
                                $today_date = $today_date->add(1,'day');
                                goto start_2;
                            }
                        }else{
                            $today_date = $today_date->add(1,'day');
                            goto start_2;
                        }
                    }else{
                        $interview_date = $today_date;
                        $start_time = $inter[0]['start_time'];
                        $duration = $inter[0]['duration'];                                
                        $interview_end_time = strtotime("+".$duration."minutes", strtotime($start_time));
                        $end_time = date('H:i:s', $interview_end_time);
                    }
                }
            }
        }

        $post = new CandInterviews;
        $post->cand_id = $cand_id;
        $post->interview_date = $interview_date;
        $post->start_time = $start_time; 
        $post->end_time = $end_time;
        if($post->save()){
            return 'Interview Day '.$today_date->format('l').'<br>Date '.$interview_date.'<br>Start Time '.$start_time.'<br>End Time '. $end_time;
        }
    }
}

?>
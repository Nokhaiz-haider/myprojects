<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandStartReg;
use App\cand_internship;
use App\JobAdvertisment;
use Helpers\helpers;

class StartRegController extends Controller
{
    public function index(){
        $posts = JobAdvertisment::all();
        return view('welcome')->with('posts',$posts);
    }

    public function store(Request $request){

        $cand_id = random_num(6);
        $cnic = $request->input('cnic');
        $first_name = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
    
        $request->session()->put('cand_id', $cand_id);
        $request->session()->put('firstname', $first_name);
        $request->session()->put('lastname', $lastname);
        $request->session()->put('cand_cnic', $cnic);  
        $request->session()->put('email', $email);      

        $advert = $request->input('job_list');
        $refer = $request->input('person_refer');

        $optradio = $request->input('optradio');

        $post = new CandStartReg();
        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_firstname = $request->input('firstname');
        $post->cand_lastname = $request->input('lastname');
        $post->cand_cnic = $request->session()->get('cand_cnic');
        $post->cand_email = $request->input('email');
        $post->cand_cv = $request->input('cv');
        $post->cand_occurence = $optradio;
        
        if(!$advert==''){
            $post->occ_detail = $advert;
        }
        else if(!$refer=''){
            $post->occ_detail = $refer;
        }else{
            $post->occ_detail = 'N/A';
        }

        
        if($optradio=='Apply for internship'){
            $intern = new cand_internship();
            $intern->cand_id = $request->session()->get('cand_id');
            $intern->inst_name = $request->input('inst_name');
            $intern->degree_prog = $request->input('degree_program');
            $intern->degree_session = $request->input('session_period');
            $intern->intern_duration = $request->input('internship_duration');
            $intern->fields_interest = $request->input('field_of_interest');
            $intern->fyp_project = $request->input('final_year_project');
            $intern->fyp_promo = $request->input('fyp_promotion');
            $intern->fyp_help = $request->input('fyp_help');
            $intern->verify_letter = $request->input('inst_letter');

            $intern->save();
        }

        $post->save();

        return redirect('candidate/create');

    } 
}

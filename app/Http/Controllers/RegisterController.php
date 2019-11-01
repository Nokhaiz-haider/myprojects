<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\CandidateBasic;
use App\CandEducation;
use App\PreInterviewCheckin;
use App\CandLifeStyle;
use App\cand_life_styles_answers;
use App\Helpers;
use App\PreInterviewAnswers;
use App\CandLifeStyleAnswers;
use App\CandFuturePlans;
use App\Traits\InterviewTrait;

class RegisterController extends Controller
{
    use InterviewTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $questions_pre = PreInterviewCheckin::all();
        $questions_life = CandLifeStyle::all();
        $answers = cand_life_styles_answers::all();

        $data = [
            'quest'=>$questions_pre,
            'life_style'=>$questions_life,
            'answers_lifestyle'=>$answers
        ];

        return view("registration/register-candidate")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post = new CandidateBasic();
        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_cnic = $request->input('cand_cnic');
        $post->cnic_expDate = $request->input('cnicexpdate');
        $post->cand_fname = $request->input('cand_fname');
        $post->cand_lname = $request->input('cand_lname');
        $post->cand_father = $request->input('cand_father');
        $post->cand_mother = $request->input('cand_mother');
        $post->father_occ = $request->input('father_occupation');
        $post->mother_occ = $request->input('mother_occupation');
        $post->cand_gender = $request->input('cand_gender');
        $post->cand_marital = $request->input('cand_marital');
        $post->cand_dob = $request->input('cand_dob');
        $post->cand_age = $request->input('cand_age');
        $post->cand_nationality = $request->input('cand_nationality');
        $post->cand_religion = $request->input('cand_religion');
        $post->cand_section = $request->input('cand_section');
        $post->cand_caste = $request->input('cand_caste');
        $post->cand_domicile = $request->input('cand_domicile');
        $post->cand_email = $request->input('cand_email');
        $post->cand_phoneNo = $request->input('cand_phoneNo');
        $post->cand_mobileNo = $request->input('cand_mobileNo');
        $post->cand_city = $request->input('cand_city');
        $post->cand_province = $request->input('cand_province');
        $post->cand_address = $request->input('cand_address');
        
        $post->save();


        $question_count = \DB::table('pre_interview_checkins')->count();

        for($i=1; $i<=$question_count ; $i++) { 
            $quest = new PreInterviewAnswers();
            $quest->cand_id = $request->session()->get('cand_id');
            $quest->qs_id = $i;
            $quest->qs_answer = $request->input('optionsRadios_'.$i);
            $quest->qs_comments = $request->input('comments_'.$i);
            $quest->save();
        }
        

        $q_count = \DB::table('cand_life_styles')->count();

        for($i=1; $i<=$q_count ; $i++) { 
            $quest = new CandLifeStyleAnswers();
            $quest->cand_id = $request->session()->get('cand_id');
            $quest->question_id = $i;
            $quest->question_answr = $request->input('cand_section_'.$i);
            if($i==2){
                
                $quest->distance_home = $request->input('lifestyle_distance');
            }else {
                $quest->distance_home = 'null';
            }
            $quest->save();
        }
        
        $plan = new CandFuturePlans();
        $plan->cand_id = $request->session()->get('cand_id');
        $plan->subj_studied = $request->input('subj_studied');
        $plan->good_qual = $request->input('good_qual');
        $plan->weak_points = $request->input('weak_points');
        $plan->job_importance = $request->input('job_importance');
        $plan->save();

        $interview = $this->set_interview_schedule($request->session()->get('cand_id'));
        echo $interview;
        #return $q_count;
        #return redirect()->route('candidate.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
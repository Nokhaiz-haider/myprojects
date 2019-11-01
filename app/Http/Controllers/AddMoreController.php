<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandEducation;
use App\CandFamilyMembers;
use App\CandExperience;
use App\CandDiploma;
use App\CandDip;
use App\CandLanguage;
use App\CandSkills;
use App\PreInterviewAnswers;
use DB;


class AddMoreController extends Controller
{
    public function addFamilyMember(Request $request){
        
        $post = new CandFamilyMembers();
        $post->cand_id = $request->session()->get('cand_id');
        $post->member_name = $request->input('member_name');
        $post->member_age = $request->input('member_age');
        $post->member_gender = $request->input('member_gender');
        $post->member_relation = $request->input('member_relation');
        $post->member_qual = $request->input('member_qual');
        
        $post->save();
    }

    public function deleteFamilyMember($id){
        
        $family_member = DB::table('cand_family_members')->where('id',$id)->delete();
    }

    public function editFamilyMember(Request $request){

        $member_id = $request->input('edit_member_id');
        DB::table('cand_family_members')->where('id', $member_id )->update(array(
            
                'member_name'      => $request->input('edit_member_name'),
                'member_age'             => $request->input('edit_member_age'),
                'member_gender' => $request->input('edit_member_gender'),
                'member_relation'      => $request->input('edit_member_relation'),
                'member_qual'             => $request->input('edit_member_qual')
            )
        );
    }

    public function addEducation(Request $request){
        
        $post = new CandEducation();

        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_DegTitle = $request->input('degreetitle');
        $post->current_status = $request->input('educationstatus');
        $post->cand_CompYear = $request->input('completionyear');
        $post->cand_Institute = $request->input('cand_Institute');
        $post->cand_Obtmcgpa = $request->input('obtainedmarksorcgpa');
        $post->cand_Totmcgpa = $request->input('cand_Totmcgpa');

        $post->save();
    }

    public function deleteEducation($id){
        
        $education = DB::table('cand_education')->where('id',$id)->delete();
    }

    public function editEducation(Request $request){

        $education_id = $request->input('edit_education_id');
        DB::table('cand_education')->where('id', $education_id )->update(array(
            
                'cand_DegTitle'     => $request->input('edit_degree_title'),
                'current_status'    => $request->input('edit_education_status'),
                'cand_CompYear'     => $request->input('edit_completion_year'),
                'cand_Institute'    => $request->input('edit_institute'),
                'cand_Obtmcgpa'     => $request->input('edit_obtained_marks_cgpa'),
                'cand_Totmcgpa'     => $request->input('edit_total_marks_cgpa')
            )
        );
    }

    public function addExperience(Request $request){
        
        $post = new CandExperience();
        $check=$request->input('currentjobstatus');
        if($check=='Continue'){

            $post->cand_id = $request->session()->get('cand_id');
            $post->cand_OrgName = $request->input('org_name');
            $post->cand_job_status = $request->input('currentjobstatus');
            $post->cand_JobTitle = $request->input('jobtitle');
            $post->cand_StartDate = $request->input('startdate');
            $post->cand_EndDate = 'null';
            $post->cand_Totalexp = 'null';
        }else{
            $post->cand_id = $request->session()->get('cand_id');
            $post->cand_OrgName = $request->input('org_name');
            $post->cand_job_status = $request->input('currentjobstatus');
            $post->cand_JobTitle = $request->input('jobtitle');
            $post->cand_StartDate = $request->input('startdate');
            $post->cand_EndDate = $request->input('end_date');
            $post->cand_Totalexp = $request->input('total_exp');
        }

        $post->save();
    }

    public function deleteExperience($id){
        
        $experience = DB::table('cand_experiences')->where('id',$id)->delete();
    }

    public function editExperience(Request $request){

        $experience_id = $request->input('edit_experience_id');
        $check=$request->input('edit_current_job_status');
        if($check=='Continue'){
            DB::table('cand_experiences')->where('id', $experience_id )->update(array(
                    'cand_OrgName'     => $request->input('edit_organization_name'),
                    'cand_JobTitle'    => $request->input('edit_job_title'),
                    'cand_job_status'     => $request->input('edit_current_job_status'),
                    'cand_StartDate'    => $request->input('edit_experince_start_date'),
                    'cand_EndDate'     => 'null',
                    'cand_Totalexp'     => 'null'
                )
            );
        }else{
            DB::table('cand_experiences')->where('id', $experience_id )->update(array(
                
                'cand_OrgName'     => $request->input('edit_organization_name'),
                'cand_JobTitle'    => $request->input('edit_job_title'),
                'cand_job_status'     => $request->input('edit_current_job_status'),
                'cand_StartDate'    => $request->input('edit_experince_start_date'),
                'cand_EndDate'     => $request->input('edit_experince_end_date'),
                'cand_Totalexp'     => $request->input('edit_total_experience')
                )
            );
        }
    }

    public function addDiploma(Request $request){
        
        $post = new CandDip();

        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_dipname=$request->input('diplomaname');
        $post->cand_dipmonth = $request->input('durmonths');
        $post->cand_dipinst = $request->input('dipinstitute');
        $post->cand_dipdateofcomp = $request->input('dipdateofcomp');
       
        $post->save();
    }

    public function deleteDiploma($id){
        
        $experience = DB::table('cand_dips')->where('id',$id)->delete();
    }

    public function editDiploma(Request $request){
        $diploma_id = $request->input('edit_diploma_id');
        DB::table('cand_dips')->where('id', $diploma_id )->update(array(
            
                'cand_dipname'     => $request->input('edit_diploma_or_certification_name'),
                'cand_dipmonth'     => $request->input('edit_duration_months'),
                'cand_dipinst'    => $request->input('edit_institute'),
                'cand_dipdateofcomp'     => $request->input('edit_date_Of_completion')
            )
        );
    }

    public function addLanguage(Request $request){
        
        $post = new CandLanguage();

        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_Language = $request->input('language');

        $post->save();
    }

    public function deleteLanguage($id){
        
        $language = DB::table('cand_languages')->where('id',$id)->delete();
    }

    public function editLanguage(Request $request){
        $language_id = $request->input('edit_language_id');
        DB::table('cand_languages')->where('id', $language_id )->update(array(
            
                'cand_Language'     => $request->input('edit_language')
            )

        );
    }

    public function addSkill(Request $request){
        
        $post = new CandSkills();

        $post->cand_id = $request->session()->get('cand_id');
        $post->cand_SkillName = $request->input('skill');

        $post->save();
    }

    public function deleteSkill($id){
        
        $skill = DB::table('cand_skills')->where('id',$id)->delete();
    }

    public function editSkill(Request $request){
        $skill_id = $request->input('edit_skill_id');
        DB::table('cand_skills')->where('id', $skill_id )->update(array(
            
                'cand_SkillName'     => $request->input('edit_skill')
            )

        );
    }
}

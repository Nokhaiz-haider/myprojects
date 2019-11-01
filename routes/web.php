<?php

use Illuminate\Http\Request;

Auth::routes();
Route::get('/', 'StartRegController@index');
Route::resource('candidate', 'RegisterController');




Route::prefix('/view')->group(function(){
    Route::get('family-member',function(Request $request){$cand_id = $request->session()->get('cand_id'); $member=DB::table('cand_family_members')->where('cand_id', $cand_id)->get(); return view('registration/viewfamilymembers')->with('member',$member); })->name('view_family');
    Route::get('education',function(Request $request){ $cand_id = $request->session()->get('cand_id'); $education=DB::table('cand_education')->where('cand_id', $cand_id)->get();return view('registration/vieweducation')->with('education',$education);})->name('education');
    Route::get('experience',function(Request $request){ $cand_id = $request->session()->get('cand_id'); $experience=DB::table('cand_experiences')->where('cand_id', $cand_id)->get(); return view('registration/viewexperience')->with('experience',$experience);})->name('experience');
    Route::get('diploma',function(Request $request){ $cand_id = $request->session()->get('cand_id'); $diploma=DB::table('cand_dips')->where('cand_id', $cand_id)->get(); return view('registration/viewdiploma')->with('diploma',$diploma);})->name('diploma');
    Route::get('language',function(Request $request){ $cand_id = $request->session()->get('cand_id'); $language=DB::table('cand_languages')->where('cand_id', $cand_id)->get(); return view('registration/viewlanguage')->with('language',$language); })->name('language');
    Route::get('skill',function(Request $request){ $cand_id = $request->session()->get('cand_id'); $skill=DB::table('cand_skills')->where('cand_id', $cand_id)->get(); return view('registration/viewskill')->with('skill',$skill); })->name('skill');
});

Route::prefix('/add')->group(function(){

    Route::get('family-member','AddMoreController@addFamilyMember')->name('add_family_member');
    Route::post('family-member','AddMoreController@addFamilyMember')->name('add_family_member');
    Route::get('education','AddMoreController@addEducation')->name('add_education');
    Route::post('education','AddMoreController@addEducation')->name('add_education');
    Route::get('experience','AddMoreController@addExperience')->name('add_experience');
    Route::post('experience','AddMoreController@addExperience')->name('add_experience');
    Route::get('diploma','AddMoreController@addDiploma')->name('add_diploma');
    Route::post('diploma','AddMoreController@addDiploma')->name('add_diploma');
    Route::get('languages','AddMoreController@addLanguage')->name('add_languages');
    Route::post('languages','AddMoreController@addLanguage')->name('add_languages');
    Route::get('skill','AddMoreController@addSkill')->name('add_skill');
    Route::post('skill','AddMoreController@addSkill')->name('add_skill');

});

Route::get('deleteFamilyMember/{id}','AddMoreController@deleteFamilyMember')->name('deleteFamilyMember');

Route::get('deleteEducation/{id}','AddMoreController@deleteEducation')->name('deleteEducation');

Route::get('deleteExperience/{id}','AddMoreController@deleteExperience')->name('deleteExperience');

Route::get('deleteDiploma/{id}','AddMoreController@deleteDiploma')->name('deleteDeploma');

Route::get('deleteLanguage/{id}','AddMoreController@deleteLanguage')->name('deleteLanguage');

Route::get('deleteSkill/{id}','AddMoreController@deleteSkill')->name('deleteSkill');


Route::prefix('/edit')->group(function(){

    Route::get('family-member','AddMoreController@editFamilyMember')->name('edit_family_member');
    Route::post('family-member','AddMoreController@editFamilyMember')->name('edit_family_member');
    Route::get('education','AddMoreController@editEducation')->name('editeducation');
    Route::post('education','AddMoreController@editEducation')->name('editeducation');
    Route::get('experience','AddMoreController@editExperience')->name('editexperience');
    Route::post('experience','AddMoreController@editExperience')->name('editexperience');
    Route::get('diploma','AddMoreController@editDiploma')->name('editdiploma');
    Route::post('diploma','AddMoreController@editDiploma')->name('editdiploma');
    Route::get('language','AddMoreController@editLanguage')->name('editlanguage');
    Route::post('language','AddMoreController@editLanguage')->name('editlanguage');
    Route::get('skill','AddMoreController@editSkill')->name('editSkill');
    Route::post('skill','AddMoreController@editSkill')->name('editSkill');

});




Route::get('/start-register','StartRegController@store')->name('cand_start_reg');


Route::prefix('/home')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/all-candidates','DashboardViewController@all_candidates')->name('all-candidates');
    Route::get('/scheduled-interviews','DashboardViewController@scheduled_interviews')->name('scheduled-interviews');
    Route::get('/evaluation-preliminary','DashboardViewController@evaluation_preliminary')->name('evaluation-preliminary');
    Route::get('/evaluation-communication','DashboardViewController@evaluation_communication')->name('evaluation-communication');
    Route::get('/evaluation-interview','DashboardViewController@evaluation_interview')->name('evaluation-interview');
    Route::get('/allocation-dep','DashboardViewController@allocation-dep')->name('allocation-dep');
    Route::get('/vacancies','DashboardViewController@vacancies')->name('vacancies');
    Route::get('/pre-interview-checkin','DashboardViewController@pre_interview_checkin')->name('pre-interview-checkin');
    Route::get('/interviews-timing','DashboardViewController@interviews_timing')->name('interviews-timing');
    Route::post('/interviews-timing', 'SetInterviewController@set_interview_schedule')->name('interviews-timing');

});
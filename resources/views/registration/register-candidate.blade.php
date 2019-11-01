@extends('layouts.register-header')

@section('title','HRM | Registration Candidate')

@section('register-content')
    
<div class="container-fluid">
    <div class="container">
        <div id="customscroll">
                {{ Form::open(['action' => 'RegisterController@store','id'=>'signup-form', 'class'=>'signup-form', 'method'=>'POST']) }}
                {!! csrf_field() !!}    			
                <div>				
                    <h3>Basic Information</h3>
                    <fieldset>
                        <h2>Basic Information</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group" style="display:none;">
                                        <input type="text" class="form-control" name="candid" value="{{ session()->get('cand_id') }}" readonly>
                                    </div>
                                </div>                                    
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="cand_fname">First Name</label>
                                        <input type="text" class="form-control" name="cand_fname" value="{{ session()->get('firstname') }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="cand_lname">Last Name</label>
                                        <input type="text" class="form-control" value="{{ session()->get('lastname') }}" name="cand_lname" readonly>
                                    </div>
                                </div>	
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_father">Father Name</label>
                                        <input type="text" class="form-control" name="cand_father">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_mother">Mother Name</label>
                                        <input type="text" class="form-control" name="cand_mother" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_father">Father Occupation</label>
                                        <input type="text" class="form-control" name="father_occupation">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_mother">Mother Occupation</label>
                                        <input type="text" class="form-control" name="mother_occupation">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_dob">Date Of Birth</label>
                                        <input id="dobpicker" class="form-control datepicker" name="cand_dob">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" id="agecalulate" class="form-control" name="cand_age" readonly>
                                    
                                    </div>
                                </div>                                    
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="cand_gender">
                                            <option value="" selected="selected" value="default" disabled="disabled"> Select </option>										
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>									
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="cand_marital">Marital Status</label>
                                        <select class="form-control" name="cand_marital">
                                            <option value="" selected="selected" value="default" disabled="disabled"> Select </option>										
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Separate">Separate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="cnicno">CNIC NO</label>
                                        <input type="text" class="form-control" value="{{ session()->get('cand_cnic') }}" name="cand_cnic" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="cnicexpdate">CNIC Expiry Date</label>
                                        <input type="text" class="form-control" id="cnicexpdate" name="cnicexpdate">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control" name="cand_religion">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="setion">Section</label>
                                        <input type="text" class="form-control" name="cand_section">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="caste">Caste</label>
                                        <input type="text" class="form-control" name="cand_caste">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" class="form-control" name="cand_nationality">
                                    </div>
                                </div>                                    								
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="domicile">Domicile</label>
                                        <input type="text" class="form-control" name="cand_domicile">
                                    </div>
                                </div>
                            </div>
                            <h2 style="padding-top:45px">Contact Information</h2>
                            <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="emailaddress">Email Address</label>
                                        <input type="email" class="form-control" value="{{ session()->get('email') }}" name="cand_email" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="phoneno">Phone No</label>
                                        <input type="number" class="form-control" name="cand_phoneNo">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="mobileno">Mobile No</label>
                                        <input type="number" class="form-control" name="cand_mobileNo">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="cand_city">
                                    </div>
                                </div>	
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <input type="text" class="form-control" name="cand_province">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="cand_address">
                                    </div>
                                </div>
                            </div>							

                        </div>
                    </fieldset>

                    <h3>Family Member Infomation</h3>
                    <fieldset>
                        <h2>Family Member Infomation</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <form id="form_add_family_members">
                        <div class="fieldset-content" id="family_member">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fmname">Name</label>
                                        <input type="text" class="form-control" id="member_name" name="member_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fmage">Age</label>
                                        <input type="number" class="form-control" id="member_age" name="member_age">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fmgender">Gender</label>
                                        <select class="form-control" id="member_gender" name="member_gender">
                                            <option value="" selected="selected" disabled="disabled"> </option>										
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fmrelation">Relation</label>
                                        <select class="form-control" id="member_relation" name="member_relation">
                                            <option value="" selected="selected" disabled="disabled"> </option>										
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>                                                 
                                            <option value="Brother">Brother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Husbend">Husbend</option>
                                            <option value="Wife">Wife</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>                                                  
                                        </select>
                                    </div>
                                </div>	
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fmqualification">Qualification</label>
                                        <input type="text" class="form-control" id="member_qual" name="member_qual">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button" onclick="addFamilyMember()" class="btn btn-primary btn-block" id="AddFamilyInfo" style="margin-top:25px">Add</button>
                                    </div>								
                                </div>
                            </div>
                            <div id="editmemberalert" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                <strong>Success!</strong> You have successfully update your information.
                            </div>
                            <div id="ViewFamilyMember">
                            </div>
                        </div>
                        </form>	
                    </fieldset>

                    <h3>Add Education</h3>
                    <fieldset>
                        <h2>Add Education</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content" id="candeducation">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="degreetitle">Degree Title</label>
                                        <input type="text" id="degreetitle" class="form-control" name="degreetitle">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="educationstatus">Status</label>
                                        <select class="form-control" id="educationstatus" name="educationstatus">
                                            <option value="" selected="selected" disabled="disabled"> </option>										
                                            <option value="Completed">Completed</option>
                                            <option value="Continue">Continue</option>                                               
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="completionyear">Completion Year</label>
                                        <input type="text" class="form-control date-picker-year" id="completionyear" name="completionyear">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="institue">Institute</label>
                                        <input type="text" class="form-control" id="cand_Institute" name="cand_Institute">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="obtainedmarksorcgpa">Obtained Marks / CGPA</label>
                                        <input type="text" class="form-control" id="obtainedmarksorcgpa" name="obtainedmarksorcgpa">
                                    </div>
                                </div>	
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="totalmarkscgpa">Total Marks / CGPA</label>
                                        <input type="text" class="form-control" id="cand_Totmcgpa" name="cand_Totmcgpa">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" onclick="addEducation()" id="AddEducation" style="margin-top:25px">Add</button>
                                    </div>								
                                </div>
                            </div>
                            <div id="editeducationalert" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                    <strong>Success!</strong> You have successfully update your information.
                                </div>                            
                            <div id="ViewEducation">
                            </div>
                        </div>
                    </fieldset>
                    
                    <h3>Add Experience</h3>
                    <fieldset>
                        <h2>Add Experience</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content" id="experience">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="organizationname">Organization Name</label>
                                        <input type="text" class="form-control" id="org_name" name="org_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jobtitle">Job Title</label>
                                        <input type="text" class="form-control" id="jobtitle" name="jobtitle">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="currentjobstatus">Current Job Status</label>
                                        <select class="form-control" id="currentjobstatus" name="currentjobstatus" onchange="remove_enddate()">
                                            <option value="" selected="selected" disabled="disabled"> </option>										
                                            <option value="Continue">Continue</option>  
                                            <option value="Left">Left</option>                                            
                                        </select>
                                    </div>
                                </div>                                 
                                <div class="col-lg-3" id="sdate">
                                    <div class="form-group">
                                        <label for="startdate">Start Date</label>
                                        <input type="text" class="form-control" id="startdate" name="startdate" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3" id="edate">
                                    <div class="form-group">
                                        <label for="enddate">End Date</label>
                                        <input type="text" class="form-control" id="end_date" name="end_date" readonly>
                                    </div>
                                </div>	
                                <div class="col-lg-6" id="texp">
                                    <div class="form-group">
                                        <label for="totalexperience">Total Experience</label>
                                        <input type="text" class="form-control" id="total_exp" name="total_exp">
                                    </div>
                                </div>							
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button" id="AddExperience" onclick="addExperience()" class="btn btn-primary btn-block" style="margin-top:25px">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div id="editexperiencealert" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                <strong>Success!</strong> You have successfully update your information.
                            </div>                            
                            <div id="ViewExperience">
                            </div>						
                        </div>
                    </fieldset>
                    
                    <h3>Diploma Or Certification</h3>
                    <fieldset>
                        <h2>Diploma Or Certification</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content" >
                            <div class="row" id="diploma">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="diplomacertification">Diploma Or Certification Name</label>
                                        <input type="text" class="form-control" id="diploma_name" name="diplomaname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="durationMonths">Duration Months</label>
                                        <input type="text" class="form-control" id="dur_months" name="durmonths">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="institute">Institute</label>
                                        <input type="text" class="form-control" id="institute" name="dipinstitute">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dateofcompletion">Date Of Completion</label>
                                        <input type="text" class="form-control" id="date_of_comp" name="dipdateofcomp">
                                    </div>
                                </div>						
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button"  id="AddDOrC" onclick="addDiploma()" class="btn btn-primary btn-block" style="margin-top:25px">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div id="editdiplomaalert" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                <strong>Success!</strong> You have successfully update your information.
                            </div>                            
                            <div id="ViewDiploma">
                            </div>							
                        </div>
                    </fieldset>

                    <h3>Language Or Skill</h3>
                    <fieldset>
                        <h2>Language Or Skill</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content" id="lang_skill">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <input type="text" class="form-control" id="language" name="language">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button" onclick="addLanguage()" id="AddLanguage" class="btn btn-primary btn-block" style="margin-top:25px">Add More</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Skill">Skill</label>
                                        <input type="text" class="form-control" id="skill" name="skill">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button type="button" onclick="addSkill()" id="AddSkill" class="btn btn-primary btn-block" style="margin-top:25px">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div id="editlanguageskillalert" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                <strong>Success!</strong> You have successfully update your information.
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div id="ViewLanguage">
                                    </div>
                                </div>	
                                <div class="col-lg-6">
                                    <div id="ViewSkill">
                                    </div>
                                </div>
                            </div>		
                        </div>
                    </fieldset>

                    <h3>Pre Interview Checkin</h3>
                    <fieldset>
                        <h2>Pre Interview Checkin</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content">
                            <div class="row" style="color: white;background-color: #212529;padding: 10px;font-weight: bold;">
                                <div class="col-lg-1">
                                        Sr. No 
                                </div>
                                <div class="col-lg-6">
                                        Question 
                                 </div>
                                 <div class="col-lg-2">
                                        Select Yes / No
                                 </div>
                                 <div class="col-lg-3">
                                        Write Your Comments
                                 </div>
                            </div>
                            <div class="row" style="padding:15px;">
                            @if (!empty($quest))
                            <?php $i=1; ?>
                            @foreach ($quest as $data)
                                <div class="col-lg-1">{{$i}}</div>
                                <div class="col-lg-6">{{$data->qs_description}} </div>
                                <div class="col-lg-2">
                                    <label class="radio-inline"><input type="radio" name="optionsRadios_{{$i}}" value="Yes"> Yes</label>
                                    <label class="radio-inline"><input type="radio" name="optionsRadios_{{$i}}" value="No">No</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_{{$i}}" placeholder="Write Comments if (Any)">
                                    </div>
                                </div>
                                <hr style="width:100%">
                                <?php $i++; ?>
                                @endforeach
                        @endif
                            </div>                            
                            
                        </div>
                    </fieldset>

                    <h3>Questioniar About Life Style</h3>
                    <fieldset>
                        <h2>Questioniar About Life Style</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row" style="border: 2px solid black;">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                            <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">Sr. No:</th>
                                                <th scope="col">Question</th>
                                                <th scope="col">Select Your Answer</th>
                                                </tr>
                                            </thead class="thead-dark">
                                            <tbody>
                                                @if (!empty($life_style))
                                                        <?php $i=1; ?>
                                                    @foreach ($life_style as $data)
                                                        
                                                    
                                                        <tr>
                                                        <th scope="row">{{$i}}</th>
                                                            <td>
                                                                {{$data->lifeqs_description}}
                                                            </td>
                                                            <td>
                                                            @if ($answers_lifestyle)
                                                            <select class="form-control" name="cand_section_{{$i}}">
                                                                    <option value="" selected="selected" disabled="disabled">-- Select One --</option>
                                                                    
                                                                    @foreach ($answers_lifestyle as $ans)
                                                                @if ($data->id==$ans->lifeqs_description_id)
                                                                    
                                                                
                                                                        
                                                                <option value="{{$ans->lifeqs_description_answer}}">{{$ans->lifeqs_description_answer}}</option>
                                                                
                                                                @endif 
                                                                @endforeach
                                                                </select>
                                                                    @if ($data->id==2)
                                                                    <input type="text" class="form-control" id="lifestyle_distance" name="lifestyle_distance">
                                                                    @endif
                                                            @endif
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    @endforeach  
                                                        
                                                @endif
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>						
                        </div>
                    </fieldset>

                    <h3>Future Plan or Goal In Life</h3>
                    <fieldset>
                        <h2>Future Plan or Goal In Life</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="ycossaisoyp">Your Comments On Subject Studied And Its Scope On Your Profession</label>
                                        <textarea class="form-control" rows="5" id="ycossaisoyp" name="subj_studied"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wdtgq">Write Down Three Good Qualities</label>
                                        <textarea class="form-control" rows="5" id="wdtgq" name="good_qual"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wdatwp">Write Down Any Three Weak Points</label>
                                        <textarea class="form-control" rows="5" id="wdatwp" name="weak_points"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wdatwp">How Important This Job Will Be (If You Get An Opportunity)</label>
                                        <textarea class="form-control" rows="5" id="wdatwp" name="job_importance"></textarea>
                                    </div>											
                                </div>
                            </div>						
                        </div>
                    </fieldset>						
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('dashboard.include.master')

@section('title','HRM | Allocation Dep')

@section('spasific-stylesheets')

        <!--alerts CSS -->
        <link href="{{asset('dashboard-files/vendors/bower_components/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('page-wise-style')

        <style>
            .tableFixHead          { overflow-y: auto; height: 350px; }
            .tableFixHead thead th { position: sticky; top: 0; z-index:2 }
            /* Just common table stuff. Really. */
            table  { border-collapse: collapse; width: 100%; }
            th, td { padding: 8px 16px; }
            th     { background:#eee; }
        </style>
@endsection

@section('main-content')

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid pt-25">	
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                            <div class="panel panel-default card-view  pa-0" style="height: 420px;">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body  pa-0">
                                        <div class="profile-box">
                                            <div class="profile-cover-pic">
                                                <div class="fileupload btn btn-default">
                                                    <span class="btn-text">edit</span>
                                                    <input class="upload" type="file">
                                                </div>
                                                <div class="profile-image-overlay"></div>
                                            </div>
                                            <div class="profile-info text-center">
                                                <div class="profile-img-wrap">
                                                    <img class="inline-block mb-10" src="{{asset('dashboard-files/dist/img/mock1.jpg')}}" alt="user"/>
                                                    <div class="fileupload btn btn-default">
                                                        <span class="btn-text">edit</span>
                                                        <input class="upload" type="file">
                                                    </div>
                                                </div>	
                                                <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">Madalyn Rascon</h5>
                                                <h6 class="block capitalize-font pb-20">Developer Geek</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <div class="panel panel-default card-view pa-0">
                                <div class="panel-wrapper collapse in">
                                    <div  class="panel-body pb-0">
                                        <div  class="tab-struct custom-tab-1">
                                            <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                                <li class="active" role="presentation"><a  data-toggle="tab" id="BasicInformation_tab_8" role="tab" href="#BasicInformation_8" aria-expanded="false"><span>Basic Information</span></a></li>
                                                <li role="presentation" class="next">  <a aria-expanded="true"  data-toggle="tab" role="tab" id="FamilyMemberInfomation_tab_8" href="#FamilyMemberInfomation_8"><span>Family Member Infomation</span></a></li>
                                                <li role="presentation" class=""><a  data-toggle="tab" id="photos_tab_8" role="tab" href="#photos_8" aria-expanded="false"><span>San Docs</span></a></li>
                                                <li role="presentation" class="">      <a data-toggle="tab" id="Qualification_tab_8" role="tab" href="#Qualification_8" aria-expanded="false"><span>Qualification</span></a></li>
                                                <li role="presentation" class="">      <a data-toggle="tab" id="Experiences_tab_8" role="tab" href="#Experiences_8" aria-expanded="false"><span>Experience</span></a></li>
                                                <li class="dropdown" role="presentation">
                                                    <a  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false"><span>More</span> <span class="caret"></span></a>
                                                    <ul id="myTabDrop_7_contents"  class="dropdown-menu">
                                                        <li class=""><a  data-toggle="tab" id="DiplomaOrCertification_tab_8" role="tab" href="#DiplomaOrCertification_8" aria-expanded="true">Diploma Or Certification</a></li>
                                                        <li class=""><a  data-toggle="tab" id="LanguageOrSkill_tab_8" role="tab" href="#LanguageOrSkill_8" aria-expanded="true">Language Or Skill</a></li>
                                                        <li class=""><a  data-toggle="tab" id="PreInterviewCheckin_tab_8" role="tab" href="#PreInterviewCheckin_8" aria-expanded="false">Pre Interview Checkin</a></li>
                                                        <li class=""><a  data-toggle="tab" id="QuestioniarAboutLifeStyle_tab_8" role="tab" href="#QuestioniarAboutLifeStyle_8" aria-expanded="false">Questioniar About Life Style</a></li>
                                                        <li class=""><a  data-toggle="tab" id="FuturePlanOrGoalInLife_tab_8" role="tab" href="#FuturePlanOrGoalInLife_8" aria-expanded="false">Future Plan Or Goal In Life</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="users-nicescroll-bar">
                                                <div class="tab-content" id="myTabContent_8">
                                                    <div  id="BasicInformation_8" class="tab-pane fade active in" role="tabpanel">
                                                        <div class="row" style="margin:5px">
                                                            <div class="col-lg-12 "> <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">Basic Information</h5></div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group" style="display:none;">
                                                                    <input type="text" class="form-control" name="candid" value="" readonly="">
                                                                </div>
                                                            </div>                                    
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="cand_fname">First Name</label>
                                                                    <input type="text" class="form-control" name="cand_fname" value="" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="cand_lname">Last Name</label>
                                                                    <input type="text" class="form-control" value="" name="cand_lname" readonly="">
                                                                </div>
                                                            </div>	
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_father">Father Name</label>
                                                                    <input type="text" class="form-control" name="cand_father" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_mother">Mother Name</label>
                                                                    <input type="text" class="form-control" name="cand_mother" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_father">Father Occupation</label>
                                                                    <input type="text" class="form-control" name="father_occupation" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_mother">Mother Occupation</label>
                                                                    <input type="text" class="form-control" name="mother_occupation" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_dob">Date Of Birth</label>
                                                                    <input type="date" id="dobpicker" class="form-control datepicker" name="cand_dob" readonly>
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
                                                                    <select class="form-control" name="cand_gender" readonly>
                                                                        <option value="" selected="selected" disabled="disabled">-- Select Gender --</option>										
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>									
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="cand_marital">Marital Status</label>
                                                                    <select class="form-control" name="cand_marital" readonly>
                                                                        <option value="" selected="selected" disabled="disabled">-- Select Marital Status --</option>										
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
                                                                    <input type="text" class="form-control" value="" name="cand_cnic" placeholder="CNIC No" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="cnicexpdate">CNIC Expiry Date</label>
                                                                    <input type="date" class="form-control" name="cnicexpdate" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="religion">Religion</label>
                                                                    <select class="form-control" name="cand_religion" readonly>
                                                                        <option value="" selected="selected">-- Select Religion --</option>
                                                                        <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
                                                                        <option value="Agnostic">Agnostic</option>
                                                                        <option value="Atheist">Atheist</option>
                                                                        <option value="Baha'i">Baha'i</option>
                                                                        <option value="Buddhism">Buddhism</option>
                                                                        <option value="Cao Dai">Cao Dai</option>
                                                                        <option value="Chinese traditional religion">Chinese traditional religion</option>
                                                                        <option value="Christianity">Christianity</option>
                                                                        <option value="Hinduism">Hinduism</option>
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Jainism">Jainism</option>
                                                                        <option value="Juche">Juche</option>
                                                                        <option value="Judaism">Judaism</option>
                                                                        <option value="Neo-Paganism">Neo-Paganism</option>
                                                                        <option value="Nonreligious">Nonreligious</option>
                                                                        <option value="Rastafarianism">Rastafarianism</option>
                                                                        <option value="Secular">Secular</option>
                                                                        <option value="Shinto">Shinto</option>
                                                                        <option value="Sikhism">Sikhism</option>
                                                                        <option value="Spiritism">Spiritism</option>
                                                                        <option value="Tenrikyo">Tenrikyo</option>
                                                                        <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                                                                        <option value="Zoroastrianism">Zoroastrianism</option>
                                                                        <option value="primal-indigenous">primal-indigenous</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="setion">Section</label>
                                                                    <select class="form-control" name="cand_section" readonly>
                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>
                                                                        <option value="Shia">Shia</option>
                                                                        <option value="Sunni">Sunni</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="caste">Caste</label>
                                                                    <input type="text" class="form-control" name="cand_caste" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="nationality">Nationality</label>
                                                                    <select class="form-control" name="cand_nationality" readonly>
                                                                        <option value="" selected="selected" disabled="disabled">-- Select Nationality --</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                    								
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="domicile">Domicile</label>
                                                                    <input type="text" class="form-control" name="cand_domicile" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 "> <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">Contact Information</h5></div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="emailaddress">Email Address</label>
                                                                    <input type="email" class="form-control" value="" name="cand_email" placeholder="Enter Email Address" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="phoneno">Phone No</label>
                                                                    <input type="number" class="form-control" name="cand_phoneNo" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="mobileno">Mobile No</label>
                                                                    <input type="number" class="form-control" name="cand_mobileNo" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <input type="text" class="form-control" name="cand_city" readonly>
                                                                </div>
                                                            </div>	
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="province">Province</label>
                                                                    <input type="text" class="form-control" name="cand_province" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control" name="cand_address" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>	
                                                    <div  id="FamilyMemberInfomation_8" class="tab-pane fade" role="tabpanel">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Age</th>
                                                                                    <th>Gender</th>
                                                                                    <th>Relation</th>
                                                                                    <th>Qualification</th>								
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>Usman</th>
                                                                                    <th>27</th>
                                                                                    <th>Male</th>
                                                                                    <th>Brother</th>
                                                                                    <th>BSCS</th>	
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Usman</th>
                                                                                    <th>27</th>
                                                                                    <th>Male</th>
                                                                                    <th>Brother</th>
                                                                                    <th>BSCS</th>	
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Usman</th>
                                                                                    <th>27</th>
                                                                                    <th>Male</th>
                                                                                    <th>Brother</th>
                                                                                    <th>BSCS</th>	
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  id="photos_8" class="tab-pane fade" role="tabpanel">
                                                        <div class="col-md-12 pb-20">
                                                            <div class="gallery-wrap">
                                                                <div class="portfolio-wrap project-gallery">
                                                                    <ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
                                                                        <li  class="item"   data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock1.jpg')}}" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock1.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap">Bagwati</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock2.jpg')}}"   data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock2.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap">Not a Keyboard</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock3.jpg')}}" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock3.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap">Into the Woods</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock4.jpg')}}"  data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock4.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap"> Ultra Saffire</span>
                                                                            </a>
                                                                        </li>
                                                                        
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock5.jpg')}}" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock5.jpg')}}"  alt="Image description" />	
                                                                            <span class="hover-cap">Happy Puppy</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock6.jpg')}}"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock6.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap">Wooden Closet</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock7.jpg')}}" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock7.jpg')}}"  alt="Image description" />	
                                                                            <span class="hover-cap">Happy Puppy</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="item" data-src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock8.jpg')}}"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                                            <a href="">
                                                                            <img class="img-responsive" src="{{asset('dashboard-files/dist/img/gallery/equal-size/mock8.jpg')}}"  alt="Image description" />
                                                                            <span class="hover-cap">Wooden Closet</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div  id="Qualification_8" class="tab-pane fade" role="tabpanel">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Degree Title</th>
                                                                                    <th>Completion Year</th>
                                                                                    <th>Institue</th>
                                                                                    <th>Obtained Marks / CGPA</th>
                                                                                    <th>Total Marks / CGPA</th>								
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>BSCS</th>
                                                                                    <th>2015</th>
                                                                                    <th>Universty Of South Aisa</th>
                                                                                    <th>3.5</th>
                                                                                    <th>4.0</th>	
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>I.C.S</th>
                                                                                    <th>Superioir Group Of Colleges</th>
                                                                                    <th>2011</th>
                                                                                    <th>1100</th>
                                                                                    <th>930</th>	
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  id="Experiences_8" class="tab-pane fade" role="tabpanel">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Organization Name</th>
                                                                                    <th>Job Title</th>
                                                                                    <th>Start Date</th>
                                                                                    <th>End Date</th>
                                                                                    <th>Total Experience</th>									
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>National Saving Center</th>
                                                                                    <th>Techinal Assistant</th>
                                                                                    <th>1 SEP 2016</th>
                                                                                    <th>1 SEP 2018</th>
                                                                                    <th>2 Years</th>	
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>SoftTech</th>
                                                                                    <th>Web Developer</th>
                                                                                    <th>1 Aug 2015</th>
                                                                                    <th>1 Aug 2016</th>
                                                                                    <th>1 Year</th>	
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  id="DiplomaOrCertification_8" class="tab-pane fade" role="tabpanel">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Diploma Or Certification Name</th>
                                                                                    <th>Duration Months</th>
                                                                                    <th>Institute</th>
                                                                                    <th>Date Of Completion</th>									
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>CCNA</th>
                                                                                    <th>6 Months</th>
                                                                                    <th>Corvit</th>
                                                                                    <th>1 SEP 2018</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>CCNA</th>
                                                                                    <th>6 Months</th>
                                                                                    <th>Corvit</th>
                                                                                    <th>1 SEP 2018</th>
                                                                                </tr>																			
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>											
                                                    <div  id="LanguageOrSkill_8" class="tab-pane fade" role="tabpanel">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Language Name</th>								
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>English</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Panjabi</th>
                                                                                </tr>																			
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="table-wrap">
                                                                    <div class="table-responsive">
                                                                        <table class="table display product-overview" id="datable_1">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Skill Name</th>								
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>Climing</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Aerobatics</th>
                                                                                </tr>																			
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div  id="PreInterviewCheckin_8" class="tab-pane fade" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive-xs">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Sr. No:</th>
                                                                                <th scope="col">Question</th>
                                                                                <th scope="col">Select Yes / No</th>
                                                                                <th scope="col">Write Your Comments</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>Are You Sadiq &amp; Ameen?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_1" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_1" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_1" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>Will you stay in our Organization with Short / Medium / Long Term?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_2" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_2" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_2" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">3</th>
                                                                                <td>Did you pick up new products / Technology quickly?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_3" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_3" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_3" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td>Do you want to work while Attending College / University?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_4" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_4" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_4" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td>Do you consider yourself to be a good manager?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_5" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_5" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_5" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td>Do you have Credit Card?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_6" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_6" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_6" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td>Do you have a driving license?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_7" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_7" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_7" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">8</th>
                                                                                <td>Do you enjoy working under pressure?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_8" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_8" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_8" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">9</th>
                                                                                <td>Do you wish to work in a technical environment?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_9" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_9" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_9" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">10</th>
                                                                                <td>Do you know about Computer Basic?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_10" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_10" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_10" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">11</th>
                                                                                <td>Do you have your own Transport?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_11" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_11" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_11" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">12</th>
                                                                                <td>Do you ever apply for a Bank Loan?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_12" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_12" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_12" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">13</th>
                                                                                <td>Do you have a strong time management? If No then give the Reason.</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_13" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_13" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_13" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">14</th>
                                                                                <td>Do we make a contact with your last employer? If No then give Reason.</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_14" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_14" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_14" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">15</th>
                                                                                <td>Is your last employer / HR fired you from Job?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_15" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_15" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_15" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">16</th>
                                                                                <td>Is your mobile Sim is in your name?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_16" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_16" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_16" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">17</th>
                                                                                <td>Are you suitable for this job if Yes then How?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_17" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_17" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_17" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">18</th>
                                                                                <td>Your Salary Demand?</td>
                                                                                <td>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_18" value="Yes"> Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="optionsRadios_18" value="No"> No
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label class="sr-only" for="exampleInputGrocer1"></label>
                                                                                        <input type="text" class="form-control" id="exampleInputGrocer1" name="comments_18" placeholder="Write Comments if (Any)">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>	
                                                    <div  id="QuestioniarAboutLifeStyle_8" class="tab-pane fade" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Sr. No:</th>
                                                                                <th scope="col">Question</th>
                                                                                <th scope="col">Select Your Answer</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>
                                                                                    I am staying with
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Parents">Parents</option>

                                                                                        <option value="Family">Family</option>

                                                                                        <option value="In hostel ">In hostel </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>
                                                                                    Distance from my home to office (on daily basis) is
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Minutes">Minutes</option>

                                                                                        <option value="drive">drive</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">3</th>
                                                                                <td>
                                                                                    Mode of my conveyance is
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Personal conveyance">Personal conveyance</option>

                                                                                        <option value="By foot">By foot</option>

                                                                                        <option value="Public transport">Public transport</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td>
                                                                                    I am offering my Prayers
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Regular">Regular</option>

                                                                                        <option value="Irregular">Irregular</option>

                                                                                        <option value="Rarely ">Rarely </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td>
                                                                                    I am contributing in charity
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Most of the time">Most of the time</option>

                                                                                        <option value="Occasionally">Occasionally</option>

                                                                                        <option value="Very rare">Very rare</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td>
                                                                                    I am taking bath
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Twice per day">Twice per day</option>

                                                                                        <option value="Daily">Daily</option>

                                                                                        <option value="On alternate days ">On alternate days </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td>
                                                                                    I believe and implementing
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Excellent">Excellent</option>

                                                                                        <option value="Very good">Very good</option>

                                                                                        <option value="Normal personal hygiene">Normal personal hygiene</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">8</th>
                                                                                <td>
                                                                                    Tidy and clean vicinity is my
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Top priority">Top priority</option>

                                                                                        <option value="Priority">Priority</option>

                                                                                        <option value="Least priority">Least priority</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">9</th>
                                                                                <td>
                                                                                    Overall I
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Love general cleaning ">Love general cleaning </option>

                                                                                        <option value="Like general cleaning ">Like general cleaning </option>

                                                                                        <option value="Dislike general cleaning ">Dislike general cleaning </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">10</th>
                                                                                <td>
                                                                                    I like to spend my salary on myself
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="More than 50%">More than 50%</option>

                                                                                        <option value="50%">50%</option>

                                                                                        <option value="Less than 50%">Less than 50%</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">11</th>
                                                                                <td>
                                                                                    I am going for Shopping
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Very frequently">Very frequently</option>

                                                                                        <option value="Often">Often</option>

                                                                                        <option value="Never">Never</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">12</th>
                                                                                <td>
                                                                                    I always preferred my dressing
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Formal">Formal</option>

                                                                                        <option value="Casual">Casual</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">13</th>
                                                                                <td>
                                                                                    I am doing exercise
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Daily">Daily</option>

                                                                                        <option value="Sometime">Sometime</option>

                                                                                        <option value="Never">Never</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">14</th>
                                                                                <td>
                                                                                    Do we make a contact with your last employer? If No then give Reason.I am using my cell phone (after duty hours)
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Very Rear">Very Rear</option>

                                                                                        <option value="Usually">Usually</option>

                                                                                        <option value="Maximum time">Maximum time</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">15</th>
                                                                                <td>
                                                                                    I am keeping my cell phone while sleeping
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Silent or Switched off">Silent or Switched off</option>

                                                                                        <option value="In my room">In my room</option>

                                                                                        <option value="On my bed">On my bed</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">16</th>
                                                                                <td>
                                                                                    I am spending time on social media
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Never">Never</option>

                                                                                        <option value="Some time">Some time</option>

                                                                                        <option value="Maximum time">Maximum time</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">17</th>
                                                                                <td>
                                                                                    I am taking microwave heated food
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="No">No</option>

                                                                                        <option value="Yes">Yes</option>

                                                                                        <option value="N/A">N/A</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">18</th>
                                                                                <td>
                                                                                    I preferred to take my food at
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Home">Home</option>

                                                                                        <option value="Restaurant">Restaurant</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">19</th>
                                                                                <td>
                                                                                    I am smoker
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Never Smoke">Never Smoke</option>

                                                                                        <option value="Occasionally Smoking">Occasionally Smoking</option>

                                                                                        <option value="Chain Smoker">Chain Smoker</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">20</th>
                                                                                <td>
                                                                                    Source of my drinking water is
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Mineral">Mineral</option>

                                                                                        <option value="Filtered">Filtered</option>

                                                                                        <option value="Tap">Tap</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">21</th>
                                                                                <td>
                                                                                    My daily water intake is
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="High">High</option>

                                                                                        <option value="Little">Little</option>

                                                                                        <option value="Average">Average</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">22</th>
                                                                                <td>
                                                                                    Fruit is essential item of my daily food
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Yes">Yes</option>

                                                                                        <option value="No">No</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">23</th>
                                                                                <td>
                                                                                    I am taking fruit
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Daily">Daily</option>

                                                                                        <option value="Weekly">Weekly</option>

                                                                                        <option value="Biweekly">Biweekly</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">24</th>
                                                                                <td>
                                                                                    I am drinking milk
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Daily">Daily</option>

                                                                                        <option value="Some time">Some time</option>

                                                                                        <option value="Never">Never</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">25</th>
                                                                                <td>
                                                                                    I am taking cold/ fizzy drink
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Never">Never</option>

                                                                                        <option value="Some time">Some time</option>

                                                                                        <option value="Maximum time">Maximum time</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">26</th>
                                                                                <td>
                                                                                    My sleeping hours are
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="8 hours">8 hours</option>

                                                                                        <option value="More than 8 hours">More than 8 hours</option>

                                                                                        <option value="Less than 8 hours">Less than 8 hours</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">27</th>
                                                                                <td>
                                                                                    I met an accident in my life
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Never">Never</option>

                                                                                        <option value="Once">Once</option>

                                                                                        <option value="More than once">More than once</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">28</th>
                                                                                <td>
                                                                                    I became sick
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Never">Never</option>

                                                                                        <option value="Some time">Some time</option>

                                                                                        <option value="Maximum time">Maximum time</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">29</th>
                                                                                <td>
                                                                                    I am taking medicine
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="As Required">As Required</option>

                                                                                        <option value="Very Rear">Very Rear</option>

                                                                                        <option value="Very Rear">Very Rear</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">30</th>
                                                                                <td>
                                                                                    I am a diagnosed patient of
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Disease">Disease</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">31</th>
                                                                                <td>
                                                                                    I am fully aware of my medicine
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Yes">Yes</option>

                                                                                        <option value="No">No</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">32</th>
                                                                                <td>
                                                                                    I am checking my weight
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Regularly">Regularly</option>

                                                                                        <option value="Some time">Some time</option>

                                                                                        <option value="Never">Never</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">33</th>
                                                                                <td>
                                                                                    I am increasing my weight
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Normal">Normal</option>

                                                                                        <option value="Not increasing">Not increasing</option>

                                                                                        <option value="Too much">Too much</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">34</th>
                                                                                <td>
                                                                                    By nature most of the time I am
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Very calm">Very calm</option>

                                                                                        <option value="Moderate">Moderate</option>

                                                                                        <option value="Aggressive">Aggressive</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">35</th>
                                                                                <td>
                                                                                    By nature most of the time I am
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Cheered up">Cheered up</option>

                                                                                        <option value="Serious">Serious</option>

                                                                                        <option value="Depressed">Depressed</option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">36</th>
                                                                                <td>
                                                                                    I always wish to
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Seeking for improvement">Seeking for improvement</option>

                                                                                        <option value="Comfortable everywhere">Comfortable everywhere</option>

                                                                                        <option value="Stay on the top ">Stay on the top </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">37</th>
                                                                                <td>
                                                                                    My work pace is
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control" name="cand_section">
                                                                                        <option value="" selected="selected" disabled="disabled">-- Select One --</option>

                                                                                        <option value="Excellent">Excellent</option>

                                                                                        <option value="Good">Good</option>

                                                                                        <option value="Average ">Average </option>

                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>													
                                                    <div  id="FuturePlanOrGoalInLife_8" class="tab-pane fade" role="tabpanel">
                                                        <div class="row" style="margin:5px">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="ycossaisoyp">Your Comments On Subject Studied And Its Scope On Your Profession</label>
                                                                    <textarea class="form-control" rows="5" id="ycossaisoyp" name="ycossaisoyp"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="wdtgq">Write Down Three Good Qualities</label>
                                                                    <textarea class="form-control" rows="5" id="wdtgq" name="wdtgq"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="wdatwp">Write Down Any Three Weak Points</label>
                                                                    <textarea class="form-control" rows="5" id="wdatwp" name="wdatwp"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="wdatwp">How Important This Job Will Be (If You Get An Opportunity)</label>
                                                                    <textarea class="form-control" rows="5" id="wdatwp" name="wdatwp"></textarea>
                                                                </div>											
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                    
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container" style="display: none;">
                                        <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Evaluation</h6>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="pull-left inline-block refresh mr-15">
                                            <i class="zmdi zmdi-replay"></i>
                                        </a>
                                        <a href="#" class="pull-left inline-block full-screen mr-15">
                                            <i class="zmdi zmdi-fullscreen"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">

                                        <div class="table-wrap mt-5">
                                            <div class="table-responsive">
                                            <div class="tableFixHead">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>											  
                                                            <th>Question</th>
                                                            <th>Poor</th>
                                                            <th>Fair</th>
                                                            <th>Good</th>
                                                            <th>Very Good</th>
                                                            <th>Excellent</th>
                                                            <th>Exceptional</th>
                                                            <th>Comments</th>												
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>												  
                                                            <td>Speaking Skills</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">													
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Listening Skills</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">													
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Understanding of each question</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>		
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Reaction time to each Question</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>English Fluency</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Vocabulary choices</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Recommendation Of hiring</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Capacity for improvement</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Time to improvement ( Expectedly )</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Grammatical Structure & Tenses</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Pronunciation</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Knowledge of Medical Billing</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Appearance</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Confidence</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Topics of Presentation</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>Overall Assessment:</td>
                                                            <td>
                                                                <div class="checkbox checkbox-info">
                                                                    <input id="checkbox1" type="checkbox" checked="">
                                                                    <label for="checkbox1">  </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-danger">
                                                                    <input id="checkbox2" type="checkbox" checked="">
                                                                    <label for="checkbox2"> </label>
                                                                </div>										
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox3" type="checkbox" checked="">
                                                                    <label for="checkbox3"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-success">
                                                                    <input id="checkbox4" type="checkbox" checked="">
                                                                    <label for="checkbox4"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-warning">
                                                                    <input id="checkbox5" type="checkbox" checked="">
                                                                    <label for="checkbox5"> </label>
                                                                </div>	
                                                            </td>
                                                            <td>
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox6" type="checkbox" checked="">
                                                                    <label for="checkbox6"> </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control filled-input">
                                                            </td>
                                                        </tr>												  
                                                    </tbody>
                                                    
                                                </table>
                                            </div>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="panel panel-default card-view" style="height:445px">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Action</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row mt-5">
                                            <div class="col-sm-12 col-xs-12 mt-15">
                                                <button class="btn btn-success btn-rounded btn-block btn-anim" id="sa-custom"><i class="fa fa-thumbs-up"></i><span class="btn-text">Passed</span></button>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 mt-15">
                                                <button class="btn btn-warning btn-rounded btn-block btn-anim"><i class="fa fa-history"></i><span class="btn-text">Deffer</span></button>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 mt-15">
                                                <button class="btn btn-danger btn-rounded btn-block btn-anim"><i class="fa fa-thumbs-down"></i><span class="btn-text">Fails</span></button>
                                            </div>											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>				
                    </div>
                    <!-- /Row -->

                
                </div>
                <!-- Footer -->
                <footer class="footer container-fluid pl-30 pr-30">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>2019 &copy; Maaz Inforamtics. Developed by Development Department</p>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
                
            </div>
            <!-- /Main Content -->

@endsection

@section('script')

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="{{asset('dashboard-files/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


        <!-- Gallery JavaScript -->
        <script src="{{asset('dashboard-files/dist/js/isotope.js')}}"></script>
        <script src="{{asset('dashboard-files/dist/js/lightgallery-all.js')}}"></script>
        <script src="{{asset('dashboard-files/dist/js/froogaloop2.min.js')}}"></script>
        <script src="{{asset('dashboard-files/dist/js/gallery-data.js')}}"></script>	

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('dashboard-files/dist/js/jquery.slimscroll.js')}}"></script>

        <!-- Owl JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
        
        <!-- Sweet-Alert  -->
        <script src="{{asset('dashboard-files/vendors/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
        
        <script src="{{asset('dashboard-files/dist/js/sweetalert-data.js')}}"></script>
        <!-- Switchery JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- Fancy Dropdown JS -->
        <script src="{{asset('dashboard-files/dist/js/dropdown-bootstrap-extended.js')}}"></script>

        <!-- Init JavaScript -->
        <script src="{{asset('dashboard-files/dist/js/init.js')}}"></script>
    
@endsection
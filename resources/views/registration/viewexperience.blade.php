<table id="AddExperienceTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Organization Name</th>
            <th>Job Title</th>
            <th>Current Job Status</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Total Experience</th>
            <th>Action</th>										
        </tr>
    </thead>
    <tbody id="exp_tbody">
        @foreach ($experience as $data)
        <tr>
            <td>{{$data->cand_OrgName}}</td>
            <td>{{$data->cand_JobTitle}}</td>
            <td>{{$data->cand_job_status}}</td>
            <td>{{$data->cand_StartDate}}</td>
            <td>{{$data->cand_EndDate}}</td>
            <td>{{$data->cand_Totalexp}}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick='deleteExperience({{$data->id}})' ><i class="fa fa-trash"></i></button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#experienceModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="experienceModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Experience Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="edit_experience{{$data->id}}">
                            <form class="form-horizontal">
                            <div class="row form-group" style="display:none">
                                <label class="col-sm-3 control-label" for="edit_experience_id">ID</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_experience_id" name="edit_experience_id" value="{{$data->id}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_organization_name">Organization Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_organization_name{{$data->id}}" name="edit_organization_name" value="{{$data->cand_OrgName}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_job_title">Job Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edit_job_title{{$data->id}}" name="edit_job_title" value="{{$data->cand_JobTitle}}">
                                </div>
                            </div>                      
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_current_job_status">Current Job Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="edit_current_job_status{{$data->id}}" name="edit_current_job_status">
                                        <option value="" @if($data->cand_job_status == '') selected="selected" @endif disabled="disabled" > </option>										
                                        <option value="Continue"@if($data->cand_job_status == 'Continue') selected="selected" @endif >Continue</option>  
                                        <option value="Left" @if($data->cand_job_status == 'Left') selected="selected" @endif>Left</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_experince_start_date">Start Date</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_experince_start_date{{$data->id}}" name="edit_experince_start_date" value="{{$data->cand_StartDate}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_experince_end_date">End Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edit_experince_end_date{{$data->id}}" name="edit_experince_end_date" value="{{$data->cand_EndDate}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-3 control-label" for="edit_total_experience">Total Experience</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_total_experience{{$data->id}}" name="edit_total_experience" value="{{$data->cand_Totalexp}}">
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" onclick="editExperience({{$data->id}})" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <script>
            $('#experienceModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach
    </tbody>
</table>



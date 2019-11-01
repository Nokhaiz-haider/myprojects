<table id="AddEducationTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Degree Title</th>
            <th>Staus</th>
            <th>Completion Year</th>
            <th>Institue</th>
            <th>Obtained Marks / CGPA</th>
            <th>Total Marks / CGPA</th>
            <th>Action</th>										
        </tr>
    </thead>
    <tbody id="edu_tbody">
        @foreach ($education as $data)
        <tr>
          <td>{{$data->cand_DegTitle}}</td>
          <td>{{$data->current_status}}</td>
          <td>{{$data->cand_CompYear}}</td>
          <td>{{$data->cand_Institute}}</td>
          <td>{{$data->cand_Obtmcgpa}}</td>
          <td>{{$data->cand_Totmcgpa}}</td>
          <td>
              <button type="button" class="btn btn-danger" onclick='deleteEducation({{$data->id}})' ><i class="fa fa-trash"></i></button>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#educationModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
              <!-- Modal -->
              <div class="modal fade" id="educationModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Education Information</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="edit_education{{$data->id}}">
                      <form class="form-horizontal">
                        <div class="row form-group" style="display:none">
                          <label class="col-sm-3 control-label" for="edit_education_id">ID:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_education_id" name="edit_education_id" value="{{$data->id}}">
                          </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_degree_title">Degree Title:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_degree_title{{$data->id}}" name="edit_degree_title" value="{{$data->cand_DegTitle}}">
                          </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-3 control-label" for="edit_educations_status">Status:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="edit_education_status{{$data->id}}" name="edit_education_status">
                                    <option value="" @if($data->current_status == '') selected="selected" @endif disabled="disabled" > </option>										
                                    <option value="Completed" @if($data->current_status == 'Completed') selected="selected" @endif>Completed</option>
                                    <option value="Continue"@if($data->current_status == 'Continue') selected="selected" @endif >Continue</option>  
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_completion_year">Completion Year:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_completion_year{{$data->id}}" name="edit_completion_year" value="{{$data->cand_CompYear}}">
                          </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-3 control-label" for="edit_institute">Institute:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_institute{{$data->id}}" name="edit_institute" value="{{$data->cand_Institute}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-3 control-label" for="edit_obtained_marks_cgpa">Obtained Marks / CGPA:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_obtained_marks_cgpa{{$data->id}}" name="edit_obtained_marks_cgpa" value="{{$data->cand_Obtmcgpa}}">
                            </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_total_marks_cgpa">Total Marks / CGPA:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="edit_total_marks_cgpa{{$data->id}}" name="edit_total_marks_cgpa" value="{{$data->cand_Totmcgpa}}">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" onclick="editEducation({{$data->id}})" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
          </td>
        </tr>
        <script>
          $('#educationModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach
    </tbody>
</table>

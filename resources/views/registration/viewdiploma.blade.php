<table id="AddDOrCTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Diploma Or Certification Name</th>
            <th>Duration Months</th>
            <th>Institute</th>
            <th>Date Of Completion</th>
            <th>Action</th>            										
        </tr>
    </thead>
    <tbody id="diploma_tbody">
        @foreach ($diploma as $data)
        <tr>
            <td>{{$data->cand_dipname}}</td>
            <td>{{$data->cand_dipmonth}}</td>
            <td>{{$data->cand_dipinst}}</td>
            <td>{{$data->cand_dipdateofcomp}}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick='deleteDiploma({{$data->id}})' ><i class="fa fa-trash"></i></button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#diplomaModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="diplomaModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Diploma Or Certification Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="edit_diploma{{$data->id}}">
                        <form class="form-horizontal">
                          <div class="row form-group" style="display:none">
                            <label class="col-sm-3 control-label" for="edit_diploma_id">ID</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="edit_diploma_id" name="edit_diploma_id" value="{{$data->id}}">
                            </div>
                          </div>
                          <div class="row form-group">
                            <label class="col-sm-3 control-label" for="edit_diploma_or_certification_name">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="edit_diploma_or_certification_name{{$data->id}}" name="edit_diploma_or_certification_name" value="{{$data->cand_dipname}}">
                            </div>
                          </div>
                          <div class="row form-group">
                            <label class="col-sm-3 control-label" for="edit_duration_months">Duration Months</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="edit_duration_months{{$data->id}}" name="edit_duration_months" value="{{$data->cand_dipmonth}}">
                            </div>
                          </div>
                          <div class="row form-group">
                              <label class="col-sm-3 control-label" for="edit_institute">Institute</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="edit_institute{{$data->id}}" name="edit_institute" value="{{$data->cand_dipinst}}">
                              </div>
                          </div>
                          <div class="row form-group">
                              <label class="col-sm-3 control-label" for="edit_date_Of_completion">Date Of Completion</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="edit_date_Of_completion{{$data->id}}" name="edit_date_Of_completion" value="{{$data->cand_dipdateofcomp}}">
                              </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="editDiploma({{$data->id}})" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </td>            
        </tr>
        <script>
            $('#diplomaModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach    
    </tbody>
</table>
    
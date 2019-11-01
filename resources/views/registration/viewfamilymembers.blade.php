<table id="AddFamilyInfoTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr style="background-color: lightsalmon;">
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Relation</th>
            <th>Qualification</th>
            <th>Action</th>										
        </tr>
    </thead>
    <tbody id="fam_tbody">
        @foreach ($member as $data)
        <tr>
          <td>{{$data->member_name}}</td>
          <td>{{$data->member_age}}</td>
          <td>{{$data->member_gender}}</td>
          <td>{{$data->member_relation}}</td>
          <td>{{$data->member_qual}}</td>
          <td>
              <button type="button" class="btn btn-danger" onclick='deleteFamilyMember({{$data->id}})' ><i class="fa fa-trash"></i></button>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#familymembersModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
              <!-- Modal -->
              <div class="modal fade" id="familymembersModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Family Member Information</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="edit_family_member{{$data->id}}">
                      <form class="form-horizontal">
                        <div class="row form-group" style="display:none">
                          <label class="col-sm-3 control-label" for="edit_member_id">ID:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_member_id" name="edit_member_id" placeholder="Enter ID" value="{{$data->id}}">
                          </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_member_name">Name:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_member_name{{$data->id}}" name="edit_member_name" placeholder="Enter Name" value="{{$data->member_name}}">
                          </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_member_age">Age:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_member_age{{$data->id}}" name="edit_member_age" placeholder="Enter Age" value="{{$data->member_age}}">
                          </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_member_gender">Gender:</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="edit_member_gender{{$data->id}}" name="edit_member_gender">
                                <option value="" @if($data->member_gender == '') selected="selected" @endif disabled="disabled">-- Select Gender --</option>
                                <option value="Male" @if($data->member_gender == 'Male') selected="selected" @endif>Male</option>
                                <option value="Female" @if($data->member_gender == 'Female') selected="selected" @endif>Female</option>
                                <option value="Other" @if($data->member_gender == 'Other') selected="selected" @endif>Other</option>
                              </select>
                          </div>
                        </div>
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_member_relation">Relation:</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="edit_member_relation{{$data->id}}" name="edit_member_relation">
                                <option value="" @if($data->member_relation == '') selected="selected" @endif disabled="disabled">-- Select Relation --</option>										
                                <option value="Father" @if($data->member_relation == 'Father') selected="selected" @endif>Father</option>
                                <option value="Mother" @if($data->member_relation == 'Mother') selected="selected" @endif>Mother</option>                                                 
                                <option value="Brother" @if($data->member_relation == 'Brother') selected="selected" @endif>Brother</option>
                                <option value="Sister" @if($data->member_relation == 'Sister') selected="selected" @endif>Sister</option>
                                <option value="Husbend" @if($data->member_relation == 'Husbend') selected="selected" @endif>Husbend</option>
                                <option value="Wife" @if($data->member_relation == 'Wife') selected="selected" @endif>Wife</option>
                                <option value="Son" @if($data->member_relation == 'Son') selected="selected" @endif>Son</option>
                                <option value="Daughter" @if($data->member_relation == 'Daughter') selected="selected" @endif>Daughter</option>                                                  
                              </select>
                          </div>
                        </div> 
                        <div class="row form-group">
                          <label class="col-sm-3 control-label" for="edit_member_qualification">Qualification:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="edit_member_qual{{$data->id}}" name="edit_member_qual" placeholder="Enter Qualification" value="{{$data->member_qual}}">
                          </div>
                        </div>
                      </form> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" onclick="editFamilyMember({{$data->id}})" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
          </td>
        </tr>
        <script>
          $('#familymembersModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach
    </tbody>
</table>

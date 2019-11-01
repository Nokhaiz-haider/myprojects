<table id="AddSkillTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Skill</th>
            <th>Action</th>	
        </tr>
    </thead>
    <tbody id="skill_tbody">
        @foreach ($skill as $data)
        <tr>
            <td>{{$data->cand_SkillName}}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick='deleteSkill({{$data->id}})' ><i class="fa fa-trash"></i></button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#skillModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="skillModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Skill Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="edit_skill{{$data->id}}">
                                <form class="form-horizontal">
                                    <div class="row form-group" style="display:none">
                                        <label class="col-sm-3 control-label" for="edit_skill_id">ID:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="edit_skill_id" name="edit_skill_id" value="{{$data->id}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label" for="edit_diploma_or_certification_name">Skill</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="edit_skill{{$data->id}}" name="edit_skill" value="{{$data->cand_SkillName}}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" onclick="editSkill({{$data->id}})" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>            
        </tr>
        <script>
            $('#skillModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach        
    
    </tbody>
</table>
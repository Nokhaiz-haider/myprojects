<table id="AddLanguageTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Language</th>
            <th>Action</th>				
        </tr>
    </thead>
    <tbody id="lang_tbody">
        @foreach ($language as $data)
        <tr>
            <td>{{$data->cand_Language}}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick='deleteLanguage({{$data->id}})' ><i class="fa fa-trash"></i></button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#languageModal{{$data->id}}" ><i class="fa fa-pencil"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="languageModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Language Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="edit_language{{$data->id}}">
                                <form class="form-horizontal">
                                    <div class="row form-group" style="display:none">
                                        <label class="col-sm-3 control-label" for="edit_language_id">ID:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="edit_language_id" name="edit_language_id" value="{{$data->id}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label" for="edit_language">Language</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="edit_language{{$data->id}}" name="edit_language" value="{{$data->cand_Language}}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" onclick="editLanguage({{$data->id}})" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>            
        </tr>
        <script>
            $('#languageModal{{$data->id}}').appendTo("body");
        </script>
        @endforeach        
    </tbody>
</table>


    
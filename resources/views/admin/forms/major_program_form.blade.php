{{--<div id="editFutureMajor" class="modal fade" role="dialog">--}}
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Content</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="program_form_1" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading_1">Title 1 <span style="color: red;">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control validate-field" name="heading_1" id="heading_1" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading_2">Title 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="heading_2" name="heading_2">
                        </div>
                    </div>
                    <div class="form-group @if($page_data[0]->majors[0]->type == 0) hide @endif">
                        <label class="control-label col-sm-4" for="text">Paragraph</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="text" id="heading_text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="step_1">Step 1</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="step_1" id="step_1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="step_2">Step 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="step_2" id="step_2">
                        </div>
                    </div>
                    <div class="form-group @if($page_data[0]->majors[0]->type == 1) hide @endif">
                        <label class="control-label col-sm-4" for="step_3">Step 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="step_3" id="step_3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="button_text">Button Text <span style="color: red;">*</span></label>
                        <div class="col-sm-8">
                            <textarea class="jqte-editor validate-field" name="button_text" id="button_text"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" id="major_program_id" value="" />
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success update-program-btn">Update</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-sm-12">
                            <div class="alert text-center msg-div" style="margin-top: 10px; margin-bottom: 0;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
{{--</div>--}}

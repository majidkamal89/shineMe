<div id="emailTemplateModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="text-info modal-header-text">Add</span> Template</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="email_template_form" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="temp_id" name="temp_id" value="" />
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="template_subject">Subject <span class="text-red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control validate-field clear-field" name="subject" id="template_subject">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="template_message">Message <span class="text-red">*</span></label>
                        <div class="col-sm-8">
                            <textarea class="jqte-editor validate-field clear-field" name="message" id="template_message"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success email-template-btn">Submit</button>
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
</div>
<div id="emailResponseModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reply to <span class="text-info modal-header-text"></span></h4>
            </div>
            <div class="modal-body">
                <form method="post" id="email_response_form" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email_message">Message <span style="color: red;">*</span></label>
                        <div class="col-sm-8">
                            <textarea class="jqte-email-editor validate-field" name="email_message" id="email_message"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success email-response-btn">Send</button>
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

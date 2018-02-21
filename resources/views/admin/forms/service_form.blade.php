<div id="serviceModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="modal-header-text text-info">Add</span> Service</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="service_form_1" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="service_page_id" name="page_id" value="{!! $page_data[0]->id !!}">
                    <input type="hidden" name="id" id="serviceId" value="">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading_1">Heading 1 <span class="text-red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="service_heading_1" name="heading_1" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading_2">Heading 2 </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="service_heading_2" name="heading_2" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field jqte-editor-cls" id="service_description" name="description" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">Detail Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field jqte-editor-cls" id="service_detail_description" name="detail_description" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Image</label>
                        <div class="col-sm-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="" alt="Select Service Image.."
                                         class="img-responsive img-service-responsive"/>
                                    <input type="hidden" name="old_image" class="clear-field" id="old_image" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new" onclick="document.getElementById('service_image').click();">Select image</span>
                                                <span class="fileinput-exists" onclick="document.getElementById('service_image').click();">Change</span>
                                                <input type="file" name="image" id="service_image" class="clear-field" accept="image/*" />
                                            </span>
                                    <span class="btn btn-primary fileinput-exists remove-selected-file" data-dismiss="fileinput">Remove</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="service_title">Image Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="service_title" name="title" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="service_alt">Image Alt</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="service_alt" name="alt" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success update-service-btn">Submit</button>
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

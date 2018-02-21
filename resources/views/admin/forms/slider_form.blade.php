<div id="sliderModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="modal-header-text text-info">Add</span> Slider</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="slider_form_1" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="slider_page_id" name="page_id" value="{!! $page_data[0]->id !!}">
                    <input type="hidden" name="id" id="sliderId" value="">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading_1">Heading 1 <span class="text-red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="slider_heading_1" name="heading_1" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group @if($page_data[0]->slider[0]->type == 1) hide @endif">
                        <label class="control-label col-sm-4" for="heading_2">Heading 2 </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field @if($page_data[0]->slider[0]->type == 1) hide @endif" id="slider_heading_2" name="heading_2" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group @if($page_data[0]->slider[0]->type == 1) hide @endif">
                        <label class="control-label col-sm-4" for="text">Text </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field @if($page_data[0]->slider[0]->type == 1) hide @endif" id="slider_text" name="text" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Slider Image</label>
                        <div class="col-sm-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="" alt="Select Slider Image.."
                                         class="img-responsive img-slider-responsive"/>
                                    <input type="hidden" name="old_image" class="clear-field" id="old_image" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new" onclick="document.getElementById('slider_image').click();">Select image</span>
                                                <span class="fileinput-exists" onclick="document.getElementById('slider_image').click();">Change</span>
                                                <input type="file" name="image" id="slider_image" class="clear-field" accept="image/*" />
                                            </span>
                                    <span class="btn btn-primary fileinput-exists remove-selected-file" data-dismiss="fileinput">Remove</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="slider_title">Image Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="slider_title" name="title" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="slider_alt">Image Alt</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="slider_alt" name="alt" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success update-slider-btn">Submit</button>
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

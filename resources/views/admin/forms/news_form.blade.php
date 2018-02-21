<div id="newsModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}" alt="Data uploading...." /></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="modal-header-text text-info">Add</span> News & Events</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="news_form_1" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="news_page_id" name="page_id" value="{!! $page_data[0]->id !!}">
                    <input type="hidden" name="id" id="newsId" value="">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="heading">Heading <span class="text-red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_heading" name="heading" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field jqte-editor-cls1" id="news_description" name="description" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">Detail Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field jqte-editor-cls1" id="news_detail_description" name="detail_description" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Image</label>
                        <div class="col-sm-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="" alt="Select News Image.."
                                         class="img-responsive img-news-responsive"/>
                                    <input type="hidden" name="old_image" class="clear-field" id="old_image" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new" onclick="document.getElementById('news_image').click();">Select image</span>
                                                <span class="fileinput-exists" onclick="document.getElementById('news_image').click();">Change</span>
                                                <input type="file" name="image" id="news_image" class="clear-field" accept="image/*" />
                                            </span>
                                    <span class="btn btn-primary fileinput-exists remove-selected-file" data-dismiss="fileinput">Remove</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_title">Image Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_title" name="title" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_alt">Image Alt</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_alt" name="alt" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_fb">Facebook</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_fb" name="facebook" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_twitter">Twitter</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_twitter" name="twitter" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_linkedin">LinkedIn</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_linkedin" name="linkedin" required>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="news_youtube">Youtube</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control clear-field" id="news_youtube" name="youtube" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-success update-news-btn">Submit</button>
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

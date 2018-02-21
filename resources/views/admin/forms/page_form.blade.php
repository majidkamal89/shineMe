{{--<div id="editPageContent" class="modal fade" role="dialog">--}}
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content border-radius">
        <div class="modal-header">
            <div class="col-md-1 loader hide"><img src="{{ asset('admin/dist/img/loading.gif') }}"
                                                   alt="Data uploading...."/></div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Content</h4>
        </div>
        <div class="modal-body">
            <form method="post" id="page_form_1" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{!! Input::get('id') !!}"/>
                <input type="hidden" name="page_sequence" value="{!! Input::get('page_sequence') !!}"/>

                <div class="form-group {{ $errors->first('page_name', 'has-error') }}">
                    <label class="control-label col-sm-4" for="email">Page Name</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="page_name"
                               value="{!! (Input::get('page_name')) ?? '' !!}" placeholder="Page Name" required>
                        <span class="help-block">{{ $errors->first('page_name', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group {{ $errors->first('slug', 'has-error') }}">
                    <label class="control-label col-sm-4" for="slug">Slug</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control validateSlug" name="slug"
                               @if(Input::get('page_sequence') == 0) readonly
                               @endif value="{!! (Input::get('slug')) ?? '' !!}" placeholder="Slug (test-page eg)">
                        <span class="help-block">{{ $errors->first('slug', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group {{ $errors->first('meta_description', 'has-error') }}">
                    <label class="control-label col-sm-4" for="meta_description">Meta Description</label>

                    <div class="col-sm-8">
                        <textarea class="form-control" name="meta_description" style="max-width: 372px;">{!! (Input::get('meta_description')) ?? '' !!}</textarea>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group {{ $errors->first('meta_keywords', 'has-error') }}">
                    <label class="control-label col-sm-4" for="meta_keywords">Meta Keywords</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="meta_keywords"
                               value="{!! (Input::get('meta_keywords')) ?? '' !!}" placeholder="Meta Keywords" required>
                        <span class="help-block">{{ $errors->first('meta_keywords', ':message') }}</span>
                    </div>
                </div>
                @if((Input::get('page_sequence') == 0) || (Input::get('page_sequence') == 2))
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="meta_keywords">
                            {!! (Input::get('page_sequence') == 0) ? 'Future Major Program':'Future Major' !!}
                        </label>

                        <div class="col-sm-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="{!! (Input::get('page_sequence') == 0) ? 'future_major_program':'future_major' !!}"
                                           value="1"
                                           @if(Input::get('future_major_program') == 1) checked
                                           @elseif(Input::get('future_major') == 1) checked @else @endif
                                    >
                                    <small>(Yes / No)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if(in_array(Input::get('page_sequence'), [1,2,3,5,6]))
                    @if(Input::get('page_sequence') != 3)
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="title_1">Title 1</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="title_1"
                                   value="{!! (Input::get('title_1')) ?? '' !!}" required>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="content_1">Content 1 </label>

                        <div class="col-sm-8">
                            <textarea class="form-control jqte-editor"
                                      name="content_1">{!! (Input::get('content_1')) ?? '' !!}</textarea>
                        </div>
                    </div>
                    @if(!in_array(Input::get('page_sequence'), [5]))
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="title_2">Title 2</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_2"
                                       value="{!! (Input::get('title_2')) ?? '' !!}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="content_2">Content 2 </label>

                            <div class="col-sm-8">
                            <textarea class="form-control jqte-editor"
                                      name="content_2">{!! (Input::get('content_2')) ?? '' !!}</textarea>
                            </div>
                        </div>
                    @endif
                    @if(!in_array(Input::get('page_sequence'), [2,3,5]))
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="title_3">Title 3</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_3"
                                       value="{!! (Input::get('title_3')) ?? '' !!}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="content_3">Content 3 </label>

                            <div class="col-sm-8">
                                <textarea class="form-control jqte-editor"
                                          name="content_3">{!! (Input::get('content_3')) ?? '' !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="title_4">Title 4</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_4"
                                       value="{!! (Input::get('title_4')) ?? '' !!}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="content_4">Content 4 </label>

                            <div class="col-sm-8">
                                <textarea class="form-control jqte-editor"
                                          name="content_4">{!! (Input::get('content_4')) ?? '' !!}</textarea>
                            </div>
                        </div>
                    @endif
                @endif


                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-success page-update-btn"
                                data-id="{!! Input::get('id') !!}"
                                data-sequence="{!! Input::get('page_sequence') !!}">Update
                        </button>
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
{{--
</div>--}}

@extends('admin.layout.app')
@section('header')
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Future Major</li>
    </ol>
    @if(Session::has('success'))
        <div class="col-sm-4" id="msg_div" style="position: absolute;top: 10px;left: 400px;">
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="col-sm-4" id="msg_div" style="position: absolute;top: 10px;left: 400px;">
            <div class="alert alert-danger text-center">
                {{ Session::get('error') }}
            </div>
        </div>
    @endif
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="col-lg-10">
                        <h2 class="text-center">
                            @if(Input::get('id')) <span class="text-aqua">Update</span> @else <span class="text-aqua">Add</span> @endif
                            Program major Category</h2>
                        <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="program_id" value="{!! Input::get('program_id') !!}" />
                            <div class="form-group {{ $errors->first('heading_1', 'has-error') }}">
                                <label class="control-label col-sm-4" for="heading_1">Heading 1 <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('heading_1')) ? Input::old('heading_1') : Input::get('heading_1') }}"
                                           name="heading_1" id="heading_1" required>
                                    <span class="help-block">{{ $errors->first('heading_1', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('heading_2', 'has-error') }}">
                                <label class="control-label col-sm-4" for="heading_2">Heading 2 <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('heading_2')) ? Input::old('heading_2') : Input::get('heading_2') }}"
                                           name="heading_2" required>
                                    <span class="help-block">{{ $errors->first('heading_2', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="description">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="jqte-editor-program" name="description" id="description">
                                        {{ (Input::old('description')) ? Input::old('description') : Input::get('description') }}
                                    </textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="title_1">title 1</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('title_1')) ? Input::old('title_1') : Input::get('title_1') }}"
                                           name="title_1" id="title_1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="content_1">Content 1</label>
                                <div class="col-sm-8">
                                    <textarea class="jqte-editor-program" name="content_1" id="content_1">
                                        {{ (Input::old('content_1')) ? Input::old('content_1') : Input::get('content_1') }}
                                    </textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="title_2">Title 2</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('title_2')) ? Input::old('title_2') : Input::get('title_2') }}"
                                           name="title_2" id="title_2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="content_2">Content 2</label>
                                <div class="col-sm-8">
                                    <textarea class="jqte-editor-program" name="content_2" id="content_2">
                                        {{ (Input::old('content_2')) ? Input::old('content_2') : Input::get('content_2') }}
                                    </textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="title_3">Title 3</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('title_3')) ? Input::old('title_3') : Input::get('title_3') }}"
                                           name="title_3" id="title_3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="content_3">Content 3</label>
                                <div class="col-sm-8">
                                    <textarea class="jqte-editor-program validate-field" name="content_3" id="content_3">
                                        {{ (Input::old('content_3')) ? Input::old('content_3') : Input::get('content_3') }}
                                    </textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="content_3">Current Image</label>
                                <div class="col-sm-8">
                                    <img src="{!! asset('/').Input::get('banner_image') !!}" alt="No Image"
                                         class="img-responsive img-news-responsive"/>
                                    <input type="hidden" name="old_image" value="{{ Input::get('banner_image') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Image</label>
                                <div class="col-sm-8">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                            <img src="" alt="Select News Image.."
                                                 class="img-responsive img-news-responsive"/>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new" onclick="document.getElementById('new_image').click();">Select image</span>
                                                <span class="fileinput-exists" onclick="document.getElementById('new_image').click();">Change</span>
                                                <input type="file" name="new_image" id="new_image" class="clear-field" accept="image/*" />
                                            </span>
                                            <span class="btn btn-primary fileinput-exists remove-selected-file" data-dismiss="fileinput">Remove</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="title">Image Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ (Input::old('title')) ? Input::old('title') : Input::get('title') }}" name="title">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="alt">Image Alt</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ (Input::old('alt')) ? Input::old('alt') : Input::get('alt') }}" name="alt">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('facebook', 'has-error') }}">
                                <label class="control-label col-sm-4" for="fb">Facebook</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('facebook')) ? Input::old('facebook') : Input::get('facebook') }}"
                                           name="facebook" placeholder="https://www.facebook.com/">
                                    <span class="help-block">{{ $errors->first('facebook', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('twitter', 'has-error') }}">
                                <label class="control-label col-sm-4" for="twitter">Twitter</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('twitter')) ? Input::old('twitter') : Input::get('twitter') }}"
                                           name="twitter" placeholder="https://twitter.com/">
                                    <span class="help-block">{{ $errors->first('twitter', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('linkedin', 'has-error') }}">
                                <label class="control-label col-sm-4" for="linkedin">LinkedIn</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('linkedin')) ? Input::old('linkedin') : Input::get('linkedin') }}"
                                           name="linkedin" placeholder="https://www.linkedin.com/">
                                    <span class="help-block">{{ $errors->first('linkedin', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('youtube', 'has-error') }}">
                                <label class="control-label col-sm-4" for="youtube">Youtube</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                           value="{{ (Input::old('youtube')) ? Input::old('youtube') : Input::get('youtube') }}"
                                           name="youtube" placeholder="https://www.youtube.com/">
                                    <span class="help-block">{{ $errors->first('youtube', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{!! route('dashboard.page', Input::get('slug')) !!}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.jqte-editor-program').jqte({indent: false,outdent: false,
            link: false,remove: false,rule: false,source: false,sub: false,sup: false,
            strike: false,unlink: false,fsize: false,format: true,left: false,right: false,center: false,formats: [["p","Normal"]]});
        setTimeout(function(){
            $("#msg_div").remove();
        }, 2000);
    });
</script>
@endsection
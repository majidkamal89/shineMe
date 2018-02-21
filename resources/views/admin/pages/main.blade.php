@extends('admin.layout.app')
@section('header')
    <h1>
        {!! ($page_data[0]->page_name) ?? '' !!}
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{!! ($page_data[0]->page_name) ?? '' !!}</li>
    </ol>
    <div class="col-sm-4 delete-msg hide" style="position: absolute;top: 10px;left: 400px;">
        <div class="alert text-center"></div>
    </div>
    @if(Session::has('success'))
        <div class="col-sm-4" id="msg_div" style="position: absolute;top: 10px;left: 400px;">
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive" id="table_div">
                        @include('admin.tables.main_table')
                    </div>
                </div>
            </div>
        </div>

        @if(!empty($page_data[0]->slider[0]))
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive" id="slider_table_div">
                            @include('admin.tables.slider')
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.forms.slider_form')
            @include('admin.modals.slider_delete_modal')
        @endif

        @if(!empty($page_data[0]->services[0]))
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive" id="service_table_div">
                            @include('admin.tables.services')
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.forms.service_form')
            @include('admin.modals.service_delete_modal')
        @endif

        @if(!empty($page_data[0]->newsEvents[0]))
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive" id="news_table_div">
                            @include('admin.tables.news')
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.forms.news_form')
            @include('admin.modals.news_delete_modal')
        @endif

        @if(!empty($page_data[0]->majors[0]))
            <div id="future_major_">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive" id="future_major_div">
                                @include('admin.tables.future_major')
                            </div>
                        </div>
                    </div>
                </div>
                <div id="editFutureMajor" class="modal fade" role="dialog">
                    @include('admin.forms.major_program_form')
                </div>
            </div>
            @if(!empty($page_data[0]->majors[0]->programMajorList[0]))
                <div id="program_major_list">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive" id="program_major_list_div">
                                    @include('admin.tables.program_major_list')
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal -->
                    <div id="programListDelete" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Admin Email</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure, You want to delete this Record? this will not undo.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <a href="javascript:;" class="btn btn-danger program-major-confirm-delete">Yes</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box -->

                </div>
            @endif
        @endif

        @if(!empty($page_data[0]->contact_us[0]))
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive" id="contact_us_table_div">
                            @include('admin.tables.contact_us')
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.forms.contact_us_form')
            @include('admin.modals.contact_delete_modal')
        @endif

        <div id="editForm" class="modal fade" role="dialog"></div>

    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.delete-program-list', function(){
                $('.program-major-confirm-delete').attr('href', $(this).attr('data-url'));
                $("#programListDelete").modal('show');
            });
        });
    </script>
@endsection
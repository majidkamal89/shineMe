@extends('admin.layout.app')
@section('header')
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <div class="col-sm-4 delete-msg hide" style="position: absolute;top: 10px;left: 400px;">
        <div class="alert text-center"></div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive" id="email_template_table_div">
                        @include('admin.tables.email_template')
                    </div>
                </div>
            </div>
            @include('admin.forms.email_template_form')
            @include('admin.modals.email_template_modal')
        </div>
        <div class="col-lg-6 col-xs-6">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive" id="admin_email_table_div">
                        @include('admin.tables.admin_email')
                    </div>
                </div>
            </div>
            @include('admin.forms.admin_email_form')
            @include('admin.modals.admin_email_modal')
        </div>
    </div>
@endsection

@section('script')

@endsection
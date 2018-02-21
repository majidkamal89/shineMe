/*
* This file contains admin side CRUD functionality
*/

$(document).ready(function(){
    $('.jqte-editor').jqte({indent: false,outdent: false,
        link: false,remove: false,rule: false,source: false,sub: false,sup: false,
        strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});
    // function to load edit form for general page fields
    $(document).on('click', '.edit-page', function(){
        var id = $(this).attr('data-id');
        var sequence = $(this).attr('data-sequence');
        $.ajax({
            url: '/dashboard/load-edit-form/'+id+'/'+sequence,
            type: 'GET',
            success: function(response){
                $("#editForm").html(response).modal('show');
                $('.jqte-editor').jqte({indent: false,outdent: false,
                    link: false,remove: false,rule: false,source: false,sub: false,sup: false,
                    strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});
            }
        });
    });
    // function to update record of general page fields
    $(document).on('click', '.page-update-btn', function(){
        var sequence = $(this).attr('data-sequence');
        if(sequence != 0){
            $('.validateSlug').val($('.validateSlug').val().replace(/\//g, ''));
        }
        $('.loader').removeClass('hide');
        var formData = $("#page_form_1").serialize();
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/dashboard/update-edit-form/'+id+'/'+sequence,
            type: 'POST',
            data: formData,
            success: function(response){
                $('.loader').addClass('hide');
                if(response.status == 1){
                    loadPageData(id, sequence);
                    $('.msg-div').html(response.message).removeClass('hide').addClass('alert-success');
                    setTimeout(function(){
                        $("#editForm").html('').modal('hide');
                        $('.msg-div').html('').addClass('hide').removeClass('alert-success');
                    }, 2000);

                } else if(response.status == 0){
                    $('.msg-div').html(response.message).removeClass('hide').addClass('alert-danger');
                    setTimeout(function(){
                        $('.msg-div').html('').addClass('hide').removeClass('alert-danger');
                    }, 2000);
                } else {
                    $("#editForm").html(response);
                }
            }
        });
    });
    // function to load edit for for major programs section
    $(document).on('click', '.edit-program', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $('.update-program-btn').attr('data-id', $(this).attr('data-id'));
        $("#major_program_id").val($(this).attr('data-id'));
        $("#heading_1").val($(this).attr('data-heading1'));
        $("#heading_2").val($(this).attr('data-heading2'));
        $("#heading_text").val($(this).attr('data-text'));
        $("#step_1").val($(this).attr('data-step1'));
        $("#step_2").val($(this).attr('data-step2'));
        $("#step_3").val($(this).attr('data-step3'));
        //$(".jqte-editor").html($(this).attr('data-button'));
        $(".jqte-editor").jqteVal($(this).attr('data-button'));
        $("#editFutureMajor").modal('show');
    });
    // function to update major programs data
    $(document).on('click', '.update-program-btn', function(){
        checkRequiredField('validate-field');
        var id = $(this).attr('data-id');
        if($("#heading_1").val() != '' && $("#button_text").val() != ''){
            $("#editFutureMajor").find('.loader').removeClass('hide');
            var formData = $("#program_form_1").serialize();
            $.ajax({
                url: '/dashboard/update/program/'+id,
                type: 'POST',
                data: formData,
                success: function(response){
                    $("#editFutureMajor").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadMajorProgramData(id);
                        $("#editFutureMajor").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#editFutureMajor").modal('hide');
                            $("#editFutureMajor").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#editFutureMajor").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#editFutureMajor").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        }
    });

    // function to load add form for email template
    $(document).on('click', '.load-template-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#temp_id").val('');
        $(".clear-field").val('');
        $("#template_message").jqteVal('');
        $("#emailTemplateModal").find(".modal-header-text").html('Add');
        $("#emailTemplateModal").modal('show');
    });
    // function to load edit form for email template
    $(document).on('click', '.edit-email-template', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#temp_id").val($(this).attr('data-id'));
        $("#template_subject").val($(this).attr('data-subject'));
        $("#template_message").jqteVal($(this).attr('data-message'));
        $("#emailTemplateModal").find(".modal-header-text").html('Update');
        $("#emailTemplateModal").modal('show');
    });
    // function to update/add email template data
    $(document).on('click', '.email-template-btn', function(){
        $('.validate-field').each(function(){
            var div_id = $(this).attr('id');
            if($(this).val() == ''){
                $(this).parent().parent().addClass('has-error');
                if(div_id == 'template_message'){
                    $('.jqte').next('span').html('This field is required.').addClass('text-red');
                } else {
                    $(this).next('span').html('This field is required.');
                }
            } else {
                $(this).parent().parent().removeClass('has-error');
                if(div_id == 'template_message'){
                    $('.jqte').next('span').html('').removeClass('text-red');
                } else {
                    $(this).next('span').html('');
                }
            }
        });
        if($("#template_subject").val() != '' && $("#template_message").val() != ''){
            $("#emailTemplateModal").find('.loader').removeClass('hide');
            var formData = $("#email_template_form").serialize();
            $.ajax({
                url: '/dashboard/email-template/save',
                type: 'POST',
                data: formData,
                success: function(response){
                    $("#emailTemplateModal").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadEmailTemplate();
                        $("#emailTemplateModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#emailTemplateModal").modal('hide');
                            $("#emailTemplateModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#emailTemplateModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#emailTemplateModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        }
    });
    // Load delete modal for email template
    $(document).on('click', '.delete-email-template', function(){
        var id = $(this).attr('data-id');
        $("#emailTemplateDelete").modal('show');
        $("#emailTemplateDelete").find('.email-template-confirm-delete').attr('data-id', id);
    });
    // Delete email template
    $(document).on('click', '.email-template-confirm-delete', function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/dashboard/email-template/delete/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadEmailTemplate();
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#emailTemplateDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#emailTemplateDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

    // function to load add form for admin email
    $(document).on('click', '.load-admin-email-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#admin_id").val('');
        $(".clear-field").val('');
        $("#adminEmailModal").jqteVal('');
        $("#adminEmailModal").find(".modal-header-text").html('Add');
        $("#adminEmailModal").modal('show');
    });
    // function to load edit form for email template
    $(document).on('click', '.edit-admin-email', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#admin_id").val($(this).attr('data-id'));
        $("#admin_email").val($(this).attr('data-email'));
        $("#adminEmailModal").find(".modal-header-text").html('Update');
        $("#adminEmailModal").modal('show');
    });
    // function to update/add admin email data
    $(document).on('click', '.update-admin-email-btn', function(){
        if($("#admin_email").val() != ''){
            $("#admin_email").parent().parent().removeClass('has-error');
            $("#admin_email").next('span').html('');
            $("#adminEmailModal").find('.loader').removeClass('hide');
            var formData = $("#admin_email_form").serialize();
            $.ajax({
                url: '/dashboard/admin-email/save',
                type: 'POST',
                data: formData,
                success: function(response){
                    $("#adminEmailModal").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadAdminEmail();
                        $("#adminEmailModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#adminEmailModal").modal('hide');
                            $("#adminEmailModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#adminEmailModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#adminEmailModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        } else {
            $("#admin_email").parent().parent().addClass('has-error');
            $("#admin_email").next('span').html('This field is required.');
        }
    });
    // Load delete modal for admin email
    $(document).on('click', '.delete-admin-email', function(){
        var id = $(this).attr('data-id');
        $("#adminEmailDelete").modal('show');
        $("#adminEmailDelete").find('.admin-email-confirm-delete').attr('data-id', id);
    });
    // Delete admin email
    $(document).on('click', '.admin-email-confirm-delete', function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/dashboard/admin-email/delete/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadAdminEmail();
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#adminEmailDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#adminEmailDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

});

function loadPageData(id, page_sequence){

    $.ajax({
        url: '/dashboard/load-page-data/'+id+'/'+page_sequence,
        type: 'GET',
        success: function(response){
            $("#table_div").html(response);
        }
    });
}

function loadEmailTemplate(){

    $.ajax({
        url: '/dashboard/email-template/all',
        type: 'GET',
        success: function(response){
            $("#email_template_table_div").html(response);
        }
    });
}
function checkRequiredField(class_name){
    $('.'+class_name).each(function(){
        var div_id = $(this).attr('id');
        if($(this).val() == ''){
            $(this).parent().parent().addClass('has-error');
            if(div_id == 'button_text'){
                $('.jqte').next('span').html('This field is required.').addClass('text-red');
            } else {
                $(this).next('span').html('This field is required.');
            }
        } else {
            $(this).parent().parent().removeClass('has-error');
            if(div_id == 'button_text'){
                $('.jqte').next('span').html('').removeClass('text-red');
            } else {
                $(this).next('span').html('');
            }
        }
    });
}
function loadMajorProgramData(id){

    $.ajax({
        url: '/dashboard/load/program/'+id,
        type: 'GET',
        success: function(response){
            $("#future_major_div").html(response);
        }
    });
}
function loadAdminEmail(){

    $.ajax({
        url: '/dashboard/admin-email/all',
        type: 'GET',
        success: function(response){
            $("#admin_email_table_div").html(response);
        }
    });
}
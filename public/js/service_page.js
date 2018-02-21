/*
* This file contains admin side CRUD functionality
*/

$(document).ready(function(){
    $('.jqte-editor-cls').jqte({indent: false,outdent: false,
        link: false,remove: false,rule: false,source: false,sub: false,sup: false,
        strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});

    // function to load add form for service
    $(document).on('click', '.load-service-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $('.remove-selected-file').click();
        $("#serviceId").val('');
        $(".img-service-responsive").removeAttr('src');
        $(".clear-field").val('');
        $("#serviceModal").find(".modal-header-text").html('Add');
        $("#serviceModal").modal('show');
    });
    // function to load edit form for service
    $(document).on('click', '.edit-service', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#serviceModal").find(".modal-header-text").html('Update');
        $('.remove-selected-file').click();
        $("#serviceId").val($(this).attr('data-id'));
        $("#service_heading_1").val($(this).attr('data-heading1'));
        $("#service_heading_2").val($(this).attr('data-heading2'));
        $("#service_description").jqteVal($(this).attr('data-description'));
        $("#service_detail_description").jqteVal($(this).attr('data-detailDescription'));
        $("#old_image").val($(this).attr('data-oldImage'));
        $(".img-service-responsive").attr('src', $(this).attr('data-image'));
        $("#service_title").val($(this).attr('data-title'));
        $("#service_alt").val($(this).attr('data-alt'));
        $("#serviceModal").modal('show');
    });
    // function to submit slider form data
    $(document).on('click', '.update-service-btn', function(){
        if($("#service_heading_1").val() != ''){
            var page_id = $("#service_page_id").val();
            $("#service_heading_1").parent().parent().removeClass('has-error');
            $("#service_heading_1").next('span').html('');
            $("#serviceModal").find('.loader').removeClass('hide');
            var formData = new FormData($("#service_form_1")[0]);
            $.ajax({
                url: '/dashboard/store/service',
                type: 'POST',
                cache:false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response){
                    $("#serviceModal").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadServiceData(page_id);
                        $("#serviceModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#serviceModal").modal('hide');
                            $("#serviceModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#serviceModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#serviceModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        } else {
            $("#service_heading_1").parent().parent().addClass('has-error');
            $("#service_heading_1").next('span').html('This field is required');
        }

    });

    $(document).on('click', '.service-delete-btn', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $("#serviceDelete").modal('show');
        $("#serviceDelete").find('.service-confirm-delete').attr('data-id', id);
        $("#serviceDelete").find('.service-confirm-delete').attr('data-pageId', page_id);
    });
    $(document).on('click', '.service-confirm-delete', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $.ajax({
            url: '/dashboard/delete/service/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadServiceData(page_id);
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#serviceDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#serviceDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

});

function loadServiceData(page_id){

    $.ajax({
        url: '/dashboard/load/service/'+page_id,
        type: 'GET',
        success: function(response){
            $("#service_table_div").html(response);
        }
    });
}
/*
* This file contains admin side CRUD functionality
*/

$(document).ready(function(){
    /*$('.jqte-editor').jqte({indent: false,outdent: false,
        link: false,remove: false,rule: false,source: false,sub: false,sup: false,
        strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});*/

    // function to load add form for slider
    $(document).on('click', '.load-slider-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $('.remove-selected-file').click();
        $("#sliderId").val('');
        $(".img-slider-responsive").removeAttr('src');
        $(".clear-field").val('');
        $("#sliderModal").find(".modal-header-text").html('Add');
        $("#sliderModal").modal('show');
    });
    // function to load edit form for slider
    $(document).on('click', '.edit-slider', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#sliderModal").find(".modal-header-text").html('Update');
        $('.remove-selected-file').click();
        $("#sliderId").val($(this).attr('data-id'));
        $("#slider_heading_1").val($(this).attr('data-heading1'));
        $("#slider_heading_2").val($(this).attr('data-heading2'));
        $("#slider_text").val($(this).attr('data-text'));
        $("#old_image").val($(this).attr('data-oldImage'));
        $(".img-slider-responsive").attr('src', $(this).attr('data-image'));
        $("#slider_title").val($(this).attr('data-title'));
        $("#slider_alt").val($(this).attr('data-alt'));
        $("#sliderModal").modal('show');
    });
    // function to submit slider form data
    $(document).on('click', '.update-slider-btn', function(){
        if($("#slider_heading_1").val() != ''){
            var page_id = $("#slider_page_id").val();
            $("#slider_heading_1").parent().parent().removeClass('has-error');
            $("#slider_heading_1").next('span').html('');
            $("#sliderModal").find('.loader').removeClass('hide');
            var formData = new FormData($("#slider_form_1")[0]);
            $.ajax({
                url: '/dashboard/store/slider',
                type: 'POST',
                cache:false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response){
                    $("#sliderModal").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadSliderData(page_id);
                        $("#sliderModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#sliderModal").modal('hide');
                            $("#sliderModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#sliderModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#sliderModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        } else {
            $("#slider_heading_1").parent().parent().addClass('has-error');
            $("#slider_heading_1").next('span').html('This field is required');
        }

    });

    $(document).on('click', '.service-delete-btn', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $("#sliderDelete").modal('show');
        $("#sliderDelete").find('.slider-confirm-delete').attr('data-id', id);
        $("#sliderDelete").find('.slider-confirm-delete').attr('data-pageId', page_id);
    });
    $(document).on('click', '.slider-confirm-delete', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $.ajax({
            url: '/dashboard/delete/slider/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadSliderData(page_id);
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#sliderDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#sliderDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

});

function loadSliderData(page_id){

    $.ajax({
        url: '/dashboard/load/slider/'+page_id,
        type: 'GET',
        success: function(response){
            $("#slider_table_div").html(response);
        }
    });
}
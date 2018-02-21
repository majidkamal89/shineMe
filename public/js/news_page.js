/*
* This file contains admin side CRUD functionality
*/

$(document).ready(function(){
    $('.jqte-editor-cls1').jqte({indent: false,outdent: false,
        link: false,remove: false,rule: false,source: false,sub: false,sup: false,
        strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});

    // function to load add form for slider
    $(document).on('click', '.load-news-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $('.remove-selected-file').click();
        $("#newsId").val('');
        $(".img-news-responsive").removeAttr('src');
        $(".clear-field").val('');
        $("#newsModal").find(".modal-header-text").html('Add');
        $("#newsModal").modal('show');
    });
    // function to load edit form for slider
    $(document).on('click', '.edit-news', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#newsModal").find(".modal-header-text").html('Update');
        $('.remove-selected-file').click();
        $("#newsId").val($(this).attr('data-id'));
        $("#news_heading").val($(this).attr('data-heading'));
        $("#news_description").jqteVal($(this).attr('data-description'));
        $("#news_detail_description").jqteVal($(this).attr('data-detailDescription'));
        $("#old_image").val($(this).attr('data-oldImage'));
        $(".img-news-responsive").attr('src', $(this).attr('data-image'));
        $("#news_title").val($(this).attr('data-title'));
        $("#news_alt").val($(this).attr('data-alt'));
        $("#news_fb").val($(this).attr('data-facebook'));
        $("#news_twitter").val($(this).attr('data-twitter'));
        $("#news_linkedin").val($(this).attr('data-linkedin'));
        $("#news_youtube").val($(this).attr('data-youtube'));
        $("#newsModal").modal('show');
    });
    // function to submit slider form data
    $(document).on('click', '.update-news-btn', function(){
        if($("#news_heading").val() != ''){
            var page_id = $("#news_page_id").val();
            $("#news_heading").parent().parent().removeClass('has-error');
            $("#news_heading").next('span').html('');
            $("#newsModal").find('.loader').removeClass('hide');
            var formData = new FormData($("#news_form_1")[0]);
            $.ajax({
                url: '/dashboard/store/news',
                type: 'POST',
                cache:false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response){
                    $("#newsModal").find('.loader').addClass('hide');
                    if(response.status == 1){
                        loadNewsData(page_id);
                        $("#newsModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#newsModal").modal('hide');
                            $("#newsModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#newsModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#newsModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        } else {
            $("#news_heading").parent().parent().addClass('has-error');
            $("#news_heading").next('span').html('This field is required');
        }

    });

    $(document).on('click', '.deleteNews', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $("#newsDelete").modal('show');
        $("#newsDelete").find('.news-confirm-delete').attr('data-id', id);
        $("#newsDelete").find('.news-confirm-delete').attr('data-pageId', page_id);
    });
    $(document).on('click', '.news-confirm-delete', function(){
        var id = $(this).attr('data-id');
        var page_id = $(this).attr('data-pageId');
        $.ajax({
            url: '/dashboard/delete/news/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadNewsData(page_id);
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#newsDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#newsDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

});

function loadNewsData(page_id){

    $.ajax({
        url: '/dashboard/load/news/'+page_id,
        type: 'GET',
        success: function(response){
            $("#news_table_div").html(response);
        }
    });
}
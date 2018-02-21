/*
* This file contains admin side CRUD functionality
*/

$(document).ready(function(){
    $('.jqte-email-editor').jqte({indent: false,outdent: false,
        link: false,remove: false,rule: false,source: false,sub: false,sup: false,
        strike: false,unlink: false,fsize: false,format: false,left: false,right: false,center: false});

    // function to load response form for contact us
    $(document).on('click', '.load-email-modal', function(){
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').html('');
        $("#email_message").jqteVal('');
        $("#emailResponseModal").find(".modal-header-text").html($(this).attr('data-email'));
        $('.email-response-btn').attr('data-id', $(this).attr('data-id'));
        $("#emailResponseModal").modal('show');
    });
    // function to submit email form data
    $(document).on('click', '.email-response-btn', function(){
        if($("#email_message").val() != ''){
            $(this).prop('disabled', true);
            var id = $(this).attr('data-id');
            $("#email_message").parent().parent().next('span').removeClass('text-red').html('');
            $("#emailResponseModal").find('.loader').removeClass('hide');
            var formData = $("#email_response_form").serialize();
            $.ajax({
                url: '/dashboard/contact/reply-to/'+id,
                type: 'POST',
                data: formData,
                success: function(response){
                    $("#emailResponseModal").find('.loader').addClass('hide');
                    $('.email-response-btn').prop('disabled', false);
                    if(response.status == 1){
                        $("#email_message").jqteVal('');
                        loadContacts();
                        $("#emailResponseModal").find('.msg-div')
                            .html(response.message).addClass('alert-success').removeClass('hide alert-danger');
                        setTimeout(function(){
                            $("#emailResponseModal").modal('hide');
                            $("#emailResponseModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-success');
                        }, 2000);
                    } else {
                        $("#emailResponseModal").find('.msg-div')
                            .html(response.message).addClass('alert-danger').removeClass('hide alert-success');
                        setTimeout(function(){
                            $("#emailResponseModal").find('.msg-div')
                                .html('').addClass('hide').removeClass('alert-danger alert-success');
                        }, 2000);
                    }
                }
            });
        } else {
            $("#email_message").parent().parent().next('span').addClass('text-red').html('This field is required');
        }

    });

    $(document).on('click', '.contact-delete-btn', function(){
        var id = $(this).attr('data-id');
        $("#contactDelete").modal('show');
        $("#contactDelete").find('.contact-confirm-delete').attr('data-id', id);
    });
    $(document).on('click', '.contact-confirm-delete', function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/dashboard/contact/delete/'+id,
            type: 'GET',
            success:function(response){
                if(response.status == 1){
                    loadContacts();
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                    $("#contactDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                } else {
                    $('.delete-msg').removeClass('hide');
                    $('.delete-msg').find('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong, try again later');
                    $("#contactDelete").modal('hide');
                    setTimeout(function(){
                        $('.delete-msg').addClass('hide');
                        $('.delete-msg').find('.alert').removeClass('alert-danger alert-success').html('');
                    }, 3000);
                }
            }
        });
    });

});

function loadContacts(){

    $.ajax({
        url: '/dashboard/contact/all',
        type: 'GET',
        success: function(response){
            $("#contact_us_table_div").html(response);
        }
    });
}
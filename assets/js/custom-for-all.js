/* global toastr */

function stick_toster_message_error(msg, title, behaviour) { //behaviour = success, warning, error
    toastr.options = {
        autoDismiss: false,
        "closeButton": true,
        "debug": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "0",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr[behaviour](msg, title)
}

function toster_message_error(msg, title, behaviour) { //behaviour = success, warning, error
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "20000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr[behaviour](msg, title)
}
function toster_message(msg, title, behaviour) { //behaviour = success, warning, error
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr[behaviour](msg, title)
}
$(document).ready(function () {
    $(document).on("submit", "form.default_form", function (event) {
        event.preventDefault();
        var formData = new FormData($(this)[0]);
        var formID = $(this).attr('id');
        $('.span-error').html('');
        var form = $(this);
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('.alert.alert-danger').slideUp(500).remove();
                $('input[type="submit"]').val('Please wait..!').attr('disabled', 'disabled');
            },
            success: function (returnData) {

                if (returnData.status == "ok") {
                    //                    showSuccess(returnData.message);

                    //                    get_updated_datatable();
                    toster_message(returnData.message, '', 'success');
                    setTimeout(function () {
                        if (formID == 'login' || formID == 'register') {

                            // window.location.href = BASE_URL + '/personal-account';
                            if (typeof returnData.redirect_url != "undefined") {
                                window.location.href = returnData.redirect_url;

                            } else {
                                window.location.href = BASE_URL + '/dashboard';
                            }

                        } else {
                            if (formID == 'valuation_report_form') {
                                if (returnData.type == 'done') {
                                    $('#valuation_payment').modal('hide')
                                    window.location.reload();
                                } else if (returnData.type == 'payment') {

                                } else if (returnData.type == 'insufficint') {
                                    $('#valuation_payment').modal('hide')
                                    $('#valuation_walltet_payment').modal('show');

                                }

                            } else if (formID == 'join_auction_journey') {
                                $('#withdraw_wallet').modal('hide');
                                localStorage.setItem('isPopup', 1);
                            } else if (formID == 'password_form') {
                                window.location.href = BASE_URL + '/dashboard';
                            } else {
                                window.location.reload();
                            }
                        }
                    }, 1000);

                } else {
                   
                    var error_html = '';
                    if (typeof returnData.error != "undefined") {
                        $.each(returnData.error, function (idx, topic) {
                            error_html += '<li>' + topic + '</li>';
                        });
                    }
                    if (error_html != '') {
                        //                        showErrorMessage(error_html);
                        toster_message(error_html, '', 'error');
                    } else {
                        toster_message(returnData.message, '', 'error');
                        if (formID == 'bankslip_form') {

                            toster_message(returnData.message, '', 'error');
                        }
                    }
                    var error_html = '';
                    if (typeof returnData.error != "undefined") {
                        // console.log("keys:",Object.keys(returnData.errors)[0]);
                        var key = Object.keys(returnData.error)[0];
                        var ind = key.indexOf("[");
                        console.log("error", key);
                        $.each(returnData.error, function (idx, topic) {
                            console.log("idx", idx);
                            // Object.keys(returnData.errors)[0];
                            var ind = idx.indexOf("[");
                            if (ind != -1) {
                                $(form).find('#span-error-' + idx.substring(0, ind)).html(topic);
                            } else {
                                $(form).find('#span-error-' + idx).html(topic);
                            }
                        });
                        setTimeout(function () {
                            $.each(returnData.error, function (idx, topic) {
                                // Object.keys(returnData.errors)[0];
                                var ind = idx.indexOf("[");
                                if (ind != -1) {
                                    $(form).find('#span-error-' + idx.substring(0, ind)).html('');
                                } else {
                                    $(form).find('#span-error-' + idx).html('');
                                }
                            });
                        }
                            , 10000);
                    }

                }
            },
            error: function (xhr, textStatus, errorThrown) {
                toster_message('There was an unknown error that occurred. You will need to refresh the page to continue working.', 'error', 'error');
            },
            complete: function () {
                if (formID == 'valuation_report_form') {
                    $('input[type="submit"]').val('Pay Now').removeAttr('disabled');
                } else if (formID == 'password_form') {
                    $('input[type="submit"]').val('Change Password').removeAttr('disabled');
                } else {
                    $('input[type="submit"]').val('Submit').removeAttr('disabled');
                }
            }
        });
        return false;

    });
});
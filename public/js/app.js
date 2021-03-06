$(document).ready(function() {

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 300) {
            $('nav').addClass('fixed');
            $('#fixed-padding').show();
        } else {
            $('nav').removeClass('fixed');
            $('#fixed-padding').hide();
        }
    });

    if ($('#form_callback').length) {
        $('#form_callback').on('submit', function(e){
            ajaxFormSubmit(e, callbackSuccess);
        });
    }

    if ($('#form_reservation').length) {
        $('#form_reservation').on('submit', function(e){
            ajaxFormSubmit(e, reservationSuccess);
        });
    }

    if ($('#form_feedback').length) {
        $('#form_feedback').on('submit', function(e){
            ajaxFormSubmit(e, feedbackSuccess);
        });
    }

    if ($('.input-date').length) {

        $.datetimepicker.setLocale('ru');
        $('.input-date').datetimepicker({
            format: 'd-m-Y',
            timepicker: false,
            dayOfWeekStart: 1
        });

    }

    if ($('.gallery').length) {
        $('.gallery').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true
            },
            gallery: {
                enabled: true,
                preload: [1, 2],
                tPrev: 'Пердыдущая (клавиша влево)',
                tNext: 'Следующая (клавиша вправо)'
            },
            tLoading: 'Загрузка...'
        });
    }

    if ($('.popup-product').length) {
        $('.popup-product').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true
            },
            tLoading: 'Загрузка...'
        });
    }

    if ($('.ajax-popup').length) {
        $('.ajax-popup').magnificPopup({
            type: 'ajax',
            overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });
    }

    $('#room1').on('show.bs.modal', function (e) {
        $('#room').val($('#room1Label').html());
        $('#roomName').html($('#room1Label').html());
    });

    $('#room2').on('show.bs.modal', function (e) {
        $('#room').val($('#room2Label').html());
        $('#roomName').html($('#room2Label').html());
    });

    $('#room3').on('show.bs.modal', function (e) {
        $('#room').val($('#room3Label').html());
        $('#roomName').html($('#room3Label').html());
    });

    $('#room4').on('show.bs.modal', function (e) {
        $('#room').val($('#room4Label').html());
        $('#roomName').html($('#room4Label').html());
    });

    $('#room5').on('show.bs.modal', function (e) {
        $('#room').val($('#room5Label').html());
        $('#roomName').html($('#room5Label').html());
    });

    $('#room6').on('show.bs.modal', function (e) {
        $('#room').val($('#room6Label').html());
        $('#roomName').html($('#room6Label').html());
    });

});

function ajaxFormSubmit(e, successFunction)
{
    e.preventDefault();

    var form = e.target;

    // Место для отображения ошибок в форме
    var formStatus = $(form).find('.form-status');
    if (formStatus.length) {
        formStatus.html('');
    }

    // Анимированная кнопка при отправки формы
    var formButton = $(form).find('.form-button');
    if (formButton.length) {
        formButton.append(' <i class="fa fa-spinner fa-spin"></i>');
        formButton.prop('disabled', true);
    }

    $.ajax({
        method: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        success: function (data)
        {
            successFunction(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            if (formStatus.length && jqXHR.status == 422) // Если статус 422 (неправильные входные данные) то отображаем ошибки
            {
                var formStatusText = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><div class='text-uppercase'>" + (formStatus.data('errorText') ? formStatus.data('errorText') : 'Ошибка!') + "</div><ul>";

                $.each(jqXHR.responseJSON, function (index, value) {
                    formStatusText += "<li>" + value + "</li>";
                });

                formStatusText += "</ul></div>";
                formStatus.html(formStatusText);
                $('body').scrollTo(formStatus, 500);
            }
            else
            {
                sweetAlert("", "Ошибка при запросе к серсеру", 'error');
            }
        },
        complete: function (jqXHR, textStatus)
        {
            if (formButton.length)
            {
                formButton.find('i').remove();
                formButton.prop('disabled', false);
            }
        }
    });
}

function callbackSuccess(data)
{
    $('#callbackModal').modal('hide');
    showNoty(data.message, 'success');
}

function reservationSuccess(data)
{
    $('#reservationForm').modal('hide');
    showNoty(data.message, 'success');
}

function feedbackSuccess(data)
{
    $("#form_feedback")[0].reset();
    showNoty(data.message, 'success');
}

function showNoty(message, type)
{
    new Noty({
        text: message,
        type: type,
        layout: 'topCenter',
        theme: 'relax',
        timeout: 5000,
        animation: {
            open: 'animated flipInX', // jQuery animate function property object
            close: 'animated flipOutX', // jQuery animate function property object
            easing: 'swing', // easing
            speed: 500 // opening & closing animation speed
        }
    }).show();
}
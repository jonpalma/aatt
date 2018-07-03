//Ajax contact form
$(function() {
    // Set up an event listener for the contact form.
    $('.contact-form').submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        var form = $(this),
            formMessages = form.find('.form-output'),// Get the messages div.
            form_type = form.find('input[name=form_type]'),
            lang = form.find('input[name=lang]'),
            submitBtn = form.find('input[type=submit]'),
            texts = null,
            form_data = {};

        switch (lang.val()) {
            case 'en':
                texts = en_Texts();
                break;
            case 'fr':
                texts = fr_Texts();
                break;
            case 'es':
            default  :
                texts = es_Texts();
                break;
        }
        submitBtn.val(texts[1]);

        switch (form_type.val()) {
            case 'quot':
                form_data = quot_data(form,false);
                break;
            case 'contact':
            default:
                form_data = contact_data(form,false);
                break;
        }
        form_data.lang = lang.val();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: form_data
        })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.
                formMessages.removeClass('alert alert-danger');
                formMessages.addClass('alert alert-success');

                // Set the message text.
                formMessages.text(response);

                // Clear the form.
                switch (form_type.val()) {
                    case 'quot':
                        quot_data(form,true);
                        break;
                    case 'contact':
                    default:
                        contact_data(form,true);
                        break;
                }
                submitBtn.val(texts[0]);
            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                formMessages.removeClass('alert alert-success');
                formMessages.addClass('alert alert-danger');

                // Set the message text.
                if (data.responseText !== '') {
                    formMessages.text(data.responseText);
                    submitBtn.val(texts[0]);
                } else {
                    formMessages.text(texts[2]);
                    submitBtn.val(texts[0]);
                }
            });
    });
});

function contact_data(form,clear) {
    var name = form.find('input[name=nombre]'),
        email = form.find('input[name=email]'),
        msg = form.find('textarea[name=comentarios]');

    if(!clear) {
        var data = {
            name: name.val(),
            email: email.val(),
            form_type: 'contact',
            msg: msg.val()
        };
        return data;
    } else {
        name.val('');
        email.val('');
        msg.val('');
    }
}

function quot_data(form,clear) {
    var name = form.find('input[name=nombre]'),
        email = form.find('input[name=email]'),
        people = form.find('input[name=np]'),
        days = form.find('select[name=de]'),
        cities = form.find('input[name=cv]'),
        services = form.find('input[name=si]'),
        contents = form.find('input[name=ct]'),
        budget = form.find('select[name=money]'),
        msg = form.find('textarea[name=comentarios]');

    if(!clear) {
        var data = {
            name: name.val(),
            email: email.val(),
            form_type: 'quot',
            people: people.val(),
            days: days.val(),
            cities: cities.val(),
            services: services.val(),
            contents: contents.val(),
            budget: budget.val(),
            msg: msg.val()
        };
        return data;
    } else {
        name.val('');
        email.val('');
        people.val('');
        days.prop("selectedIndex", 0);
        cities.val('');
        services.val('');
        contents.val('');
        budget.prop("selectedIndex", 0);
        msg.val('');
    }
}

function en_Texts() {
    var texts = [
        'Send',
        'Sending...',
        'Oops! An error occurred while trying to send the message.'
    ];
    return texts;
}
function es_Texts() {
    var texts = [
        'Enviar',
        'Enviando...',
        'Oops! Ocurrió un error intentando mandar tu mensaje.'
    ];
    return texts;
}
function fr_Texts() {
    var texts = [
        'Envoyer',
        'Envoi...',
        "Une erreur s'est produite lors de la tentative d'envoi du message."
    ];
    return texts;
}
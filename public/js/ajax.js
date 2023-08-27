function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function showerror(inputElement, errorMessage) {
    var existingError = $(inputElement).parent().find('.error-message');
    
    if (existingError.length > 0) {
        existingError.text(errorMessage); // Update the existing error message
    } else {
        $(inputElement).css('border', '1px solid red');

        var errorSpan = $('<span>', {
            text: errorMessage,
            style: 'color: red;',
            class: 'error-message'
        });

        $(inputElement).parent().append(errorSpan);
    }

    // detectar cuando el usuario toque el input para quitar el error
    $(inputElement).on('focus', function() {
        $(this).css('border', '1px solid #ced4da');
        $(this).parent().find('.error-message').remove();
    });
}


function enviarformulario() {
    $('#register_btn').on('click', function(e) {
        e.preventDefault();
        var $button = $(this);

        if($button.hasClass('disabled')){
            return // no se puede enviar la petición
        }

        var nombre = $('#txtName').val();
        var email = $('#txtEmail').val();
        var password = $('#txtPassword').val();
        var password_confirmation = $('#txtPasswordR').val();
        var check = $('#check').val();
        var csrfToken = $('[name="_token"]').val();

        if (nombre == '') {
            showerror($('#txtName')[0], 'El nombre no puede estar vacío');
            return false;
        } else if (email == '') {
            showerror($('#txtEmail')[0], 'El correo no puede estar vacío');
            return false;
        } else if (!validateEmail(email)) {
            showerror($('#txtEmail')[0], 'El correo no es válido');
            return false;
        } else if (password == '') {
            showerror($('#txtPassword')[0], 'La contraseña no puede estar vacía');
            return false;
        } else if (password_confirmation == '') {
            showerror($('#txtPasswordR')[0], 'La confirmación de contraseña no puede estar vacía');
            return false;
        } else if (password != password_confirmation) {
            showerror($('#txtPasswordR')[0], 'Las contraseñas no coinciden');
            return false;
        } else if (password.length < 8) {
            showerror($('#txtPassword')[0], 'La contraseña debe tener al menos 8 caracteres');
            return false;
        } else if (check == true){
            showerror($('#check')[0], 'Debe aceptar los términos y condiciones');
            return false;
        }

        $button.addClass('disabled');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $.ajax({
            method: 'POST',
            url: '/register_auth',
            data: {
                nombre: nombre,
                email: email,
                password: password,
                csrfToken : csrfToken,
            },
            success: function(response) {
                if (true) {
                    window.location.href = '/dashboard';
                } else {
                    alert(response.message);
                }
            },
            error: function(error) {
                console.log(error);
            }}).always(function() {
            $button.removeClass('disabled');
        });

    });
}

enviarformulario();

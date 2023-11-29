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
            style: 'color: red; ',
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

function showError(inputElement, errorMessage) {
    var existingError = $(inputElement).parent().find('.error-message');
    
    if (existingError.length > 0) {
        existingError.text(errorMessage); // Update the existing error message
    } else {
        $(inputElement).css('border', '1px solid red');

        var errorSpan = $('<span>', {
            text: errorMessage,
            style: 'color: red; position: absolute; left: 0; bottom: 54px; right: 0; text-align: center; ',
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

function showSuccess(inputElement, successMessage) {
    var existingSuccess = $(inputElement).parent().find('.success-message');

    if (existingSuccess.length > 0) {
        existingSuccess.text(successMessage); // Update the existing success message
    } else {
        $(inputElement).css('border', '1px solid green');

        var successSpan = $('<span>', {
            text: successMessage,
            style: 'color: green; position: absolute; left: 0; bottom: 54px; right: 0; text-align: center;',
            class: 'success-message'
        });
        

        $(inputElement).parent().append(successSpan);
    }

    // detectar cuando el usuario toque el input para quitar el error
    $(inputElement).on('focus', function() {
        $(this).css('border', '1px solid #ced4da');
        $(this).parent().find('.success-message').remove();

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


var contenidoCargado = {};

function cambiarContenido($button, dynamicUrl) {
    if (contenidoCargado[dynamicUrl]) {
        // Si el contenido ya se ha cargado, simplemente activa la clase 'active_line'
        $button.toggleClass('active_line');
    } else {
        $.ajax({
            method: 'GET',
            url: dynamicUrl,
            success: function(response) {
                $('body').html(response); // Reemplaza el contenido completo de la página
                window.history.pushState({ path: dynamicUrl }, '', dynamicUrl); // Cambia la URL en la barra de direcciones

                // Agrega la clase 'active_line' al botón al hacer clic
                $button.toggleClass('active_line');

                contenidoCargado[dynamicUrl] = true; // Marca que el contenido se ha cargado
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Hubo un error al cargar el contenido.');
            }
        });
    }
}

function handleTransicion(elementId, dynamicUrl) {
    $(elementId).on('click', function(e) {
        e.preventDefault();
        var $button = $(this);
        cambiarContenido($button, dynamicUrl);
    });
}


urlsite = window.location.origin;

handleTransicion('#loginchange', urlsite + '/auth/login');
handleTransicion('#registerchange', urlsite + '/auth');



function IniciarSesion() {
    $('#login_btn').on('click', function(e) {
        e.preventDefault();
        var $button = $(this);

        var email = $('#txtEmail').val();
        var password = $('#txtPassword').val();

        $('.error-message').remove();

        if (email == '') {
            showerror($('#txtEmail'), 'El correo no puede estar vacío');
            return false;
        } else if (!validateEmail(email)) {
            showerror($('#txtEmail'), 'El correo no es válido');
            return false;
        } else if (password == '') {
            showerror($('#txtPassword'), 'La contraseña no puede estar vacía');
            return false;
        }

        $button.addClass('disabled');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $.ajax({
            method: 'POST',
            url: '/login_auth',
            data: {
                email: email,
                password: password,
            },
            success: function(response) {
                if (response.success) {
                    window.location.href = '/dashboard';
                } else {
                    // Mostrar errores en la vista
                    showerror($button, response.message);
                }
            },
            error: function(xhr, status, error) {
                var response = xhr.responseJSON;
                if (response) {
                    showerror($button, response.message);
                } else {
                    showerror($button, 'Error en la solicitud. Por favor, intenta de nuevo.');
                }
            }
        }).always(function() {
            $button.removeClass('disabled');
        });
    });
}

IniciarSesion();


function RecuperarContrasena() {
    $('#recover_btn').on('click', function(e) {
        e.preventDefault();

        var $button = $(this);
        var email = $('#txtEmailRe').val();
        var csrfToken = $('[name="_token"]').val();

        // Limpiar errores anteriores
        $('.error-message').remove();
        $('.success-message').remove();

        if (email == '') {
            showError($('#txtEmailRe'), 'El correo no puede estar vacío');
            return false;
        } else if (!validateEmail(email)) {
            showError($('#txtEmailRe'), 'El correo no es válido');
            return false;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            method: 'POST',
            url: '/recover',
            data: {
                email: email,
                csrfToken: csrfToken,
            },
            success: function(response) {
                if (response.success) {
                    showSuccess($button, response.message);
                } else {
                    showError($button, response.message);
                }
            },
            error: function(xhr, status, error) {
                var response = xhr.responseJSON;
                if (response) {
                    showSuccess($button, response.message);
                } else {
                    showError($button, 'Error en la solicitud. Por favor, intenta de nuevo.');
                }
            }
        });
    });
}

RecuperarContrasena();



function CambiarContrasena() {
    $('#change_password_s').on('click', function(e) {
        e.preventDefault();

        var $button = $(this);

        var password = $('#password_r').val();
        var password_confirmation = $('#password_r_c').val();
        var token_current = $('#token_current').val();

        // Limpiar errores anteriores
        $('.error-message').remove();
        $('.success-message').remove();

        if (password == '') {
            showerror($('#password_r'), 'La contraseña no puede estar vacía');
            return false;
        }
        else if (password_confirmation == '') {
            showerror($('#password_r_c'), 'La confirmación de contraseña no puede estar vacía');
            return false;
        }
        else if (password != password_confirmation) {
            showerror($('#password_r_c'), 'Las contraseñas no coinciden');
            return false;
        }
        else if (password.length < 8) {
            showerror($('#password_r'), 'La contraseña debe tener al menos 8 caracteres');
            return false;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $.ajax({
            method: 'POST',
            url: '/change_password',
            data: {
                password: password,
                token: token_current,
            },
            success: function(response) {
                if (response) {
                    showSuccess($button, response.message);

                    setTimeout(function() {
                        window.location.replace('/auth');
                    }, 300);
                } else {
                    showerror($button, response.message);
                }
            }
        });
    });
}

CambiarContrasena();

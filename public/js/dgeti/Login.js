/**
 * Script que realiza acciones referentes a el login y sesiones de usuario
 * de manera asíncrona con el servidor.
 */

$(document).ready(function () {
    var txtUsuario = $('#txtUsuario');
    var txtContrasena = $('#txtContrasena');
    var btnIngresar = $('#btnIngresar');
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    btnIngresar.click(function () {
        iniciarSesion();
    });

    /**
     * Manda petición al servidor para iniciar sesión con los datos del
     * usuario, y redirige a la página correspondiente si estos fueron
     * correctos.
     */
    function iniciarSesion() {
        jQuery.ajax({
            url: 'login',
            type: 'POST',
            dataType: 'JSON',
            data: {
                _token: CSRF_TOKEN,
                usuario: txtUsuario.val(),
                contrasena: txtContrasena.val()
            },
            success: function (result) {
                console.log(result);
                if (!result.loginCorrecto) {
                    showErrorNotification('Datos incorrectos');
                } else {
                    window.location = destino;
                }
            },
            error: function (error) {
                showErrorNotification('No se puede conectar al servidor');
            }
        });
    }
});
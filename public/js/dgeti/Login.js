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
            url: '/login',
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

// /**
//  * Este código administra el login y sus respectivas validaciones.
//  */
// $(document).ready(function () {
//     var txtUser = $('#txtUser');
//     var txtPassword = $('#txtPassword');
//     var btnIngresar = $('#btnIngresar');
//     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//
//     /**
//      * Esta función intenta hacer el login del usuario verificando los datos
//      * de acceso en el servidor, redirecciona a la página correspondiente
//      */
//     var intentarLogin = function () {
//         jQuery.ajax({
//             url: '/user/signin',
//             type: 'POST',
//             dataType: 'JSON',
//             data: {
//                 _token: CSRF_TOKEN,
//                 username: txtUser.val(),
//                 password: txtPassword.val()
//             },
//             success: function (result) {
//                 if (!result.loginCorrect) {
//                     showErrorNotification('Usuaria o contraseña' +
//                         ' incorrectos');
//                 } else {
//                     var id = 2;
//                     window.location = '/centros_de_gestion/' + id;
//                 }
//             },
//             error: function (error) {
//                 showErrorNotification('No se puede conectar al servidor');
//             }
//         });
//     };
//
//     /**
//      * Evento llamado al hacer click en el botón de ingresar.
//      */
//     btnIngresar.click(function () {
//         if (txtUser.val().replace(' ', '') != ''
//             && txtPassword.val().replace(' ', '') != '')
//             intentarLogin();
//         else
//             showErrorNotification('Ingresa los datos completos');
//     });
// });
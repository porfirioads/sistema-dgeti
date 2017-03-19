/**
 * Created by AdrianHMG on 16/03/2017.
 */

function eliminar(id_doce, nomb, primer_ap, segundo_ap) {
        var id = id_doce;
        var nombre = nomb;
        var primer_apellido = primer_ap;
        var segundo_apellido = segundo_ap;

        console.log(id);

        $('#confirm').find('.modal-body').text('\u00bf Desea eliminar a ' + nombre + ' ' + primer_apellido + ' ' + segundo_apellido + ' ?');

        $('#confirm').modal({
            backdrop: 'static',
            keyboard: false,
        })

            .on('click', '#btnConfirmar', function (e) {
                eliminarDocente(id);
            })

            .on('click', '#btnCancelar', function (e) {
                id = "";
                nombre = "";
                primer_apellido = "";
                segundo_apellido = "";
            })

        function eliminarDocente(id) {
            jQuery.ajax({
                url: '/docente_definitivo/'+id,
                type: 'DELETE',
                dataType: 'JSON',
                success: function (result) {
                    console.log(result);
                    if (!result.eliminado) {
                        showErrorNotification('Datos incorrectos');
                    } else {
                        window.location = 'docente_definitivo';
                        showInfoNotification('Docente eliminado correctamente.');
                    }
                }
            });
        }
}
//$('button[name="remove_levels"]').on('click', function (e) {
//    var $form = $(this).closest('form');
//    e.preventDefault();
//
//    $('#confirm').find('.modal-body').text('heloo');
//
//    $('#confirm').modal({
//        backdrop: 'static',
//        keyboard: false,
//    })
//
//
//        .one('click', '#delete', function (e) {
//            $form.trigger('submit');
//        });
//});
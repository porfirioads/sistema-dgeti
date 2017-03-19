/**
 * Created by AdrianHMG on 16/03/2017.
 */

function eliminar(mena, nomb, primer_ap, segundo_ap) {
    var mensaje = mena;
    var nombre= nomb;
    var primer_apellido = primer_ap;
    var segundo_apellido = segundo_ap;

    $('button[id="btnEliminar"]').on('click', function (e) {
        e.preventDefault();

        console.log(mensaje);

        var modalDelete = $('#confirm');
        modalDelete.find('.modal-body').text('¿Desea eliminar a '+nombre+' '+primer_apellido+' '+segundo_apellido+' ?');

        modalDelete.modal({
            backdrop: 'static',
            keyboard: false,
        })


            .on('click', '#btnConfirmar', function (e) {
            })

            .on('click', '#btnCancelar', function (e) {
                mensaje = "";
                nombre = "";
                primer_apellido = "";
                segundo_apellido = "";
                console.log("sffs");
            })
    });
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
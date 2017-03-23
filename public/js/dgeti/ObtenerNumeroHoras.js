/**
 * Created by AdrianHMG on 22/03/2017.
 */
function changeFunc(value) {

    console.log(value.value);
    var descripcion_tipo_plaza_id = value.value;

    var elem = value.parentNode.nextSibling.nextElementSibling.children[0];
    console.log(elem);

    $.get('/information/create/ajax-state-numero-horas?descripcion_tipo_plaza_id=' + descripcion_tipo_plaza_id, function (data) {

        $(elem).empty();

        $(elem).append($('<option selected>', {
            value: -1,
            text: 'Selecciona Número Horas ...'
        }));

        $.each(data, function (index, subCatObj) {
            //console.log(subCatObj.numero_horas);
            $(elem).append($('<option>', {
                value: subCatObj.id,
                text: subCatObj.numero_horas
            }));
        });

    });

}
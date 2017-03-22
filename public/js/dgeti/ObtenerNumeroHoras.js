/**
 * Created by AdrianHMG on 22/03/2017.
 */
$('#plaza_tipo').on('change', function (e) {
    console.log(e.target.value);
    var descripcion_tipo_plaza_id = e.target.value;

    $.get('/information/create/ajax-state-numero-horas?descripcion_tipo_plaza_id=' + descripcion_tipo_plaza_id, function (data) {

        $('#numero_horas').empty();

        $.each(data, function (index, subCatObj) {
            //console.log(subCatObj.numero_horas);
            $('#numero_horas').append($('<option>', {
                value: subCatObj.id,
                text: subCatObj.numero_horas
            }));
        });

    });

});
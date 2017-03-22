/**
 * Created by AdrianHMG on 21/03/2017.
 */
$('#selComponenteDisciplinas').on('change', function (e) {
    //console.log(e.target.value);
    var componente_formacion_id = e.target.value;

    $.get('/information/create/ajax-state?componente_formacion_id=' + componente_formacion_id, function (data) {

        $('#selCampos').empty();
        $('#selDisciplinas').empty();
        $('#selCampos').append($('<option selected>', {
            value: -1,
            text: 'Selecciona Campo Disciplinar ...'
        }));
        $.each(data, function (index, subCatObj) {
            //console.log(subCatObj.campo_disciplinar);
            $('#selCampos').append($('<option>', {
                value: subCatObj.id,
                text: subCatObj.campo_disciplinar
            }));
        });

        $('#selCampos').on('change', function (e) {
            console.log(e.target.value);
            var campo_disciplinar_id = e.target.value;

            $.get('/information/create/ajax-state-disciplinas?campo_disciplinar_id=' + campo_disciplinar_id, function (data) {

                $('#selDisciplinas').empty();
                $('#selDisciplinas').append($('<option selected>', {
                    value: -1,
                    text: 'Selecciona Disciplina ...'
                }));
                $.each(data, function (index, subCatObj) {
                    console.log(subCatObj.disciplina);

                    $('#selDisciplinas').append($('<option>', {
                        value: subCatObj.id,
                        text: subCatObj.disciplina
                    }));
                });

            });

        });

    });
});
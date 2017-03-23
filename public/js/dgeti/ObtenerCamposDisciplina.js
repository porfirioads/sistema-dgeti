/**
 * Created by AdrianHMG on 21/03/2017.
 */
function changeFuncComponente(value) {
    //console.log(value.value);
    var componente_formacion_id = value.value;

    var elem = value.parentNode.nextSibling.nextElementSibling.children[0];
    var elemDis = elem.parentNode.nextSibling.nextElementSibling.children[0];
    console.log(elemDis);

    $.get('/information/create/ajax-state?componente_formacion_id=' + componente_formacion_id, function (data) {

        $(elem).empty();
        $(elemDis).empty();
        $(elem).append($('<option selected>', {
            value: -1,
            text: 'Selecciona Campo Disciplinar ...'
        }));
        $.each(data, function (index, subCatObj) {
            //console.log(subCatObj.campo_disciplinar);
            $(elem).append($('<option>', {
                value: subCatObj.id,
                text: subCatObj.campo_disciplinar
            }));
        });

        $(elem).on('change', function (e) {
            console.log(e.target.value);
            var campo_disciplinar_id = e.target.value;

            $.get('/information/create/ajax-state-disciplinas?campo_disciplinar_id=' + campo_disciplinar_id, function (data) {

                $(elemDis).empty();
                $(elemDis).append($('<option selected>', {
                    value: -1,
                    text: 'Selecciona Disciplina ...'
                }));
                $.each(data, function (index, subCatObj) {
                    console.log(subCatObj.disciplina);

                    $(elemDis).append($('<option>', {
                        value: subCatObj.id,
                        text: subCatObj.disciplina
                    }));
                });

            });

        });

    });
}
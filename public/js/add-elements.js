/**
 * Created by santiago on 18/03/17.
 */
var idCount = 1;

$('.add-element').click(function () {
/*
    var $orginal = $(this).parent().parent().parent().children(".elemento").first().clone(true, true);

    $hermano = $(this).parent().parent().parent().children(".division");
 */

    var htmlRow = historial_original[0].outerHTML;
    var newId = 'historial_evaluacion_row_' + idCount++;
    htmlRow = htmlRow.replace('id="historial_evaluacion_row', 'id="' + newId);

    $('#agregar').append(htmlRow);

    $('#' + newId).find('select').each(function (index, item) {
        $(item).select2({});
           console.log(item);
        });


    $('#' + newId).find('.datepicker').each(function (index, item) {
        $(item).datepicker({
            autoclose: true
        });
    });

    $('#' + newId + ' .remove').click(function () {
        $(this).parent().parent().remove();
    });


});




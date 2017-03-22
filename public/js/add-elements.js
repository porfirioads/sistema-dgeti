/**
 * Created by santiago on 18/03/17.
 */
var idCountHistorial = 1;

$('.add-element-evaluacion').click(function () {

    var htmlRowHistorial = historial_original[0].outerHTML;

    var newId = 'historial_evaluacion_row_' + idCountHistorial++;

    htmlRowHistorial = htmlRowHistorial.replace('id="historial_evaluacion_row', 'id="' + newId);

    $('#agregarHistorial').append(htmlRowHistorial);

    $('#' + newId).find('select').each(function (index, item) {
        $(item).select2({});
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



$('.add-element-plaza').click(function () {

    var htmlRowPlaza = plaza_original[0].outerHTML;

    var newId = 'plaza_row_' + idCountHistorial++;

    htmlRowPlaza = htmlRowPlaza.replace('id="plaza_row', 'id="' + newId);

    $('#agregarPlaza').append(htmlRowPlaza);

    $('#' + newId).find('select').each(function (index, item) {
        $(item).select2({});
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
$('.remove').click(function () {
    $(this).parent().parent().remove();
})





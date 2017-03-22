/**
 * Created by santiago on 18/03/17.
 */
var idCountHistorial = 1;
var idCountPlaza = 1;
var idCountAcademico = 1;

$('.add-element-academico').click(function () {

    var htmlRowAcademico = academicos_original[0].outerHTML;

    var newId = 'datos_academicos_row_' + idCountAcademico++;

    htmlRowAcademico = htmlRowAcademico.replace('id="datos_academicos_row', 'id="' + newId);

    $('#agregarAcademico').append(htmlRowAcademico);

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

    var newId = 'plaza_row_' + idCountPlaza++;

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

//////////////////////////// DANGER ZONE /////////////////////////////////////////////////
$('.remove').click(function () {
    $(this).parent().parent().remove();
})
//////////////////////////// DANGER ZONE /////////////////////////////////////////////////




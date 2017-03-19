/**
 * Created by santiago on 18/03/17.
 */



var plazas = $('#plazas');
var  elemento = $('.elemento');

var btnAgrega = $('#btnAgrega');
var btnElimina = $('.btnElimina');

btnAgrega.click(function () {
    plazas.append(elemento.clone());
});


btnElimina.click(function () {
    $(this).parent().parent().remove();
});



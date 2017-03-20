/**
 * Created by santiago on 18/03/17.
 */


$('.add-element').click(function() {

    var $orginal =  $(this).parent().parent().parent().first().children(".elemento");

    var $cloned = $orginal.clone(true,true);

    var $originalSelects = $orginal.find('select');
    $cloned.find('select').each(function(index, item) {
        $(item).val($originalSelects.eq(index).val());

    });
    $final = $($cloned[0]);
    $hermano = $(this).parent().parent().parent().children(".division");
    $final.appendTo($hermano);
    inicializaComponentes();
});

function inicializaComponentes() {
    var $elementos = $('.elemento');

    console.log($elementos);


    $elementos.on('select2:select', function (evt) {
        console.log("select");
    });

    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
}

$('.remove').click(function(){
    var $elementos = $(this).parent().parent().parent().parent().find(".elemento");

    //si no tiene más elementos iguales eliminar
    // si no simplemente dejar ir
    if ($elementos.length>=2){
        $(this).parent().parent().remove();
    }
});


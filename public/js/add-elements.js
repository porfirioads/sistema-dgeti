/**
 * Created by santiago on 18/03/17.
 */


$('.add-element').click(function() {

    var $orginal =  $(this).parent().parent().parent().children(".elemento");
    var $cloned = $orginal.clone(true,true);



    var $originalSelects = $orginal.find('select');
    $cloned.find('select').each(function(index, item) {
        //set new select to value of old select
        $(item).val($originalSelects.eq(index).val());
    });
    $final = $($cloned[0]);

    $hermano = $(this).parent().parent().parent().children(".division");

    console.log($hermano);
    $final.appendTo($hermano);
    //$final.appendTo('.division');
});

$('.remove').click(function(){
    var $elementos = $(this).parent().parent().parent().parent().children(".elemento");
    var $orginal = $(this).parent().parent();


    var $cloned = $orginal.clone(true,true);



    console.log($elementos);

    //si no tiene más elementos iguales eliminar
    // si no simplemente dejar ir
    if ($elementos.length>=0){
        console.log("eliminar");
        $(this).parent().parent().remove();
    }


});
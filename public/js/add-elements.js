/**
 * Created by santiago on 18/03/17.
 */


$('.add-element').click(function() {

    var $orginal = $('.elemento');
    var $cloned = $orginal.clone(true,true);


    //get original selects into a jq object
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
    var $orginal = $('.elemento');


    var $cloned = $orginal.clone(true,true);

    //si no tiene más elementos iguales eliminar
    // si no simplemente dejar ir
    if ($cloned.length>1){
        console.log("eliminar");
        $(this).parent().parent().remove();
    }


});
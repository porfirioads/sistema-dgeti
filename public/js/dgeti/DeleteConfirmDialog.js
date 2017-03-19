/**
 * Created by AdrianHMG on 16/03/2017.
 */
$('button[name="remove_levels"]').on('click', function (e) {
    var $form = $(this).closest('form');
    e.preventDefault();

    var modalDelete = $('#confirm');

    modalDelete.find('.modal-body').text('heloo');

    modalDelete.modal({
        backdrop: 'static',
        keyboard: false,
    })


        .one('click', '#delete', function (e) {
            $form.trigger('submit');
        });
});
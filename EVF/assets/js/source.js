$('[data-group]').each(function(){

    var $dataTarget  = $(this).find('[data-target]'),
        $dataClick = $(this).find('[data-click]'),
        a = 'active';

        //console.log(dataTarget);

    $dataTarget.first().addClass(a);
    $dataClick.first().addClass(a);

    $dataClick.on('click', function(e){

        e.preventDefault();

        var id = $(this).data('click'),
        $target = $('[data-target="' + id + '"]');

        $dataClick.removeClass(a);
        $dataTarget.removeClass(a);

        $target.addClass(a);
        $(this).addClass(a);


    });

});

if($('form').height() > 0){

    var selector = 'form';

    $(selector).submit(function() {
        var r = confirm("Confirm ?");
        if (r === false) {
            return false;
        }
    });

}
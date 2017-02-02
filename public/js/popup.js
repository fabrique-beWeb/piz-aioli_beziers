function popup(id) {

    $('#popup').fadeToggle();
    var close = $('.close');
    close.click(function (event)
    {
        $('#popup').fadeToggle();
    });


    $('a.lienadd').click(function (event) {
        event.preventDefault();
    });

    $('a.lienadd').click(function () {
        addtocart(id);
    });

}

function addtocart(id) {
<<<<<<< HEAD

=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
    $.ajax({
        url: "/addtocart/" + id,
        dataType: 'json',
  complete : function(result){

cartnb=result.responseJSON.cartnb;
$('.cart').html("");
$('.cart').append(cartnb);
    $('#popup').fadeToggle();
}

<<<<<<< HEAD
    });
=======
    })
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
    }
function popup(id) {

    $('#popup').fadeIn();
    var close = $('.close');
    close.click(function (event)
    {
        $('#popup').fadeOut();
    });

    $('#lienadd').click(function () {
        addtocart(id);
    });

}

function addtocart(id) {
    $.ajax({
        url: "/addtocart/" + id,
        dataType: 'json',
  complete : function(result){

cartnb=result.responseJSON.cartnb;
    $('.cart').html("");
$('.cart').append(cartnb);

}    });
    $('#popup').fadeOut();
    }
    
//Vider + contenu panier en popup
    
    
function mycart() {

    $('#mycart').fadeIn();


    $.ajax({
        url: "/listcart",
        dataType: 'json',
  complete : function(listcart){
listcart=listcart.responseJSON.listcart;
    $('#listcart').html("");
$('#listcart').append(listcart);

}
    });
    
        var closecart = $('.closecart');
    closecart.click(function (event)
    {
        $('#mycart').fadeOut();
    });
    
}

function emptycart() {

    $.ajax({
        url: "/emptycart",
        dataType: 'json',
  complete : function(emptycart){

cartnb=emptycart.responseJSON.cartnb;
    $('.cart').html("");
$('.cart').append(cartnb);

}
    });

    $('#mycart').fadeOut();
    }
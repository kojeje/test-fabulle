


$('.members').click(function () {
    current = $(this).attr('id');
    $("#" + current + " > div.modal").show('slow');
});

$('.close').click(function () {
    parent = $(this).parent();
    grandparent = $(parent).parent().attr('id');
   $("#" + grandparent).hide('slow');
 })









    







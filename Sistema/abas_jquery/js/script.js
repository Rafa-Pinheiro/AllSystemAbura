$(document).ready(function(){
    $('.tab_container:first').show();
    $('.tab_navigation li:first').addClass('active');

    $('.tab_navigation li').click(function(event){
        index = $(this).index();
        $('.tab_navigation li').removeClass('active');
        $(this).addClass('active');
        $('.tab_container').hide();
        $('.tab_container').eq(index).show();
    });
});
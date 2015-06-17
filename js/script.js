/**
 * Created by armel on 09/06/15.
 */
jQuery(function($){
    'use strict';
$('.skyblue>li>a').each(function(){
    $(this).on('click',function(e){
        $('.skyblue>li>a').parent().removeClass('active');
        $(this).parent().addClass('active');
    })
});
    $('#wattsapp').parent()
        .mouseover(function(e){
       $('#wattsapp').attr('src','../images/wattsapp1.png');
    })
        .mouseout(function(e) {
            $('#wattsapp').attr('src', '../images/wattsapp.png');
        });
    
    $("a[name='art']").each(function(){
        var src = $(this).find('img').attr('src');
        var adr = src.substring(src.lastIndexOf('/'));
        $(this).attr('href','#/article'+adr);
    });  
       //var src = $(this).find('img').attr('src');
        //$(this).attr('href','#/article/'+src);
        //alert('okjk');
    //})
})
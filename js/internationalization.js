/**
 * Created by armel on 09/06/15.
 */
jQuery(function($) {
    'use strict';

    var $lang = $('#langue>option:selected').attr('id');
    //$langue = $('#langue>option:selected').text();

    function translate(word){
        $.i18n.prop(word);
    }

    function langage() {
        $.i18n.properties({
            name: 'messages',
            path: '../messages/',
            mode: 'both',
            language: $lang,
            callback: function () {

                $('#langue>option').each(function(){
                    var $langue = $(this).val();
                    $(this).text($.i18n.prop($langue));
                    //alert($lang);
                });

               $(":text[name='search']").val($.i18n.prop('search_placeholder'));
                $(":text[name='search']")
                    .blur(function(e){
                        if($(this).val()=='')
                            $(this).val($.i18n.prop('search_placeholder'));
                    });

                $("#mail").val($.i18n.prop('mail'));
                $("#mail")
                    .blur(function(e){
                        if($(this).val()=='')
                            $(this).val($.i18n.prop('mail'));
                    })
                    .focus(function(e){
                        $(this).val('');
                    })

                $('.header-in>li>a').each(function(){
                    var $menuName = $(this).attr('name');
                    $(this).text($.i18n.prop($menuName));
                });

                $('.skyblue>li>a').each(function(){
                    var $rubic = $(this).attr('name');
                    $(this).text($.i18n.prop($rubic));
                    });

                $('.art').each(function(){
                    var $article = $(this).attr('name');
                    $(this).text($.i18n.prop($article));
                });

                $('#popular_fashion').text($.i18n.prop('popular_fashion'));

                $('.new').text($.i18n.prop('arrivage'));

                $('.middle').text($.i18n.prop('meilleur'));

                $('#new_letter').text($.i18n.prop('news'));

                $('#sign_newsletter').text($.i18n.prop('sign_newsletter'));

                $('.first_footer_menu').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });

                $('.second_footer_menu').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });

                $('.third_footer_menu').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });

                $('.footer-class').html($.i18n.prop('droit')+" <br /><a href='http://www.adorsys.cm/' target='_blank' style='color: black'>Design by Adorsys S.A</a>");

                $('.footer-right>h5').text($.i18n.prop('we_support'));

                $('#item').text($.i18n.prop('items'));
                
                $('.critique').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });
                
                $('#size').text($.i18n.prop('size'));
                
                $('#cost').text($.i18n.prop('cost'));
                
                $('#detail').text($.i18n.prop('detail'));
                
                $('.desc').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });
                
                $('#br').text($.i18n.prop('brands'));
                
                $('#colors').text($.i18n.prop('color'));
                
                $('.color').each(function(){
                    var $name = $(this).attr('name');
                    $(this).text($.i18n.prop($name));
                });
                
                $('#cate').text($.i18n.prop('cate'));

                //$('#submit_newsletter').val($.i18n.prop('submit_newsletter'));
                //$('.total').text('bla bla');
                //$('#welcome').text($.i18n.prop("welcome"));
                //$('#salut').text($.i18n.prop('salut'));
                //alert($lang+"  "+$langue);
            }
        });
    }
    langage();

    $('#langue').on('change',function(){
        $lang = $('#langue>option:selected').attr('id');
        langage();
        //alert($lang);
    })
    
    //$('#welcome').text($.i18n.prop('welcome'));
    //$('#salut').text($.i18n.prop('salut'));
})
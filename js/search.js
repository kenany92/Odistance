jQuery(function($){
    'use strict';

	var mots = [];

	$(".h_nav ul li a").each(function(){
		mots.push($(this));
	});

	//alert(mots[0].text());

	function removeChild(){
		$("#result>div").each(function(){
			$(this).remove();
		});
	}

	$(":text[name='search']")
		.focus(function(e){
				$(this).val('');
		})

		.keyup(function(e){
			var mot = $(this).val();

			$("#result>div").each(function(){
				$(this).remove();
			});

			$("#result").css('display','block');


			mots.forEach(function(valeur,index,array){
					if(valeur.text().toUpperCase().indexOf(mot.toUpperCase()) != -1) {
						$("#result").append("<div>" + valeur.parent().html() + "</div>");
						//console.log(valeur.html());
						//alert(valeur.parent().html());
					}

				});

			if($(this).val()==''){
				$("#result>div").each(function(){
					$(this).remove();
				});
				$("#result").css('display','none');
				//console.clear();
			}


				//$("#result").css('display','none');
			//console.clear();

		})


	})

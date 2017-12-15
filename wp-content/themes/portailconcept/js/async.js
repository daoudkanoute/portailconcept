(function($){

// trigger on load
$(window).on('load', function(){
	loadHabitat();
})

// trigger on scroll
$(window).on('scroll', function(){

	//infiniteScroll();
});	
   
})(jQuery);



function infiniteScroll()
{
	var w = $(window);
	var d = $(document);
	if(d.height() - w.height() == w.scrollTop() )
	{
		if (active == 'h_portail')
			callAsync(domElm, 'async')
		if (active == 'h_cloture')
			callAsync(domElm, 'asyncCloture')
		if (active == 'h_automatisme')
			callAsync(domElm, 'asyncAutomatisme')
		if (active == 'h_portillons')
			callAsync(domElm, 'asyncPortillon')
	}
}

var active = "h_portail";
var domElm = $('#'+active);
var show_active = "show_"+active;
function callAsync(e, func) 
{
		$.ajax({
			url:ajaxpagination.ajaxurl,
			type:"POST",
			async:true,
			dataType:"json",
			data:{
				action:func
			},
			complete:function(result)
			{
				
				$habitat = $('#habitat');
				if(active != $(e).attr('id')) $habitat.html('');
				if(result.status == 200 && result.responseText.length > 0) {
					$habitat.append(result.responseText);
				}else {
					$habitat.append("<p>Aucun resultat.</p>")
				}



				// hide current link indicator
				$('#'+active).removeClass('active');	
				// hide current display
				//$('#'+show_active).css('display','none');
				// store current link & current display & dom element
				active = $(e).attr('id');
				show_active = "show_"+active;
				domElm = e;
				// show current link indicator
				$(e).addClass('active');
				// show current display
				//$('#'+show_active).css('display', 'block');



			}
		});

		return false;
}

function loadHabitat()
{
	var habitat = {'async':0};

	for (var func in habitat) 
	{
		console.log('call async:'+func);
		$.ajax({
			url:ajaxpagination.ajaxurl,
			type:"POST",
			async:true,
			dataType:"json",
			data:{
				action:func
			},
			complete:function(result)
			{
				$habitat = $('#habitat');
				if(result.status == 200 && result.responseText.length > 0) {
					$habitat.append(result.responseText);
				}else {
					if(func == "asyncCloture")
					{
						$habitat.append("<div id='show_h_cloture' style='display:none'><p>Nous avons trouvez aucune résultat dans cette rubrique.</p></div>")

					}
					if(func == "asyncAutomatisme")
					{
						$habitat.append("<div id='show_h_automatisme' style='display:none'><p>Nous avons trouvez aucune résultat dans cette rubrique.</p></div>")
					}
				}

			}
		});
	}
		
}

function loadCollectivite()
{
	var habitat = {'async':0};

	for (var func in habitat) {
		$.ajax({
			url:ajaxpagination.ajaxurl,
			type:"POST",
			async:true,
			dataType:"json",
			data:{
				action:func
			},
			complete:function(result){
				$('#collectivite').html(result.responseText);
			}
		});
	}
		
}
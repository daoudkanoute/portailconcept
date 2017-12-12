(function($){

$(window).on('load', function(){
	loadHabitat();
})

})(jQuery);


function loadHabitat()
{
	var habitat = {'asyncPortillon':0, 'asyncCloture':0, 'asyncAutomatisme':0,'async':0};

	for (var func in habitat) 
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
				$('#portail').append(result.responseText);
			}
		});
	}
		
}

function loadCollectivite()
{
	var habitat = {'async':0, 'asyncPortillon':0, 'asyncCloture':0, 'asyncAutomatisme':0};

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
$.fn.modal = function(){
	var th = $(this);
		$('button').on('click', function(e){
			e.preventDefault();

			if($(this).attr("href") == ('#'+th.attr('id')) ){
				th.toggle();
			}
		});
		
};


$(document).ready(function(){
	
		
			$("#modal_window").modal();
		
});

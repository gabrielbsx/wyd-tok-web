$(document).ready(function(){
	updateCustomSelect();

    /*---------- show/hide password in input ----------*/

    $('.pass-input').on('click', '.show-btn', function(event) {
      event.preventDefault();
        if(!$(this).hasClass('visible')) {
          $(this).addClass('visible');
          $(this).parent().find('input').attr('type','text');
        } else {
          $(this).removeClass('visible');
          $(this).parent().find('input').attr('type','password');
        } 
    });

    if($('.scrollbar-inner').length){
    	$('.scrollbar-inner').scrollbar({});
    }
});

function updateCustomSelect(){
	if ($(".custom-select").length){

		var select =  $(".custom-select");

		select.select2({
			minimumResultsForSearch: Infinity,
			theme: "custom",
			placeholder: ""
		});

		select.on('select2:opening', function(event) {
			setTimeout(function() {
				$('.select2-dropdown .select2-results__options').addClass('scrollbar-inner');
			}, 0);
		});

		select.on('select2:open', function(event) {
			setTimeout(function() {
				$('.select2-dropdown .select2-results__options').scrollbar({});
			}, 0);
		});
	}
}
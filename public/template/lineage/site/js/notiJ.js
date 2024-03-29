(function( $ )
	{	
		$.notij=function(msg, options, callback) { return $.fn.notij(msg, options, callback); };

		$.fn.notij = function(msg, options, callback){

			var settings={
				'speed': 'fast',
				'multiple': true,
				'autoclose': 5000,
				'onfocusdelay': true,
				'type' : 'default'
			};

			if(!msg){msg=this.html();}

			if(options){ $.extend(settings,options);}

			var display=true;
			var multiple="no";

			var uniquid=Math.floor(Math.random()*99999);

			$('.notij-msg').each(function(){
				if($(this).html()==msg && $(this).is(':visible')){
					multiple="yes";
					if(!settings['multiple']){
						display = false;
					}
				}
				if($(this).attr('id')==uniquid){
					uniquid=Math.floor(Math.random()*99999);
				}
			});


			if($('.notij-que').length==0){
				$('body').append('<div class="notij-que"></div>');
			}


			if(display){
                $('.notij-que').prepend('<div class="notij theme_' + settings['type'] + '" id="' + uniquid + '"></div>');
                $('#' + uniquid).append('<span class="notij-close close_' + settings['type'] + '" rel="' + uniquid + '">x</span>');
                $('#' + uniquid).append('<div class="notij-msg" rel="' + uniquid + '">' + msg + '</div>');

				var height=$('#'+uniquid).height();


				$('#'+uniquid).slideDown(settings['speed']);
				display=true;
			}

			$('.notij').ready(function(){
				if(settings['autoclose']){
					$('#'+uniquid).delay(settings['autoclose']).fadeOut(settings['speed'],function(){
						$('#'+uniquid).remove();
					});
				}
			});

			$('.notij').mouseover(function(){
				if(settings['onfocusdelay']){
					$('#' + $(this).attr('id')).dequeue().stop().show();
				}
			});
			
			$('.notij').mouseout(function(){
				if(settings['autoclose']){
					$('#' + $(this).attr('id')).delay(settings['autoclose']).fadeOut(settings['speed'],function(){
						$('#' + $(this).attr('id')).remove();
					});
				}
			});

			$('.notij-close').click(function(){
				$('#' + $(this).attr('rel')).dequeue().fadeOut(settings['speed']);
				$('#' + $(this).attr('rel')).remove();
			});

			var result={
				"id": uniquid,
				"multiple": multiple  
			};
			
			if(callback){
				callback(result);
			} else{
				return(result);
			}

		}

})( jQuery );
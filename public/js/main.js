$(function(){
	var name_default = $('#name').text();
	var body_default = $('#body').text();
	$('.menu a').on({
		'mouseover': function(){  //link on menu block
			var name = $(this).attr('data-name');
			var body = $(this).attr('data-body');
			var picture = $(this).attr('data-picture');
			//console.log(name,body,picture); //check function
			$('#name').text(name);
			$('#body').text(body);
			//$('picture').css('background-image', 'url(/media/img/'+picture+')');// if pic - background
			$('#picture').attr('src', '/media/img/'+picture); // if pic - src
		},
		'mouseout' : function(){
			
			var picture = $(this).attr('data-picture');

			$('#name').text(name_default);
			$('#body').text(body_default);
			//$('picture').css('background-image', 'url(/media/img/'+picture+')');// if pic - background
			$('#picture').attr('src', '/media/img/bg-slide.jpg');
		}

	});// json
});
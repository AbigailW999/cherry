$(function(){
	var fx = {  //проверяем есть ли класс .modal-window
		"initModal" : function (){
			if ($(".modal-window").length == 0) {
				$("<div>").attr("id", "jquery-overlay")
						.appendTo("body")
						.click(function(event){
				event.preventDefault();
				$(".modal-window").remove();
				$("#jquery-overlay").remove();
			})
				return $("<div>")
						.addClass("modal-window")
						.appendTo("body");
			} else {
				return $(".modal-window");
			}
		}
	};


	$("a.prod_more").on("click", function(event){
		event.preventDefault();
		var data = $(this).attr("data-id");
		modal = fx.initModal();
		// AJAX - close modal window
		$("<a>").attr("href","#")
			.addClass("modal-close-btn")
			.html("&times")
			.click(function(event){
				event.preventDefault();
				$(".modal-window").remove();
				$("#jquery-overlay").remove();
			}).appendTo(modal);
		// AJAX - open modal window
		$.ajax({
			type: "Post",
			url: "/ajax",
			data: "id="+data,
			success: function(data){
				modal.append(data);
			},
			error: function(msg){
				modal.append(msg);
			}
		})
	})

});
$(document).ready(function() {

	$("#answerCallback").submit(function(){
		$.ajax({
			type: "POST",
			url: "../send.php",
			data: $(this).serialize()
		}).done(function(){
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	})

	$("#mapFeedback").submit(function(){
		$.ajax({
			type: "POST",
			url: "../send.php",
			data: $(this).serialize()
		}).done(function(){
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	})
})
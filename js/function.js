$(document).ready(function() {

	$("#answerCallback").submit(function(){
		$.ajax({
			type: "POST",
			url: "../send.php",
			data: $(this).serialize()
		}).done(function(){
			$(this).find("input").val("");
			$("#thanksYou").show(200, function(){
				$("#thanksYou").delay(2000).hide(600);
			});
			$("#form").trigger("reset");
		});
		return false;
	});

	$("#mapFeedback").submit(function(){
		$.ajax({
			type: "POST",
			url: "../send.php",
			data: $(this).serialize()
		}).done(function(){
			$(this).find("input").val("");
			$("#thanksYou").show(200, function(){
				$("#thanksYou").delay(2000).hide(600);
			});
			$("#form").trigger("reset");
		});
		return false;
	});


// MAIN PAGE
	
	var window_size = window.matchMedia('(min-width: 768px)');
	
	if(window_size.matches){

		//ПОЛОВИНКИ ЭКРАНА и TAGLINE
		$(".choise").mouseleave(function(){
			$("#left").hover(function(){
				$("#right").css("display", "none");
				$("#rightPicture").css("display", "block");			
			}, function(){
				$("#rightPicture").css("display", "none");
				$("#right").css("display", "block");
			});

			$("#right").hover(function(){
				$("#left").css("display", "none");
				$("#leftPicture").css("display", "block");
			}, function(){
				$("#leftPicture").css("display", "none");
				$("#left").css("display", "block");
			});
		});

		//TEXT AND BUTTON AND TAGLINE
		$("#left").hover(function(){
			$("#leftText").show(600, function(){ //show text
				$("#leftButton").show(600, function(){  //show button
					$("#taglineLeft").delay(600).show(800,function(){ //show tagline
						$("#taglineLeft").delay(5000).hide(1200); //hide tagline
					});
				});
			});
		}, function(){ //hide
			$("#leftText").css("display", "none");
			$("#leftButton").css("display", "none");
			$("#taglineLeft").css("display", "none");
		});


		$("#right").hover(function(){
			$("#rightText").show(600,function(){
				$("#rightButton").show(600, function(){
					$("#taglineRight").delay(600).show(800,function(){
						$("#taglineRight").delay(5000).hide(1200);
					});
				});
			});
		}, function(){
			$("#rightText").css("display", "none");
			$("#rightButton").css("display", "none");
			$("#taglineRight").css("display", "none");
		});
	}

// END MAIN PAGE

// MINI MESSAGE
	// if(window_size.matches){
	// 	setTimeout(function(){
	// 		setInterval(function(){
	// 			$("#miniMessage1").show(300, function(){
	// 				$("#miniMessage1").delay(5000).hide(500, function(){
	// 					$("#miniMessage2").delay(5000).show(300, function(){
	// 						$("#miniMessage2").delay(5000).hide(500);
	// 					});
	// 				});
	// 			});
	// 		},20000);
	// 	},5000);
	// }

	if(window_size.matches){
		setTimeout(function(){
			setInterval(function(){
				var rnd = Math.floor(Math.random() * (4 - 1 + 1)) + 1;
				rnd2 = Math.floor(Math.random() * (4 - 1 + 1)) + 1;
				$("#miniMessage"+rnd).show(300, function(){
					$("#miniMessage"+rnd).delay(5000).hide(500);
				});
			},10000);
		},5000);
	}
// END MINI MESSAGE	

//TEACHERS READ MORE
	$(".readmore").click(function(){

		if ($(this).siblings("p").children("span").css("display")=="none"){
			$(this).siblings("p").children("span").slideDown(300);
			$(this).text("Спрятать");
		}else{
			$(this).siblings("p").children("span").slideUp(400);
			$(this).text("Подробнее");
		}
		
	});

// END TEACHERS READ MORE

// NUMBERS
function mynumbers() {
			$({
				n: 0
			}).animate({
				n: 156
			}, {
				duration: 5000,
				step: function (a) {
					$("#num1").html(a | 0)
				}
			})

			$({
				n: 0
			}).animate({
				n: 4056
			}, {
				duration: 5000,
				step: function (a) {
					$("#num2").html(a | 0)
				}
			})

			$({
				n: 0
			}).animate({
				n: 35
			}, {
				duration: 4000,
				step: function (a) {
					$("#num3").html(a | 0)
				}
			})
		}
$('#numbers').viewportChecker({
	callbackFunction: function(){
		$(mynumbers);
	},
});

if(document.documentElement.clientWidth < 768){
	mynumbers();
}
// END NUMBERS

// LESSONS TO SLIDER

$(".lestoslide").click(function(){
	var thisdataclass = $(this).data('class');
	console.log($(this).data('class'));
	$(".carousel-indicators").children('[data-slide-to="'+thisdataclass+'"]').trigger('click');

});

// END LESSONS TO SLIDER

})
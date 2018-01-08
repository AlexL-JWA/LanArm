;(function ($) {

	$(document).ready(function() {

		$('.list-option-click').click(function(){
			var customOptionsBlock = $("#list-option");
			if (customOptionsBlock.is(":hidden")) {
				$("#list-option").show();
				$(".list-option-click span").addClass("active");
			} else {
				$("#list-option").hide();
				$(".list-option-click span").removeClass("active");
			}
		});

		$("#list-option li").click(function(){
			choosenValue = $(this).attr("data-value");
			$("#form-select").val(choosenValue).prop("selected", true);
			$(".list-option-click span").text($(this).text());
			$(".list-option-click").attr("data-value", choosenValue);
		});

		
		$(".list-option-click").length && $(".list-option-click").each(function() {
			var t = $(this).find("li:first-child").html(),
		        e = ($(this).find("li:first-child").html(), $(this).find("li:first-child"));
			    $(this).parent().find("span").html(t), 
			    $(this).parent().find("span").attr("data-value", t), 
			    e.addClass("hide"), 
			    $("body").on("click", ".list-option-click li", function() {
			        var t = $(this).html();
			        $(this).parent().find("li").removeClass("hide"), 
			        $(this).addClass("hide"), 
			        $(this).parent().parent().find("span").html(t), 
			        $(this).parent().parent().find("span").attr("data-value", t), 
			        $(".list-option-click span").removeClass("active"), 
			        $(".list-option-click span").next().slideUp(100)
			    })
		});

		$(".select").mouseleave(function() {
			$(".select span").next().slideUp(), $(".select span").removeClass("active")
		}),

		$("body").on("click", ".burger-menu", function() {
			$(this).toggleClass("close"), $("body").toggleClass("modal-open")
		});
		$("body").on("click", ".menu .button-submenu", function() {
			var t = $(this);
			t.hasClass("open") ? (t.toggleClass("open"), t.html("+"), console.log(3)) : t.hasClass("open") ? ($(".button-submenu").removeClass("open"), t.addClass("open"), console.log(2), t.html("_")) : (t.addClass("open"), t.html("-"), console.log(1))
		});

		$('.submenu').before("<span class='button-submenu'>+</span>");

	});

	$(window).load(function () {
		$(".partners-content").length && ($(".partners-content .item").each(function() {
	        $(this).click(function() {
	            $(".images-open").modal("show");
	            var t = $(this).find(".img").attr("data-img-url");
	            $(".images-open img").attr("src", t)
	        })
	    }), $(".modal img").click(function() {
	        $(".images-open").modal("hide"), $(".images-open img").attr("src", "#")
	    }));

	});

})(jQuery);
/**
 * popup
 */

//onLoad
$(function() {
	// グローバルメニュー
	$("#global_menu").hide();
});
/* モーダルポップアップ */
function optionMenu(menu, open, close, top, width) {
	//window.scrollTo(0, 1);

	if (top == null ) {
		top = 2;
	}

	if (width == null ) {
		width = 300;
	}

	var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
	var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

	$("body").css({
		'-webkit-user-select': 'none',
		'-webkit-tap-highlight-color': 'rgba(0, 0, 0, 0)'
	});

	$("body").append('<div id="div_etc_menu_background" style="position:absolute;top:0px;left:0;width:100%;background-color:rgba(0, 0, 0, 0);"></div>');
	$("#div_etc_menu_background").css({
		"height": scrollHeight + "px",
		"background-color": "rgba(38, 38, 38, 0.94)",
		"z-index" : "100",
		"-webkit-transition": "background-color 0.5s linear 0" });
	$('object[type="application/x-shockwave-flash"]').css("visibility", "hidden");

	menu.show();
	close.show();
	menu.children('.space').show();

	menu.css({
		'position': 'fixed',
		'top': top + '%',
		'left': '0',
		'right': '0',
		'z-index': '101',
		'margin-left': 'auto',
		'margin-right': 'auto',
		'webkitTransform': 'scale(1, 1)',
		'opacity': 1,
		'-webkit-tap-highlight-color': 'transparent',
		'-webkit-user-select': 'none'
	});

	$("textarea").css("visibility", "hidden");
	close.click(function(){
		$("body").css({
			'-webkit-user-select': '',
			'-webkit-tap-highlight-color': ''
		});
		menu.css({
			"display": "none",
			"opacity": 0,
			"webkitTransform": "scale(2, 2)",
			'-webkit-tap-highlight-color': 'rgba(0, 0, 0, 0)',
			'-webkit-user-select': 'none'
		});
		$("#div_etc_menu_background").remove();
		$('object[type="application/x-shockwave-flash"]').css("visibility", "visible");
		$("textarea").css("visibility", "visible");
	});
	$("#div_etc_menu_background").click(function(){
		$("body").css({
			'-webkit-user-select': '',
			'-webkit-tap-highlight-color': ''
		});
		menu.css({
			"display": "none",
			"opacity": 0,
			"webkitTransform": "scale(2, 2)",
			'-webkit-tap-highlight-color': 'rgba(0, 0, 0, 0)',
			'-webkit-user-select': 'none'
		});
		$("#div_etc_menu_background").remove();
		$('object[type="application/x-shockwave-flash"]').css("visibility", "visible");
		$("textarea").css("visibility", "visible");
	});
};
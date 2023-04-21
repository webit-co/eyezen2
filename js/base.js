$(function() {
	//読み込まれたらとりあえず実行
	setMesh();
	//リサイズしたら実行
	$(window).resize(function(){
	   setMesh();
	});
});

function setMesh() {
	var video_h = $('#top_video_wap').height();
	$('.mesh').css({"height":video_h});
}

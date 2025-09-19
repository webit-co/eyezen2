<article id="top_header">
	<section class="width100">
		<h1 id="page_name">
			<span>EQUIPMENT</span>
		</h1>
		<div id="top_video_wap">
			<video class="masthead-video" autoplay loop muted >
				<source src="mov/eyezen4.mp4" type="video/mp4">
			</video>
		</div>
		<div class="mesh backb"></div>
	</section>
</article>
<?php
include($file_pass."include/nav.php");
?>

<article id="machinery_contents">
	<div class="title_box">
		<h1 id="machinery_title" class="title1 befor_line">
			機材一覧
		</h1>
	</div>
	<div id="machinery_box" class="content_w">
		<img class="machinery_img" src="img/eng.png">
		<div id="machinery_text">
			<?php
				include($file_pass."include/machinery_list.php");
			?>
		</div>
		<img class="machinery_img" src="img/cinema.png">
	</div>
</article>

<article id="top_header">
	<section class="width100">
		<h1 id="page_name">
			<span>TECHNIQUE</span>
		</h1>
		<img src="<?php echo $site_url ?>img/sp/p_technique.jpg" alt="ABOUTUSトップイメージ">
		<div class="mesh backb"></div>
	</section>
</article>

<article id="technique_contents">
	<div class="title_box">
		<h1 id="technique_title" class="title1 befor_line">
			業務内容
		</h1>
	</div>
	<div id="technique_box" class="content_w">
		<div id="technique_text">
			<dl class="technique">
				<dt>TV番組撮影</dt>
					<dd>
						ＥＮＧ取材 － 紀行・ドキュメント・バラエティー・スポーツ・報道
						<br>中継技術 － スポーツ・音楽・各種イベント
					</dd>
				<dt class="line_top">ドローン撮影</dt>
			</dl>
		</div>
	</div>
</article>

<!-- 実績 -->
<?php
	include($file_pass."include/actual_contents.php");
?>

<article id="machinery_contents">
	<div class="title_box">
		<h1 id="machinery_title" class="title1 befor_line">
			機材一覧
		</h1>
	</div>
	<div id="machinery_box" class="content_w">
		<img class="machinery_img" src="img/dji_inspire_2.png">
		<div id="machinery_text">
			<?php
				include($file_pass."include/machinery_list.php");
			?>
		</div>
		<img class="machinery_img" src="img/eos_c300_mark_2.png">
	</div>
</article>

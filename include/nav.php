<nav id="top_main_nav">
		<div id="nav_log">
			<a href="<?php echo $site_url ?>">
				<img src="<?php echo $site_url ?>img/logo.png" alt="eyezen" />
			</a>
		</div>
	<ul>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>">TOP</a>
		</li>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>aboutus">ABOUT US</a>
		</li>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>gallery">GALLERY</a>
		</li>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>technique">TECHNIQUE</a>
		</li>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>products">PRODUCTS</a>
		</li>
		<li class="each_nav">
			<a href="<?php echo $site_url ?>recruit">RECRUIT</a>
		</li>
	</ul>
	<?php if($page_name != "index"):?>
	<div id="content_nav">
		<a href="mailto:eyezen@eyezen.jp"></a>
	</div>
	<?php endif ;?>
</nav>
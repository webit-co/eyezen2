<div id="gallery_box">
	<ul id="gallery_category">
		<li>
			<div class="category_title">
				PV
			</div>
			<div class="gallery_list variable-width">
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/CHERRY-BLOSSOM-2020.php">
						<img src="https://i.ytimg.com/vi/gIQXu7y-zdA/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								CHERRY BLOSSOM 2020 IN JAPAN
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/BOUNO.php">
						<img src="https://i.ytimg.com/vi/6yQTaroDFE0/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								BOUNO!Pizzeria Carole
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/hotelsobial.php">
						<img src="https://i.ytimg.com/vi/fUd6RUNPjwY/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								ホテル　ソビアル
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
			</div>
		</li>
		<li>
			<div class="category_title">
				4K
			</div>
			<div class="gallery_list variable-width">
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/hong-kong-4k.php">
						<img src="https://i.ytimg.com/vi/VsFBMMfqYNU/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								Hong Kong 4K
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/masutang.php">
						<img src="https://i.ytimg.com/vi/G0AdukFDz7M/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								マスタングCM 4K in USA
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
			</div>
		</li>
		<li>
			<div class="category_title">
				ドローン
			</div>
			<div class="gallery_list variable-width">
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/drone-reel-2019.php">
						<img src="https://i.ytimg.com/vi/heYpi8eSItw/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								drone reel 2019
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/hong-kong-4k.php">
						<img src="https://i.ytimg.com/vi/VsFBMMfqYNU/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								Hong Kong 4K
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/masutangu-cm.php">
						<img src="https://i.ytimg.com/vi/G0AdukFDz7M/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								マスタングCM 4K in USA
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/artlake.php">
						<img src="https://i.ytimg.com/vi/VB17iKmYJl8/mqdefault.jpg" alt="">
						<div class="click_mask">
							<div class="mask_move_title text">
								アートレイクゴルフ倶楽部
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
			</div>
		</li>
		<li>
			<div class="category_title">
				VTR
			</div>
			<div class="gallery_list variable-width">
				<div class="each_move">
					<a class="popup-modal" href="popup-modal/amazing_hongkong_macau.php">
						<img src="https://i.ytimg.com/vi/z-Lz_4X2T3s/mqdefault.jpg" alt="AMAZING HONGKONG MACAU">
						<div class="click_mask">
							<div class="mask_move_title text">
								AMAZING HONGKONG MACAU
							</div>
							<div class="click_text">
								click!
							</div>
						</div>
					</a>
				</div>
			</div>
		</li>
	</ul>
</div>
<div class="more_box mt30 mb30">
	<a href="<?php echo $site_url ?>gallery">MORE</a>
</div>
<script src="<?php echo $site_url ?>js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
<?php if ($ua_type == "mobile"):?>
	slidesToShow_count = 2
<?php else: ?>
	slidesToShow_count = 3
<?php endif; ?>
$(function () {
  $('.popup-modal').magnificPopup({
    type: 'ajax',
    preloader: false,
    gallery: { //ギャラリー表示にする
	    enabled:true
	  }
  });
  //閉じるリンクの設定
  $(document).on('click', '.popup-modal-dismiss, mfp-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });

  //カルーセルの設定
	$('.variable-width').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: slidesToShow_count,
		slidesToScroll: 1,
		swipe: true,
		touchMove: true,
		variableWidth: false
	});

});
</script>

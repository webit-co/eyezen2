<article id="gallery_contents">
  <div class="controls">
		<button type="button" class="control" data-filter="all">All</button>
		<button type="button" class="control" data-filter=".pv">PV</button>
		<button type="button" class="control" data-filter=".hd4k">4K</button>
    <button type="button" class="control" data-filter=".drawn">ドローン</button>
    <button type="button" class="control" data-filter=".vtr">VTR</button>
  </div>
  <div class="container">
    <div class="mix pv">
		  <div class="each_move">
			  <div class="each_move_title">
			    ホテル　ソビアル
			  </div>
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
    <div class="mix pv">
      <div class="each_move">
        <div class="each_move_title">
          CHERRY BLOSSOM 2020 IN JAPAN
        </div>
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
    </div>
  	<div class="mix pv">
      <div class="each_move">
        <div class="each_move_title">
          BOUNO!Pizzeria Carole
        </div>
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
    </div>
    <div class="mix drawn">
    	<div class="each_move">
	        <div class="each_move_title">
	         drone reel 2019
	        </div>
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
    </div>
    <div class="mix drawn hd4k">
		<div class="each_move">
	        <div class="each_move_title">
	          Hong Kong 4K
	        </div>
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
    </div>
    <div class="mix drawn hd4k">
      <div class="each_move">
	        <div class="each_move_title">
	          マスタングCM 4K in USA
	        </div>
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
    </div>
    <div class="mix drawn">
      <div class="each_move">
        <div class="each_move_title">
          アートレイクゴルフ倶楽部
        </div>
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
    <div class="mix vtr">
      <div class="each_move">
        <div class="each_move_title">
          AMAZING HONGKONG MACAU
        </div>
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
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
  </div>
</article>
<script src="<?php echo $site_url ?>js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
$(function () {
  $('.popup-modal').magnificPopup({
    type: 'ajax',
    preloader: false
  });
  //閉じるリンクの設定
  $(document).on('click', '.popup-modal-dismiss, mfp-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });

});
</script>
<script type="text/javascript" charset="utf-8">
$(function(){
  $('.container').mixItUp();
});
</script>

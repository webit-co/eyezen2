
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ($_SERVER['SERVER_NAME'] == 'smad-test.sub.jp') :?>
 <meta name="ROBOTS" content="NOINDEX,NOFOLLOW">
<?php endif; ?>
<meta charset="utf-8">
<title><?php echo $page_title ?></title>
<?php if(!empty($keywords)):?>
  <meta name="keywords" content="<?php echo $keywords ?>" />
<?php endif; ?>
<?php if(!empty($description)):?>
  <meta name="description" content="<?php echo $description ?>" />
<?php endif; ?>
<meta content='width=device-width, initial-scale=1.0' name='viewport' />

<meta name="format-detection" content="telephone=no">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">

<link href="<?php echo $site_url ?>css/base.css" rel="stylesheet" type="text/css" />
<?php if ($ua_type == "others"):?>
  <link href="<?php echo $site_url ?>css/<?php echo $page_name ?>.css" rel="stylesheet" type="text/css" />
<?php else:?>
  <link href="<?php echo $site_url ?>css/sp_<?php echo $page_name ?>.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $site_url ?>css/sp_lightbox_menu.css">
<?php endif; ?>
<link href="<?php echo $site_url ?>css/jquery.maximage.css" rel="stylesheet" type="text/css">
<link href="<?php echo $site_url ?>css/slick.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $site_url ?>css/slick-theme.css" rel="stylesheet" type="text/css"/>

<?php if( $page_name == 'index' or 'gallery' ):?>
  <link href="<?php echo $site_url ?>css/magnific-popup.css" rel="stylesheet" type="text/css">
<?php endif; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $site_url ?>js/covervid.min.js" type="text/javascript" charset="utf-8"></script>
<?php if( $page_name != 'index'):?>
  <script type="text/javascript" src="<?php echo $site_url ?>js/base.js"></script>
<?php endif; ?>
<?php if( $page_name == 'gallery'):?>
  <script type="text/javascript" src="<?php echo $site_url ?>js/mixitup.min.js"></script>
<?php endif; ?>

<?php if ($ua_type == "mobile" || $ua_type == "tablet"):?>
  <script type="text/javascript" src="<?php echo $site_url ?>sp/js/popup.js"></script>
<?php endif; ?>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php echo $site_url ?>js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('*');
</script>
<![endif]-->
<!-- IE8以下用に2つのスクリプトを記述
     html5shiv.js: IE8以下にHTML5の要素を認識するようにさせる
     respond.js: IE8以下にMedia Queriesの代替え機能を提供 -->
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php if ($_SERVER['SERVER_NAME'] == 'eyezen.jp'|| $_SERVER['SERVER_NAME'] == 'www.eyezen.jp') :?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40771481-1', 'eyezen.jp');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<?php endif; ?>
</head>
<body>


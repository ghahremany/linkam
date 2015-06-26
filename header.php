<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from linkam.ir/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 01 Feb 2015 08:07:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php _title(); ?></title>
<meta name="description" content="<?php _description(); ?>" />
<meta name="robots" content="INDEX, FOLLOW" />
<meta name="keywords" content="<?php _keywords(); ?>">
<meta name="googlebot" content="INDEX, FOLLOW" />
<meta http-equiv="content-language" content="fa-IR" />
<meta name="document-type" content="public" />
<meta name="doc-rights" content="public" />
<meta name="resource-type" content="document" />
<meta name="rating" content="General" />
<meta name="document-rating" content="General" />
<meta name="copyright" content="<?php _description(); ?>,<?php _site_url(); ?>" />
<meta name="doc-type" content="web page" />
<meta name="doc-class" content="published" />
<link href="index.php" rel="start" title="<?php _title(); ?>" />
<link href="<?php echo theme_dir(); ?>favicon.ico" rel="icon" type="image/x-icon" /><link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="rss.php" rel="alternate" type="application/rss+xml" title="RSS" />
<link href="<?php echo theme_dir(); ?>img/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144" />
<link href="<?php echo theme_dir(); ?>img/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114" />
<link href="<?php echo theme_dir(); ?>img/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
<link href="<?php echo theme_dir(); ?>img/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" />
<link rel="http://oexchange.org/spec/0.8/rel/related-target" type="application/xrd+xml" href="oexchange.html" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_dir(); ?>theme/White/css/bootstrap.min6654.css" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_dir(); ?>theme/White/css/style.css" />
<script type="text/javascript" src="<?php echo theme_dir(); ?>theme/White/js/jquery-1.9.1.min.js">
</script><script type="text/javascript" src="<?php echo theme_dir(); ?>theme/White/js/bootstrap.min.js"></script>
<script language="JavaScript">
<!-- 
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=450,left = 483,top = 184');");
}
// -->
</script>
<script type="text/javascript">
$(document).ready(function(){ 
	$('.alertbox').hide();
	$('.lbox').hide();
	
	$('#add-form').submit(function() {
		if($('#add-url').val() != '') {
			return true;
		}
		alert('لطفا آدرس لینک خود را وارد کنید !');
		return false;
	});
	
	$('.links').mouseover(function() {
		$(this).find('.lbox').fadeIn(300);
	}).mouseleave(function(){
		$('.lbox').fadeOut(200);
	});
		
	$(".likeit").click(function(e) {
		e.preventDefault();
		
		var UserID = "";
		if(UserID == '')
		{
			alert('ابتدا باید وارد شوید !');
		}
		else
		{
			var ids = $(this).attr('ids');
			if($(this).hasClass('dislike')){
				var dislik = true ;
				var likeurl = '/likes/vote/' + ids + '/1/';
			}else{
				var dislik = false ;
				var likeurl = '/likes/vote/' + ids;
			}		
			$.ajax({
				beforeSend: function(){
					$(this).addClass("load");
				},
				error: function(){
					$(this).removeClass("load");
				},
				context: this,
				type: "GET",
				url: likeurl,
				dataType: "json",
				//data: { name: "John", location: "Boston" }
			}).success(function(data) {
				$(this).removeClass("load");
				//$(this).closest('.likebox').children('.likecount').text(data['Likes']['counts']);
				$(this).closest('.likeslinks').children('.likenumber').text(data['Likes']['counts']);
				if(dislik){
					$(this).removeClass('dislike').addClass('like');
					$(this).attr('href','/likes/vote/' + ids);
				}else{
					$(this).removeClass('like').addClass('dislike');
					$(this).attr('href','/likes/vote/' + ids + '/1/');
				}
			});
		}
	});
	
	$('.alertbox').fadeIn(1500, function () {
    	$(this).delay(4000).fadeOut(1000);
	});
	
	$('form').submit(function(){
		$('input[type=submit]', this).attr('disabled', 'disabled');
	});
});
</script>
</head>
<body>
    <div class="navbar navbar-fixed-top navipage">
    <div class="navbar-inner navibar">
    <div class="container">
    <h1>
		<a href="<?php _site_url(); ?>" class="bg-pic logo" title="<?php _title(); ?>" ><?php _title(); ?></a>
    </h1>
    
    <ul class="nav navilinks">
    	<li class="navilink actives">
        	<a href="links/popular.html">داغ ترین ها</a>        </li>
    	<li class="navilink ">
        	<a href="<?php _site_url(); ?>box.php" targer="_blank">لینک باکس</a>        </li>
       	<li class="navilink ">
        	<a href="javascript:popUp('<?php _site_url(); ?>send.php')">ارسال لینک</a>       </li>
<li class="navilink ">
<a href="rss.php" targer="_blank"><img border="0" src="<?php echo theme_dir(); ?>img/feed.gif"></a></li>
    </ul>
    <form action="http://linkam.ir/links/add" id="add-form" class="naliform input-prepend" method="get" accept-charset="utf-8"><input name="url" autocomplete="off" id="add-url" placeholder="ثبت لینک جدید" type="text"/><button type="submit" id="add-submit" class="btn addlink">ثبت</button></form>    </div>
    </div>
    </div>
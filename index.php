<?php include('header.php'); ?>
	<div class="container main">
        	<div class="row">
      		<div class="span8 rights">
            	<div class="row">
      	<?php
	if(have_link()) : while(have_link()) : the_link();
	echo '<hr size="1" color="#F1F6FB" style="margin-top: 0;margin-bottom: 0"><p align="right" dir="rtl"><span style="font-size: 8pt"><b>'.the_date()."</b><br><br>";
while(link_in_day()) : the_link_day();
	?>

		
			
		 

<div class="span8 links ">
<img src="http://www.google.com/s2/favicons?domain=<?php echo the_link(); ?>" width="16" height="16" class="favicons" />
<h2 itemprop="headline"><a href="<?php echo the_url()?>" target="_blank" itemprop="url" rel="bookmark"><?php echo the_title()?></a></h2>
<div class="linkdetail">
<a href="links/domain/yjc.html" class="siteicon" itemprop="publisher copyrightHolder sourceOrganization provider"><?php echo the_id(); ?></a><a href="links/cat/5/%d9%88%db%8c%d8%af%d8%a6%d9%88%20%d9%88%20%d8%aa%d8%b5%d9%88%db%8c%d8%b1.html" class="caticon" rel="tag" itemprop="keywords">ویدئو و تصویر</a><a href="links/user/dyana.html" class="usericon" itemprop="author"> <?php echo the_date()?> </a></div>
<img src="http://chart.apis.google.com/chart?chs=100x100&cht=qr&chl=<?php echo the_url()?>&choe=UTF-8&chld=Q|0" width="100px" height="100px" class="linksthumb pull-left" alt="" />

<div class="linksbox">
<div class="likebox likeslinks">
<span class="likecount likenumber">5</span>
<span class="dolike">
<a href="login.html" class="like likeit" ids="25490"></a></span>
</div>
<div class="sharebox lbox dropup">
<span class="share-icon" data-toggle="dropdown" class="btn dropdown-toggle">اشتراک گذاری</span>
	<ul class="dropdown-menu">
    	<li>
			<a href="http://twitter.com/home?status=%d8%aa%d8%a7%20%d8%a7%db%8c%d9%86%20%d9%84%d8%ad%d8%b8%d9%87%20%db%b2%db%b0%db%b0%db%b0%20%d9%86%d9%81%d8%b1%20%d8%a7%db%8c%d9%86%20%d9%85%d8%b1%d8%af%20%d8%b1%d8%a7%20%d8%af%d8%b1%20%d8%ae%d9%88%d8%a7%d8%a8%20%d8%af%db%8c%d8%af%d9%87%20%d8%a7%d9%86%d8%af%20.%20%d8%a7%db%8c%d9%86%20%d9%85%d8%b1%d8%af%20%da%a9%db%8c%d8%b3%d8%aa%d8%9f%d8%9f!!+-+<?php echo the_url()?>"
    rel="nofollow" target="_blank" title="اشتراک گذاری در Twitter" >توییتر</a>
    	</li>
		<li>
			<a href="http://www.facebook.com/sharer.php?u=<?php echo the_url()?>"
    rel="nofollow" target="_blank" title="اشتراک گذاری در FaceBook" >فیسبوک</a>
		</li>
	</ul>
</div>
<div class="commentbox lbox">
<span class="comment-icon"><a href="links/view/25490.html">نظرات</a></span>
</div>
</div>
</div><?php endwhile;endwhile; endif; ?>  
<!-- End linksbox -->







	<?php
		
		if(1 < page_numbers()){
			echo '<div class="pagination"><ul>';
			for($i = 0;$i < page_numbers();$i++){
				$page = $i+1;
				
				
				echo "<li><a href='?act=links&page=$page'>{$page}</a></li>"; 
			}
		echo '</ul></div>';	
		}
	?>



                </div>
    		</div>
            <?php include('right_sidebar.php') ?>
		</div>
	</div>
    
  <?php include('footer.php') ?>
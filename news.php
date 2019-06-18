	<?php 
       	$news = get_all_news();
       	$i=0;
        foreach ($news as $new) {
        	$i++;
        	if($i>6) break;
        	$link = translit($new["title"]);?>
<div class="item">
	<div class="item-img">
		<img src="<?php echo $new["cover"];?>" alt="">
	</div>
	<div class="item-date"><?php echo $new["date"] ?></div>
	<a href="post.php?post_id=<?php echo $new["id_news"]?>"><div class="item-title"><?php echo $new["title"] ?></div></a>
	<div class="item-article"><?php echo $new["article"] ?></div>
</div>
<?php } ?>
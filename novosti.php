<?php include 'header.php'; ?>
<main class="ways-to-help__novosti">
	 <section class="header">
	 	<div class="content">
	 		<div class="breadcrunbs"><a href="index.php">ГЛАВНАЯ</a>/Новости</div>
			<h1>Новости</h1>
	 	</div>
	 </section>
	 <section class="news">
	 	<?php 
       	$news = get_all_news();
        foreach ($news as $new) {?>
	 	<div class="news-item">
	 		<div class="news-item__img">
	 			<img src="<?php echo $new["cover"];?>" alt="">
	 		</div>
	 		<div class="news-item__info">
	 			<div class="news-item_date"><?php echo $new["date"] ?></div>
	 			<a href="post.php?post_id=<?php echo $new["id_news"]?>"><div class="news-item_title"><?php echo $new["title"] ?></div></a>
				<div class="news-item_article"><?php echo substr($new["article"], 0, 200) ?></div>
	 		</div>
	 	</div>
	 	<?php } ?>
	 </section>
</main>
<?php require 'footer.php'; ?>
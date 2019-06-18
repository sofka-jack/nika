<?php include 'header.php'; 
$post_id = $_GET["post_id"];
$posts = get_all_news();
foreach ($posts as $post) { 
if($post["id_news"] != $post_id) continue;?>
<main class="page-with-new">
	<section class="headline">
		<div class="content"><div class="breadcrunbs"><a href="index.php">ГЛАВНАЯ</a>/<a href="novosti.php">Новости</a>/<?=$post["title"]?></div>
		<h1><?=$post["title"]?></h1>
		</div>
	</section>

	<section class="new__article">
		<div class="article__text">
			<?=$post["article"]?>
		</div>
		<img src="<?=$post["img"]?>" alt="">
	</section>
	<section class="other-news">
		<h2>Другие новости</h2>
		<div class="some-news">
			<?php 
			$i=0;
			foreach ($posts as $post_two) {
				$i++;
				if($i>3) break;?> 
			<div class="some-news__item">
				<div class="item__img">
					<img src="<?=$post_two["cover"]?>" alt="">
				</div>
				<div class="item__date"><?=$post_two["date"]?></div>
				<a href="post.php?post_id=<?php echo $post_two["id_news"]?>"><div class="item__title"><?=$post_two["title"]?></div></a>
			</div>
			<?php } ?>
		</div>
	</section>
</main>
<?php } ?>
<?php require 'footer.php'; ?>
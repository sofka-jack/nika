<?php include 'header.php';
$login=$_SESSION['userLogin'];
$user = $userObj->get_user_by_login($login);
$user_id = $user[0]['id_user'];
$user_mile = $user[0]['mile'];
$child_id=$_GET["id_child"];
$children = get_all_children();
foreach ($children as $child) {
	if($child["id_child"] != $child_id) continue;
	$mile=$userObj->mile_done($child["id_child"]);
	$percent=$mile*100/$child["mile"];
?>
<main class="page-with-children">
	<section class="headline">
		<h1><?php echo $child["name"];?> <?php echo $child["surname"];?></h1>
		<p><?php echo $child["data"];?>, г. <?php echo $child["town"];?></p>
				<div class="photo set-size charts-container">
					<div class="pie-wrapper progress-<?=round($percent)?>">
						<img src="<?php echo $child["photo"];?>" alt="">
						<div class="pie">
					      <div class="left-side half-circle"></div>
					      <div class="right-side half-circle"></div>
					    </div>
					    <div class="shadow"></div>
					</div>
				</div>
	</section>
	<section class="mile">
		<div class="need">Всего нужно <br><div class="number"><span><?php echo $child["mile"];?></span>mile</div></div>
		<div class="left">Осталось собрать <br><div class="number"><span><?php echo $child["mile"]-$mile;?></span>mile</div></div>
	</section>
	<section class="about-child">
		<div class="diagnosis">
			<p>Диагноз ребенка</p>
			<?=$child["diagnosis"]?>
		</div>
		<div class="history">
			<p>История ребенка</p>
			<?=$child["history"]?>
		</div>
		<a href="#" class="btn i-want-to-help">Я хочу помочь!</a>
	</section>
</main>
<div class="container_modal" style="display: none;">
	<div class="ways-to-help__modal">
		<div class="cross_close">x</div>
		<?php 
            if($_SESSION['authUser'] == 1){
            echo '
		<h2>Я хочу помочь</h2>
		<form action="" method="post">
			<label for="">Количество имеющихся миль:</label>
			<span>'.$user_mile.'</span>
			<br>
			<label for="wth-mile">Хочу перечислить</label>
			<input type="text" id="wth-mile" name="wth-mile" required>
			<input type="hidden" value="<?=$child_id?>" name="wth-child-id" required>
			<input type="hidden" value="<?=$user_id?>" name="wth-user-id" required>
			<br>
			<button type="submit" class="btn goHelp" name="goHelp">Перечислить</button>
		</form>';
            }       
            else{
            echo '<h2>Вам нужно зарегестрироваться или войти</h2>';
        	}
            ?>
	</div>
</div>
<?php } ?>
<?php require 'footer.php'; ?>
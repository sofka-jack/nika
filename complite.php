<?php include 'header.php';
$login=$_SESSION['userLogin'];
$user = $userObj->get_user_by_login($login);
$user_id = $user[0]['id_user'];
$user_mile = $user[0]['mile'];
$com_id=$_GET["id_child"];
$children = get_complete_children();
foreach ($children as $child) {
	if($child["id_com"] != $com_id) continue;
	$mile=$userObj->mile_done($child["id_com"]);
	$percent=$mile*100/$child["mile"];
?>
<main class="page-with-children">
	<section class="headline">
		<h1><?php echo $child["name"];?> <?php echo $child["surname"];?></h1>
		<p><?php echo $child["data"];?>, г. <?php echo $child["town"];?></p>
				<div class="photo set-size charts-container">
					<div class="pie-wrapper progress-100">
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
		<div class="left">Осталось собрать <br><div class="number"><span>0</span>mile</div></div>
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
	</section>
</main>

<?php } ?>
<?php require 'footer.php'; ?>
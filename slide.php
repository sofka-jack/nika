<?php 
    $children = get_all_children();
    foreach ($children as $child) {			
    $mile=$userObj->mile_done($child["id_child"]);
	$percent=$mile*100/$child["mile"];
	?>
	<div class="slide">	
		<div class="info">
			<div class="name"><?php echo $child["name"];?> <?php echo $child["surname"];?></div>
			<div class="target"><span>Диагноз</span><br><?=$child["diagnosis"]?></div>
			<div class="progress">
				<progress max="100" value="<?=round($percent)?>"></progress>
				<div class="progress-value"></div>
				<div class="progress-bg"><div class="progress-bar"></div></div>
			</div>
			<div class="mile">
				<div class="need">Всего нужно<br><span><?php echo $child["mile"];?></span>mile</div>
				<div class="already">Осталось собрать<br><span><?php echo $child["mile"]-$mile;?></span>mile</div>
			</div>
			<a href="deti.php?id_child=<?php echo $child["id_child"]?>" class="btn btn-sign">Я хочу помочь!</a>
		</div>
		<div class="photo">
			<img src="<?php echo $child["photo"];?>" alt="">
		</div>				
	</div>
<?php } ?>
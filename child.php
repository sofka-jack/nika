<?php 
    $children = get_all_children();

    foreach ($children as $child) {
    	$mile=$userObj->mile_done($child["id_child"]);
		$percent=$mile*100/$child["mile"];?>
	<a class="link-child" href="deti.php?id_child=<?php echo $child["id_child"]?>">
		<div class="child">
			<div class="name"><?php echo $child["name"];?> <?php echo $child["surname"];?></div>
			<div class="info"><?php echo $child["data"];?>, г. <?php echo $child["town"];?></div>
			<div class="visual">
				<div class="progress set-size charts-container">
					<div class="pie-wrapper progress-<?=round($percent)?>">
						<img src="<?php echo $child["photo"];?>" alt="">
						<div class="pie">
					      <div class="left-side half-circle"></div>
					      <div class="right-side half-circle"></div>
					    </div>
					    <div class="shadow"></div>
					</div>
				</div>
				<div class="mile">
					<div class="already">Уже собрано <br><span style="color: #ff5617;"><?php echo round($percent);?></span>%</div>
					<div class="need">Всего нужно <br><span><?php echo $child["mile"];?></span> mile</div>
					<div class="left">Осталось собрать <br><span><?php echo $child["mile"]-$mile;?></span> mile</div>
				</div>
			</div>
			<div class="diagnosis">Диагноз: <br><span><?=$child["diagnosis"]?></span></div>
		</div>
	</a>
<?php } ?>
<?php include 'header.php'; ?>
<main class="ways-to-help__personal-area">
	<h1>Личный кабинет</h1>
	<?php 
       	$info = get_info_all();
        foreach ($info as $user) {
        	if($user["mail"]!=$_SESSION['userLogin']) continue;?>
	<div class="personal-area">
		<div class="personal-info">
			<div class="personal-photo">
				<img src="<?php echo $user["photo"] ?>" alt="">
			</div>
			<div class="personal-name"><?php echo $user["name"] ?></div>
			<div class="personal-date"><?php echo $user["data"] ?></div>
		</div>
		<div class="personal-mile">
			<p>Код BELAVIA: <span><?php echo $user["code_belavia"] ?></span></p>
			<p>Количество Ваших миль: <span><?php echo $user["mile"] ?></span> mile</p>
			<p>Количество подаренных миль: <span>1231</span> mile</p>
			<p>Квалификационные баллы: <span><?php echo $user["points"] ?></span> в текущем году</p>
			<p>Количество сегментов: <span><?php echo $user["segments"] ?></span> в текущем году</p>
			<?php
			$if=$userObj->help_child($_SESSION['userLogin']);
			if ($if==false) {
			 	echo '<p>Дети, которым Вы можете помочь:</p><div class="children">';	
		    	$children = get_all_children();
    			foreach ($children as $child) {?>
				<a href="deti.php?id_child=<?php echo $child["id_child"]?>"><div class="child"><img src="<?php echo $child["photo"];?>" alt=""></div></a>
				<?php } ?>
			</div>
			 <?php 
			 } 
			 else{?>
			 	<p>Дети, которым Вы помогли:</p>
			<div class="children">
				<?php
				$all_child_id = array();

    			foreach ($if as $child) {
    				$child_id=$child['id_child'];
    				array_push($all_child_id, $child_id);
    				$array = array_unique($all_child_id);

    			}
				$children = get_all_children();
    			foreach ($children as $child) {
    				if(in_array($child["id_child"], $array)){
    				?>
    				<a href="deti.php?id_child=<?php echo $child["id_child"]?>"><div class="child"><img src="<?php echo $child["photo"];?>" alt=""></div></a>
    				<?php } ?>	
    				<?php } ?>	
				</div>
			 	
			 <?php } ?>				
		</div>
	</div>
<?php } ?>

</main>
<?php require 'footer.php'; ?>
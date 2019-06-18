<?php include 'header.php'; ?>

	<main>
		<section class="ways-to-help__sider">	
			<div id="slides">	
				<?php include 'slide.php';?>
				<div class="slider-nav">
					<div class="slider-prev" style="">
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="https://www.w3.org/1999/xlink" xmlns:svgjs="https://svgjs.com/svgjs" width="21" height="32"><path d="M50.9999 4628L71 4612.99L71 4643.01Z " transform="matrix(1,0,0,1,-50,-4612)"></path></svg>
					</div>
					<div class="slider-next" style="">
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="https://www.w3.org/1999/xlink" xmlns:svgjs="https://svgjs.com/svgjs" width="20" height="32"><path d="M1848 4629L1828 4613.99L1828 4644.01Z " transform="matrix(1,0,0,1,-1828,-4613)"></path></svg>
					</div>
				</div>
			</div>
		</section>
		<section class="ways-to-help__children">
			<h1>Дети, которым нужна помощь</h1>
			<div class="children">
				<?php include 'child.php'?>		
			</div>
			<a href="children.php" class="btn">Я хочу помочь!</a>

		</section>
		<section class="ways-to-help__about">
			<div class="content">
				<h1>O Waystohelp</h1>
				<div class="ways-to-help__about-text">
					<p>Международная платформа «Waystohelp» направлена на распространение понятия «благотворительность». Позволяет Вам жертвовать часть накопленных миль своих авиаперевозчиков для транспортировки ребёнка заграницу, чтобы пройти лечение или курс реабилитации.</p>
					
					<p>Данный проект позволит благотворительным организациям выйти на новый рынок фандрайзинга. Благотворителям это даст новую возможность перечисления спонсорской помощи. А авиакомпании смогут заявить о высокой социальной корпоративной ответственности, повышая лояльность своих клиентов.</p>
				</div>
			</div>
		</section>
		<section class="ways-to-help__news">
			<h1>Последние новости</h1>
			<div class="content-items">
<?php include 'news.php' ?>
			</div>
			<a href="novosti.php" class="btn">Все новости</a>
		</section>
		<section class="ways-to-help__we-help-header">
			<div class="content">
				<h1>Мы помогли</h1>
				<p>Мы хотим выразить огромную благодарность всем тем, кто не остался в стороне, кто оказывал и оказывает поддержку нашим подопечным! Здесь мы сообщаем о детях, сборы средств на медицинские нужды которых с Вашей помощью уже закрыты.</p>
			</div>
		</section>
		<section class="ways-to-help__we-help">
			<div class="we-help__children">
				<div id="slider__wrapper">
	<?php 
       	$complete_children = get_complete_children();
        foreach ($complete_children as $child) {?>
					<div class="slider__item">	
						<div class="children-photo">
							<img src="<?php echo $child["photo"];?>" alt="">
						</div>
						<div class="children-info">
							<a href="complite.php?id_child=<?php echo $child["id_com"]?>"><div class="info-name"><?php echo $child["name"];?> <?php echo $child["surname"];?></div></a>
							<div class="info-date"><?php echo $child["date"];?></div>
							<div class="info-diagnosis"><span>ДИАГНОЗ: <br></span><?php echo $child["diagnosis"];?></div>
						</div>
					</div>
<?php } ?>

				</div>
				    <a class="slider__control slider__control_left" href="#" role="button"></a>
    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
			</div>
		</section>
		<section class="ways-to-help__partner">
			<h1>Наши партнеры</h1>
			<div class="partner__logo">
				<img src="img/partner/BYSvNTQfkXU.jpg" alt="">
				<img src="img/partner/unihelp.png" alt="">
				<img src="img/partner/VKIlS3qQyz8.jpg" alt="">
			</div>
		</section>
	</main>
	<script src="js/slider.js"></script>
	<script src="js/slider2.js"></script>
<?php require 'footer.php'; ?>
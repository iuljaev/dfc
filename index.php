<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости банка");
?>

				<!-- Baner -->

				<ul class="baner" id="my_slider" >
					<li ><a href="#"><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/baner1.png" alt="" /></a></li>
					<li ><a href="#"><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/baner2.png" alt="" /></a></li>
					<li ><a href="#"><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/baner3.png" alt="" /></a></li>
				</ul>

				<!-- Okroshka -->
				<fieldset>
					<legend>Навигация</legend>
					<ul class="breadcrumbs">
						<li><a class="home" href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</fieldset>
				<!-- Content text-->

				<h2 class="info">Контактная информация</h2>

				<p>Обратитесь к нашим специалистам и получите профессиональную консультацию по услугам нашей компании.</p>
					<p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе.</p>
					<p>Будем рады помочь вам и ответить на все ваши вопросы. </p>


					<div class="hot-block">
						<div class="l-t"></div> <div class="r-t"></div>
						<h2 class="proposal">Горячие предложения</h2>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/pic1.jpg" alt="" />
							</div>
						</div>
						<h3>Мексика</h3>
						<p>Начиная от <span>789$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>

					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/pic2.jpg" alt="" />
							</div>
						</div>
						<h3>Мальдивы</h3>
						<p>Начиная от <span>649$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>

					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/images/src/pic3.jpg" alt="" />
							</div>
						</div>
						<h3>Бали</h3>
						<p>Начиная от <span>559$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

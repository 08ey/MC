<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукция");
?><div class="page">
	 <!-- content box --> <br>
	<div class="content-box">
		 <!-- content --><br>
		 <br>
		<div class="content">
			<div class="cnt">
				<div>
					<h1><?$APPLICATION->ShowTitle()?></h1>
				</div>
				<hr>
				<p>
					 Если вы используете базовую редакцию продукта - «Компания», то можете перейти на редакцию «Совместная работа», и ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.
				</p>
				<p>
					 Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала
				</p>
				<p>
					 При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.
				</p>
				<h2>Выставка новых образцов</h2>
				<hr>
				<div class="article-text-block">
 <figure class="pic-block"> <img src="./img/pic01.jpg" alt=""> </figure>
					<p>
						 Ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.
					</p>
					<h3>Заголовок</h3>
					<p>
 <i>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</i>
					</p>
					<p>
 <span class="att-text">При переходе вся информация на портале сохранится.</span> <br>
						 Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.
					</p>
				</div>
			</div>
		</div>
		 <!-- /content --> <!-- side -->
		<div class="side">
			 <!-- side menu --><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "left"
	),
	false
);?> <!-- /side menu -->&nbsp;&nbsp; <!-- side anonse -->
		</div>
		<div class="side">
			 <!-- side anonse -->
			<div class="side-block side-anonse">
				<div class="title-block">
 <span class="i i-title01"></span>Полезная информация!
				</div>
				<div class="item">
					<p>
						 Клиенты предпочитают все больше эко-материалов.
					</p>
				</div>
			</div>
			 <!-- /side anonse --> <!-- side wrap -->
			<div class="side-wrap">
				<div class="item-wrap">
					 <!-- side action -->
					<div class="side-block side-action">
 <img src="./img/side-action-bg.jpg" alt="" class="bg">
						<div class="photo-block">
 <img src="./img/side-action.jpg" alt="">
						</div>
						<div class="text-block">
							<div class="title">
								 Акция!
							</div>
							<p>
								 Мебельная полка всего за 560 <span class="r">a</span>
							</p>
						</div>
 <a href="" class="btn-more">подробнее</a>
					</div>
					 <!-- /side action -->
				</div>
				 <!-- footer rew slider box -->
				<div class="item-wrap">
					<div class="rew-footer-carousel">
						<div class="item">
							<div class="side-block side-opin">
								<div class="inner-block">
									<div class="title">
										<div class="photo-block">
 <img src="./img/side-opin.jpg" alt="">
										</div>
										<div class="name-block">
 <a href="">Дмитрий Иванов</a>
										</div>
										<div class="pos-block">
											 Генеральный директор,"Офис+"
										</div>
									</div>
									<div class="text-block">
										 “В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="side-block side-opin">
								<div class="inner-block">
									<div class="title">
										<div class="photo-block">
 <img src="./img/side-opin.jpg" alt="">
										</div>
										<div class="name-block">
 <a href="">Дмитрий Иванов</a>
										</div>
										<div class="pos-block">
											 Генеральный директор,"Офис+"
										</div>
									</div>
									<div class="text-block">
										 “В магазине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				 <!-- / footer rew slider box -->
			</div>
			 <!-- /side wrap -->
		</div>
		 <!-- /side -->
	</div>
	 <!-- /content box -->
</div>
 <!-- /page -->
<div class="empty">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
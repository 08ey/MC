<title><?$APPLICATION->ShowTitle();?></title>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?
IncludeTemplateLangFile(__FILE__);
?><?$APPLICATION->ShowHead();?> <?use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/reset.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/owl.carousel.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js", 1);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js", 1);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/scripts.js", 1);?>
<div id="panel">
	 <?$APPLICATION->ShowPanel();?>
</div>
 <?$objDateTime = new DateTime();
	$date = new \Bitrix\Main\Type\DateTime();
	$DateTime = $date->createFromPhp($objDateTime)->toString();
?> <!-- wrap -->
<div class="wrap">
	 <!-- header -->
	<div class="header">
		<div class="inner-wrap">
			<div class="logo-block">
 <a href="" class="logo">Мебельный магазин</a>
			</div>
			<div class="main-phone-block">
				 <?if($DateTime[11]==0 && $DateTime[12]==9||$DateTime[11]==1 && $DateTime[12]<8){?> <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a><?}else{?><a href="mailto:store@store.ru" class="phone">store@store.ru</a>
				<?}?>
				<div class="shedule">
					 время работы с 9-00 до 18-00
				</div>
			</div>
			<div class="actions-block">
				<form action="/" class="main-frm-search">
 <input type="text" placeholder="Поиск"> <button type="submit"></button>
				</form>
 <nav class="menu-block">
				<ul>
					<li class="att popup-wrap"> <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
					<form action="/" class="frm-login popup-block">
						<div class="frm-title">
							 Войти на сайт
						</div>
 <a href="" class="btn-close">Закрыть</a>
						<div class="frm-row">
 <input type="text" placeholder="Логин">
						</div>
						<div class="frm-row">
 <input type="password" placeholder="Пароль">
						</div>
						<div class="frm-row">
 <a href="" class="btn-forgot">Забыли пароль</a>
						</div>
						<div class="frm-row">
							<div class="frm-chk">
 <input type="checkbox" id="login"> <label for="login">Запомнить меня</label>
							</div>
						</div>
						<div class="frm-row">
 <input type="submit" value="Войти">
						</div>
					</form>
 </li>
					<li><a href="">Зарегистрироваться</a> </li>
				</ul>
 </nav>
			</div>
		</div>
	</div>
	 <!-- /header --> <!-- nav --> <nav class="nav">
	<div class="inner-wrap">
		<div class="menu-block popup-wrap">
 <a href="" class="btn-menu btn-toggle"></a>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"exam_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "exam_multilevel",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
			<div class="menu-overlay">
			</div>
		</div>
	</div>
 </nav>
	<!-- /nav --> <?if( $APPLICATION->GetCurPage() != SITE_DIR){?> <!-- breadcrumbs -->

	<div class="breadcrumbs-box">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"Exam_breadcrumbs", 
	array(
		"PATH" => "",
		"SITE_ID" => "s3",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "Exam_breadcrumbs"
	),
	false
);?>
		
	</div>
	 <!-- /breadcrumbs --> <!-- page -->
	<div class="page">
		 <!-- content box -->
		<div class="content-box">
			 <!-- content -->
			<div class="content">
				<div class="cnt">
					<div>
						<h1><?=$APPLICATION->ShowTitle(false);?></h1>
					</div>
					<hr>
					 <!-- page --> <?}else{?>
					<div class="page">
						 <!-- content box -->
						<div class="content-box">
							 <!-- content -->
							<div class="content">
								<div class="cnt">
									<p>
										 «Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
									</p>
									 <!-- index column -->
									<div class="cnt-section index-column">
										<div class="col-wrap">
											 <!-- main actions box -->
											<div class="column main-actions-box">
												<div class="title-block">
													<h2>Новинки</h2>
													<hr>
												</div>
												<div class="items-wrap">
													<div class="item-wrap">
														<div class="item">
															<div class="title-block att">
																 Угловой диван!
															</div>
 <br>
															<div class="inner-block">
 <a href="" class="photo-block"> <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt=""> </a>
																<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="item-wrap">
														<div class="item">
															<div class="title-block att">
																 Угловой диван!
															</div>
 <br>
															<div class="inner-block">
 <a href="" class="photo-block"> <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt=""> </a>
																<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="item-wrap">
														<div class="item">
															<div class="title-block att">
																 Угловой диван!
															</div>
 <br>
															<div class="inner-block">
 <a href="" class="photo-block"> <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt=""> </a>
																<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
																</div>
															</div>
														</div>
													</div>
												</div>
 <a href="" class="btn-next">Все новинки</a>
											</div>
											 <!-- /main actions box --> <!-- main news box -->
											<div class="column main-news-box">
												<div class="title-block">
													<h2>Новости</h2>
												</div>
												<hr>
												<div class="items-wrap">
													<div class="item-wrap">
														<div class="item">
															<div class="title">
 <a href="">29 августа 2012</a>
															</div>
															<div class="text">
 <a href="">Поступление лучших офисных кресел из Германии </a>
															</div>
														</div>
													</div>
													<div class="item-wrap">
														<div class="item">
															<div class="title">
 <a href="">29 августа 2012</a>
															</div>
															<div class="text">
 <a href="">Мастер-класс дизайнеров из Италии для производителей мебели </a>
															</div>
														</div>
													</div>
													<div class="item-wrap">
														<div class="item">
															<div class="title">
 <a href="">29 августа 2012</a>
															</div>
															<div class="text">
 <a href="">Поступление лучших офисных кресел из Германии </a>
															</div>
														</div>
													</div>
													<div class="item-wrap">
														<div class="item">
															<div class="title">
 <a href="">29 августа 2012</a>
															</div>
															<div class="text">
 <a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
															</div>
														</div>
													</div>
												</div>
 <a href="" class="btn-next">Все новости</a>
											</div>
											 <!-- /main news box -->
										</div>
									</div>
									 <!-- /index column --> <!-- afisha box -->
									<div class="cnt-section afisha-box">
										<div class="section-title-block">
											<h2 class="second-ttile">Ближайшие мероприятия</h2>
 <a href="" class="btn-next">все мероприятия</a>
										</div>
										<hr>
										<div class="items-wrap">
											<div class="item-wrap">
												<div class="item">
													<div class="title">
 <a href="">29 августа 2012, Москва</a>
													</div>
													<div class="text">
 <a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
													</div>
												</div>
											</div>
											<div class="item-wrap">
												<div class="item">
													<div class="title">
 <a href="">29 августа 2012, Москва</a>
													</div>
													<div class="text">
 <a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
													</div>
												</div>
											</div>
											<div class="item-wrap">
												<div class="item">
													<div class="title">
 <a href="">29 августа 2012, Москва</a>
													</div>
													<div class="text">
 <a href="">Открытие нового магазина в нашей дилерской сети.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									 <!-- /afisha box -->
								</div>
							</div>
							 <!-- /content --> <!-- side -->
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
 <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
											<div class="photo-block">
 <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
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
										<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"Line", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "PREVIEW_TEXT",
			5 => "PREVIEW_PICTURE",
			6 => "DATE_ACTIVE_FROM",
			7 => "ACTIVE_FROM",
			8 => "PROPERTY_POSITION",
			9 => "PROPERTY_COMPANY",
			10 => "",
		),
		"IBLOCKS" => array(
			0 => "13",
		),
		"IBLOCK_TYPE" => "feedback",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "Line"
	),
	false
);?>
									</div>
									 <!-- / footer rew slider box -->
								</div>
								 <!-- /side wrap -->
							</div>
							 <!-- /side -->

					 <?}?>
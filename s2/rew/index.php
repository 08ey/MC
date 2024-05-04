<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("отзывы");
?><div class="page">
	<div class="content-box">
		<div class="content">
			<div class="cnt">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"rews", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "rews",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "POSITION",
			1 => "COMPANY",
			2 => "FILES",
			3 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "feedback",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "POSITION",
			1 => "COMPANY",
			2 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Отзывы",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/s2/rew/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
			</div>
		</div>
		<div class="side">
			 <!-- side menu -->
			<div class="side-block side-menu">
				<div class="title-block">
					Навигация
				</div>
				<div class="menu-block">
					<ul>
						<li><a href="">Кухни</a> </li>
						<li><a href="">Гарнитуры</a> </li>
						<li class="selected"> <a href="">Спальни</a> </li>
						<li> <a href="">Шкафы</a> </li>
						<li><a href="">Столы</a> </li>
						<li><a href="">Стулья</a> </li>
						<li> <a href="">Прихожие</a> </li>
						<li><a href="">Диваны</a> </li>
						<li><a href="">Кресла</a> </li>
					</ul>
				</div>
			</div>
			 <!-- /side menu --> <!-- side anonse -->
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
 <img src="/local/templates/exam1/img/side-action-bg.jpg" alt="" class="bg">
						<div class="photo-block">
 <img src="/local/templates/exam1/img/side-action.jpg" alt="">
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
 <img src="/local/templates/exam1/img/side-opin.jpg" alt="">
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
 <img src="/local/templates/exam1/img/side-opin.jpg" alt="">
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
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area index__page">
		<main id="main" class="site-main" role="main">

		<section class="index__top">
		<div class="index__top-overlay">
		<div class="overlay__video"></div>
		<video class="index__video" src="/wp-content/themes/storefront-child/assets/img/other/bg-1080.webm" autoplay loop muted controls poster="/wp-content/themes/storefront-child/assets/img/other/bg-1080.jpg"></video>
		</div>

		<div class="container index__top_container">
			<div class="m-title flipInX wow"  data-wow-delay="0.3s">Капитан НЕМО <b>HORECA</b></div>
			<div class="index__top_title wow"  data-wow-delay="0.4s" >
				<h1>Сохраняем и доставляем вкус моря <br>в его первозданном виде</h1>
			</div>
			<div class="index__top_subtitle wow" data-wow-delay="0.5s">
				<p>Наша главная задача - Ваши довольные Клиенты, которые возвращаются к Вам вновь и вновь за свежими и вкусными морепродуктами</p>
			</div>
			<div class="index__top_next">
				<a class="icon" href="#2">
					<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M10 18L17 25L24 18M17 25V9V25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<rect x="1" y="1" width="32" height="32" rx="16" stroke="white" stroke-width="2"/>
					</svg>
				</a>
			</div>
		</div>
		</section>

		<section class="index__year" id="2">
			<div class="container container__year wow" data-wow-delay="0.3s">
			<div class="m-title">Большой опыт</div>
				<div class="year ">
					<div class="sub_title">
						С 1997 года компания <br>"Капитан Немо" работает в рыбоперерабатывающей отрасли" 
					</div>
					<div class="txt">Мы работаем в рыбоперерабатывающей отрасли с 1997 года. За это время наша компания зарекомендовала себя как надежный деловой партнер среди поставщиков рыбопродукции. Главный приоритет для нас — качество консервированной и мороженой рыбы и морепродуктов, поэтому, используя надежные технологии и современное оборудование, мы доводим его до максимального уровня</div>
					<div class="show__more-page">
						<a href="">читать далее</a>
					</div>
				</div>
				<div class="img">
					<img src="/wp-content/themes/storefront-child/assets/img/other/ship_index.png" alt="">
				</div>
			</div>
		</section>

		<section class="production__index">
			<div class="container production__index_container">
				<div class="production__index_slider">
					<?php
					echo do_shortcode('[smartslider3 slider="2"]');
					?>
				</div>
				<div class="production__index_about wow" data-wow-delay="0.3s">
					<div class="m-title">Продукция</div>
					<div class="title">
						Мы добываем рыбу в Баренцовом море. <br>Производство находится в мурманске
					</div>
					<div class="txt">У нас большой ассортимент морепродуктов северных морей: <br>
					треска атлантическая, морской окунь, пикша, северная креветка, морской еж, лосось и многие другие виды
					</div>
					<div class="show__more-page">
						<a href="">в каталог продукции</a>
					</div>
				</div>
			</div>
		</section>

		<section class="experts__index">
			<div class="container experts__index_container wow" data-wow-delay="0.3s">
			<div class="experts__about">
			<div class="m-title">Ключевые компетенции</div>
				<div class="title">
					Эксперты рынка
				</div>
				<div class="sub_title">Обладая глубокими знаниями о рынке, <br>мы выстроили лучший путь от производителей к покупателям</div>
				<div class="show__more-page">
					<a href="">читать далее</a>
				</div>
			</div>
			<div class="experts__list">
				<div class="item">
					<div class="m-title">ЭФФЕКТИВНО ЗАКУПАЕМ</div>
					<div class="sub_title">Благодаря накопленному опыту и точному анализу информации, <br>мы выбираем лучшее по лучшей цене</div>
				</div>
				<div class="item">
					<div class="m-title">КОРРЕКТНО ПРИВОЗИМ</div>
					<div class="sub_title">Мы выстроили чёткую и надёжную систему международных перевозок <br>и складского хранения</div>
				</div>
				<div class="item">
					<div class="m-title">ПОСТОЯННО РАЗВИВАЕМ</div>
					<div class="sub_title">Чутко реагируя на запросы рынка, мы регулярно <br>обновляем ассортиментный портфель</div>
				</div>
				<div class="item">
					<div class="m-title">ГРАМОТНО УПРАВЛЯЕМ</div>
					<div class="sub_title">Мы используем современные <br>и адаптируемые технологии ведения бизнеса</div>
				</div>
			</div>
			</div>
		</section>

		<section class="index__delivery">
			<div class="container index__delivery_container wow" data-wow-delay="0.3s">
			<div class="m-title">Храние и перевозка</div>
			<div class="about">
				<div class="title">
					Собственный складской комплекс в Мурманске, Санкт-Петербурге и Москве
				</div>
				<div class="txt">
					Складские комплексы в разных уголках страны дают возможность в кратчайшие сроки поставлять наисвежайшие морепродукты на вашу кухню. 
					<br>
					Собственный парк грузовых автомобилей SCANIA с передовой рефрижераторной системой, позволяющей контролировать температурный режим на всем пути, от фабрики до склада
				</div>
				<div class="show__more-page">
						<a href="">читать далее</a>
					</div>
			</div>
			<div class="img">
				<img src="/wp-content/themes/storefront-child/assets/img/other/fura.png" alt="">
			</div>
			</div>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container footer__container">
			<div class="footer__logo">
				<div class="logo">
				<a href="/">
					<img class="pc-hide" src="/wp-content/themes/storefront-child/assets/img/logo.svg" alt="">
					<img class="mob-hide" src="/wp-content/themes/storefront-child/assets/img/logo-pc.svg" alt="">
				</a>
				<div class="footer_desc">
					Сохраняем и доставляем <br> вкус моря в его <br>первозданном виде
				</div>
				</div>
			</div>
			<div class="footer__nav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
			</div>
			<div class="footer__contact">
				<a href="tel:84959807191" class="tel">+7 (495) 980-71-91</a>
				<a href="mailto:info@captain-nemo.ru" class="mail">info@captain-nemo.ru</a>
				<div class="geo">141004, Россия, Московская обл., г.о. Мытищи, г. Мытищи, ул. Силикатная, д. 28/3, эт.2, ком.11</div>
			</div>
		</div>
		<div class="footer__toolbar"><div class="txt">&#169; 2022 Капитан НЕМО</div><a href="" class="pc">Политика конфиденциальности</a></div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

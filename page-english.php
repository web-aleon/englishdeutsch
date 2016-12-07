<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package englishdeutsch
 */

get_header('landing'); ?>
	<div class="clear"></div>
	<div id="primary" class="content-area english-page">
		<main id="main" class="site-main" role="main">

			<!-- mini-messages -->
			  <p id="miniMessage1" class="mini-message mess1">
			    <!-- Подготовить ребенка к ЗНО -->
			    <b>like a shot</b> - очень быстро
			  </p>

			  <p id="miniMessage2" class="mini-message mess2">
			    <!-- Преодолеть языковой барьер -->
			    <b>like that</b> - вот так
			  </p>

			  <p id="miniMessage3" class="mini-message mess3">
			    <!-- Нужно выполнять домашнее задание -->
			    <b>as follows</b> - следующее
			  </p>

			  <p id="miniMessage4" class="mini-message mess4">
			    <!-- Хочу свободно говорить -->
			    <b>fair play</b> - игра по-честному
			  </p>
			<!-- END mii-messages -->

			<!-- TITLESCREEN -->
			<section id="titlescreen">
			  <div class="container-fluid titlescreen">
			      <div class="col-lg-offset-2 col-lg-4 col-sm-offset-1 col-sm-5 col-xs-12 no-padd">
			        <div class="container-fluid mobile-head-bg">
			          <h1 itemprop="name">Курсы <br>Английского языка</h1>
			          <h3>Индивидуальные занятия в Одессе</h3>
			          <p>запись с 10:00 до 18:00</p>
			        </div>
			      </div>
			      <div class="col-lg-offset-1 col-lg-5 col-sm-6 titleimage">
			      </div>
			  </div>
			</section>
			<!-- END TITLE SCREEN -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

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

			<!-- ADVANTAGE -->
			<section id="advantage" class="container-fluid">
			  <div class="container title-container title"> 
			    <h2 class="col-xs-12">Почему <strong>английский</strong> с нами?<img class="logo" src="<?php echo ( get_template_directory_uri() . '/img/logo.png'); ?>" alt="курсы английского языка в Одессе"></h2>
			  </div>
			  <article class="container-fluid">
			    <div class="container title-container about">
			      <h4>- Как работают курсы иностранных языков?</h4>
			      <p class="col-xs-12">
			      <br>
			      1й вариант. Минимум грамматики, пару упражнений из ярких забавляющих тетрадок, еще один абзац на слух – это все, идем дальше.  У нас же на курсах «быстро и легко изучать язык!»<span> А то, что группа половину не усвоила, а половину не запомнила – это издержки производства. Зато общий уровень позволяет идти дальше.<br><br>
			      2й вариант. С победным лозунгом «Мы научим Вас говорить» с первого же урока учитель на курсах <strong>английского языка</strong> общается только на <strong>английском</strong> и объясняет всю грамматику тоже только на <strong>английском</strong>. И это людям, которые языка толком не знают и со своим «intermediate» могут усвоит далеко не все. Абсурд, конечно. Не удивительно что многие тонкости остаются непонятыми. Но так как большинство кивает, преподаватель с легким сердцем переходит к следующей теме. «Ничего. В процессе разберутся. Главное: только послушайте - Вы уже говорите на английском языке!» А вот ЧТО Вы говорите и КАК – это уже детали. Но именно из-за этих деталей, из-за недоученного и недопонятого Вы и делаете ошибки и боитесь <strong>говорить по-английски</strong>. В итоге, так и формируется некий, такой популярный сейчас суржик, называемый «<strong>русский английский</strong>».<br><br>
			      - Так как же преодолеть пресловутый языковой барьер?<br><br>
			      Структура  любого языка – это 5 частей единого пазла: грамматика, лексика, чтение, письмо, разговорная речь. И только наладив все его составляющие можно механизм запустить. Вы не заговорите через 3 урока и Ваши учебники вряд ли увлекут любителей «Мурзилки». Но получив основательную грамматическую базу и общаясь на актуальные темы в Speaking Club Вы легко начнете говорить и воспринимать <strong>иностранный язык</strong>.</span>
			      </p>
			      <button class="readmore">Подробнее</button>
			    </div>
			  </article>
			  
			  <article class="container-fluid adv">
			    <div class="background-mask container-fluid">
			      <div class="container adv-container">
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/individual.png'); ?>" alt="Английский язык индивидуально">
			          <h3>Индивидуальные занятия английским</h3>
			        </div>
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/practice.png' ); ?>" alt="Английский практика разговорной речи">
			          <h3>Практические занятия</h3>
			        </div>
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/method.png' ); ?>" alt="Английский язык методика">
			          <h3>Эффективная методика преподавания</h3>
			        </div>
					
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/map.png' ); ?>" alt="Курсы английского языка в приморском районе">
			          <h3>Удобное расположение</h3>
			        </div>
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/professional.png' ); ?>" alt="Английский язык учить у профессионалов">
			          <h3>Профессиональные учителя</h3>
			        </div>
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/raspisanie.png' ); ?>" alt="Расписание по Английскому">
			          <h3>Удобное расписание</h3>
			        </div>

			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/skype.png' ); ?>" alt="Английский язык по скайпу">
			          <h3>Урорки английского языка по Skype</h3>
			        </div>
			        <div class="adv-cell col-md-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/native.png' ); ?>" alt="Английский в Одессе с носителем языка">
			          <h3>Обучение с носителем языка</h3>
			        </div>
			        <div class="adv-cell col-md-offset-0 col-md-4 col-sm-offset-4 col-sm-6 col-xs-12">
			          <img src="<?php echo ( get_template_directory_uri() . '/img/advantage/speaking.png' ); ?>" alt="Курсы английского в Одессе разговорный клуб">
			          <h3 id="teachersmark">Speaking & Movie club</h3>
			        </div>
			      </div>
			    </div>
			  </article>
			</section>
			<!-- END ADVANTAGE -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

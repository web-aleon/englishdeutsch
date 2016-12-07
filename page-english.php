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

			<!-- NUMBERS -->
			<section id="numbers">
			  <div class="container-fluid">
			    <!-- <h2 class="col-xs-12">Мы в <strong>цифрах</strong></h2> -->
			    <div class="col-xs-12 col-sm-4 bordered numblock">
			      <p id="num1" class="number"></p>
			      <hr>
			      <p class="desc">Счастливых учеников</p>
			    </div>
			    <div class="col-xs-12 col-sm-4 bordered numblock">
			      <p id="num2" class="number"></p>
			      <hr>
			      <p class="desc">Проведенных уроков</p>
			    </div>
			    <div class="col-xs-12 col-sm-4 numblock">
			      <p id="num3" class="number"></p>
			      <hr>
			      <p class="desc">Проведенных <br>Speaking & Movie Club</p>
			    </div>
			  </div>
			</section>
			<!-- END NUMBERS -->

			<!-- TOWN-WATER -->
			<section id="town-water">
			  <div class="container-fluid"><img src="<?php echo( get_template_directory_uri() . '/img/town2.png'); ?>" alt="Английский язык в Одессе"></div>
			  <div class="town-text">
			    <h2><img class="logo" src="<?php echo ( get_template_directory_uri() . '/img/logo.png'); ?>" alt="курсы английского языка - Одесса"></h2>
			    <p class="col-xs-12">Профессиональные репетиторы, индивидуальный подход</p>
			  </div>
			</section>
			<!-- END TOWN-WATER -->

			<!-- LESSONS -->
			<section id="lessons">
			  <div class="container-fluid bg-transparent">
			    <h2>Наши <span>основные</span> программы</h2>
			    <div class="container no-padd hexagon">
			      <div class="row1">
			        <div class="hex hex-3 empty">
			          <div class="inner">
			          </div>
			          <a href="#"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-2 odd standart">
			          <div class="inner">
			            <p>Стандартный <br><span>курс</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="0"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-1 children">
			          <div class="inner">
			            <p>Английский <br><span>для детей</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="1"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-3 odd empty">
			          <div class="inner">
			          </div>
			          <a href="#"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-1  empty">
			          <div class="inner">
			          </div>
			          <a href="#"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			      </div>
			    <!-- ROW 2 -->
			      <div class="row2">
			        <div class="hex hex-3 intensive">
			          <div class="inner">
			            <p>Интенсив</p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="2"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-2 odd shipping">
			          <div class="inner">
			            <p>Морской <br><span>английский</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="3"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-1 skype">
			          <div class="inner">
			            <p>Уроки <br><span>по Skype</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="6"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-3 odd native">
			          <div class="inner">
			            <p>Занятие <br><span>с носителем языка</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="4"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			        <div class="hex hex-1 speaking">
			          <div class="inner">
			            <p>Speaking <span>and</span> <br>movie <span>club</span></p>
			          </div>
			          <a class="scrollto lestoslide" href="#answer-callback" data-class="5"></a>
			          <div class="corner-1"></div>
			          <div class="corner-2"></div>
			        </div>
			      </div>
			    </div>
			  </div>
			</section>
			<!-- END LESSONS -->

			<div class="container-fluid empty-water"></div>

			<!-- ANSWER CALLBACK -->
			<section id="answer-callback" class="container-fluid">
			  <div class="container">
			    <h2><span>Заказать</span> бесплатный урок</h2>
			    <form id="answerCallback">
			      <input class="col-md-offset-2 col-sm-offset-1 col-sm-4" type="text" name="name" placeholder="Имя" required>
			      <input class="col-sm-4" type="text" name="phone" placeholder="Телефон" required>
			      <button class="col-sm-2">Заказать</button>
			    </form>
			  </div> 
			</section>
			<!-- END ANSWER CALLBACK -->

			<div class="container-fluid empty-water"></div>

			<!-- ALL LESSONS SLIDER-->
			<section id="lesson_carousel">
			  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			      <li data-target="#carousel-example-generic" data-slide-to="6"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			      <div class="item active">
			        <article id="standart" class="container-fluid all-lessons">
			          <div class="container mobile-bg">
			            <div class="col-sm-6 col-xs-12 text-left">
			              <h2><span>Стандартный</span> курс</h2>
			              <div class="container-fluid lessoninfo">
			                <p class="col-sm-6 col-xs-12 description">
			                <span>Полный курс включает:</span> грамматика, лексика, чтение, письмо, общение.
			                </p>
			                <p class="col-sm-6 col-xs-12 lessons-by-week"><span>2-3 раза</span> в неделю. <span>Продолжительность:</span> <br>6 месяцев.</p>
			                <p class="col-lg-6 col-xs-12 indiv">( Расписание составляется индивидуально для каждого )</p>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">150 <span>грн</span> / 60 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>

			            <div class="col-sm-6 image">
			            </div>
			          </div>
			        </article>
			      </div>

			      <div class="item">
			        <article id="children" class="container-fluid all-lessons">
			          <div class="container">
			            <div class="col-sm-6 image">
			            </div>

			            <div class="col-sm-6 col-xs-12">
			              <h2 class="text-right"><span>Английский</span> для детей</h2>
			              <div class="container-fluid lessoninfo">
			                <ul class="col-md-6 col-sm-8 col-xs-12 description  text-right">
			                  <li>Выполнение домашних заданий</li>
			                  <li>Подготовка к экзаменам</li>
			                  <li>Занятия проходят в игровой форме</li>
			                </ul>
			                <p class="col-md-6 col-sm-4 col-xs-12 lessons-by-week"><span>2-3 раза</span> в неделю</p>
			                <p class="col-lg-6 col-xs-12 indiv">( Расписание составляется индивидуально для каждого )</p>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">150 <span>грн</span> / 60 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>
			          </div>
			        </article>
			      </div>
			      
			      <div class="item">
			        <article id="intensive" class="container-fluid all-lessons">
			          <div class="container">  
			            <div class="col-sm-6 col-xs-12 text-left">
			              <h2>Интенсив</h2>
			              <div class="container-fluid lessoninfo">
			                <p class="col-sm-6 col-xs-12 description">
			                Включает в себя полный "Стандартный курс" за 2 месяца
			                </p>
			                <p class="col-sm-6 col-xs-12 lessons-by-week"><span>3 раза</span> в неделю. <span>Продолжительность:</span> <br>2 месяца.</p>
			                <p class="col-lg-6 col-xs-12 indiv">( Расписание составляется индивидуально для каждого )</p>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">250 <span>грн</span> / 120 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>

			            <div class="col-sm-6 image">
			            </div>
			          </div>
			        </article>
			      </div>

			      <div class="item">
			        <article id="shipping" class="container-fluid all-lessons">
			          <div class="container">
			            <div class="col-sm-6 image">
			            </div>

			            <div class="col-sm-6 col-xs-12">
			              <h2 class="text-right"><span>Морской</span> английский</h2>
			              <div class="container-fluid lessoninfo">
			                <ul class="col-md-6 col-sm-7 col-xs-12 description  text-right">
			                  <li>изучение терминологии</li>
			                  <li>грамматика</li>
			                  <li>разговорные навыки</li>
			                  <li>подготовка к собеседованию</li>
			                </ul>
			                <p class="col-md-6 col-sm-5 col-xs-12 lessons-by-week"><span>3 раза</span> в неделю. <span>Продолжительность:</span> <br>2 месяца.</p>
			                <p class="col-lg-6 col-xs-12 indiv">( Расписание составляется индивидуально для каждого )</p>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">250 <span>грн</span> / 120 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>
			          </div>
			        </article>
			      </div>

			      <div class="item">
			        <article id="native" class="container-fluid all-lessons">
			          <div class="container">  
			            <div class="col-sm-6 col-xs-12 text-left">
			              <h2><span>Занятие</span> с носителем языка</h2>
			              <div class="container-fluid lessoninfo">
			                <ul class="col-sm-12 col-xs-12 description">
			                  <li>разговорная практика</li>
			                  <li>преодоление языкового барьера</li>
			                </ul>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">300 <span>грн</span> / 120 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>

			            <div class="col-sm-6 image">
			            </div>
			          </div>
			        </article>
			      </div>

			      <div class="item">
			        <article id="speaking-club" class="container-fluid all-lessons">
			          <div class="container">
			            <div class="col-sm-6 image">
			            </div>

			            <div class="col-sm-6 col-xs-12 text-right">
			              <h2><span>Speaking</span> and <span>movie</span> club</h2>
			              <div class="container-fluid lessoninfo">
			                <ul class="col-sm-12 col-xs-12 description">
			                  <li>обсуждение актуальных вопросов, статей</li>
			                  <li>просмотр фильмов на иностранных языках и их обсуждение</li>
			                  <li>преодоление языкового барьера</li>
			                </ul>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">70 <span>грн</span> / 60 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>
			          </div>
			        </article>
			      </div>

			      <div class="item">
			        <article id="skype" class="container-fluid all-lessons">
			          <div class="container">  
			            <div class="col-sm-6 col-xs-12 text-left">
			              <h2><span>Занятие</span> по Skype</h2>
			              <div class="container-fluid lessoninfo">
			                <p class="col-sm-12 col-xs-12 description">
			                  Занятия по Скайпу - это индивидуальные занятия дома в удобное для вас время. Уроки английского языка онлайн - хороший способ повысить свой уровень английского, а так же приобрести разговорные навыки и практику.
			                </p>
			              </div>
			              <p class="col-sm-12 col-xs-7 price">150 <span>грн</span> / 60 <span>мин</span></p>
			              <a class="scrollto" href="#map"><button class="col-md-5 col-sm-6 col-xs-3">Узнать подробнее</button></a>
			            </div>

			            <div class="col-sm-6 image">
			            </div>
			          </div>
			        </article>
			      </div>

			    </div>

			    <!-- Controls -->
			    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</section>

			<!-- END ALL LESSONS SLIDER -->

			<!-- TEACHERS -->
			<section id="teachers">
			  <div class="container">
			    <h2 class="col-xs-12">Преподаватели <strong>английского</strong> языка</h2>
			    <article class="first col-md-3 col-sm-6 col-xs-12">
			      <div class="image-container"><img src="<?php echo( get_template_directory_uri() . '/img/teachers/english_teacher_1.jpg'); ?>" alt="Учитель английского языка"></div>
			      <h3>Песчанская Ксения</h3>
			      <p>Закончила университет им. Мечникова по специальности "<strong>английский язык</strong> и литература".<span> Так же проходила обучение в Шотландии в университете Сент Эндрюс. Опыт преподавания в УВК им. А.С. Пушкина №90 более 10 лет. Легко и доступно умеет объяснить сложные элементы английской грамматики. Поможет достич хорошего результата в изучении английского языка.</span></p>
			      <button class="readmore">Подробнее</button>
			    </article>
			    <article class="second col-md-3 col-sm-6 col-xs-12">
			      <div class="image-container"><img src="<?php echo( get_template_directory_uri() . '/img/teachers/english_teacher_2.jpg'); ?>" alt="Учитель английского языка"></div>
			      <h3>Michael Adkinson</h3>
			      <p>Закончил  Graduated high school в Кентуки, США. Приехал в Одессу в 2015 году, здесь преподает <span>английский частным образом для IT компаний и в школах. Поможет быстро преодолеть языковой барьер. На индивидуальных занятиях и в Speaking Club Вы разовьете навыки общения на английском языке.</span></p>
			      <button class="readmore">Подробнее</button>
			    </article>
			    <article class="third col-md-3 col-sm-6 col-xs-12">
			      <div class="image-container"><img src="<?php echo( get_template_directory_uri() . '/img/teachers/english_teacher_3.jpg'); ?>" alt="Учитель английского языка"></div>
			      <h3>Basil Igboechi</h3>
			      <p>Уроженец Abuja, Nigeria. Преподавал английский язык в течении шести лет в таких школах, как Interlingua,<span> Southern Albion и в Медицинском университете.</span></p>
			      <button class="readmore">Подробнее</button>
			    </article>
			    <article class="fourth col-md-3 col-sm-6 col-xs-12">
			      <div class="image-container"><img src="<?php echo( get_template_directory_uri() . '/img/teachers/english_teacher_4.jpg'); ?>" alt="Учитель английского языка"></div>
			      <h3>Татьяна Бабиченко</h3>
			      <p>Закончила университет им. Мечникова по специальности "английский язык и литература"<span>. Опыт преподавания частным образом 7 лет. Хорошо находит общий язык с детьми и делает обучение интересным и увлекательным.</span></p>
			      <button class="readmore">Подробнее</button>
			    </article>
			  </div>
			</section>
			<!-- END TEACHERS -->

			<div class="container-fluid empty-water"></div>

			<!-- MAP -->
			<section id="map" class="container-fluid">
			    <div class="col-sm-5 col-xs-12 text">
			      <h2>English & Deutsch club</h2>
			    </div>
			    <div class="col-sm-7 col-xs-12 picture">
			      
			    </div>
			    <div class="col-sm-5 col-xs-12 googlemap">
			      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1633.7275093532878!2d30.746285563007753!3d46.47660458278003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6319df98ff295%3A0x1e7e4fe40573cd08!2z0LLRg9C70LjRhtGPINCa0LDQvdCw0YLQvdCwLCAzNiwg0J7QtNC10YHQsCwg0J7QtNC10YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCw!5e0!3m2!1sru!2sru!4v1471904775874" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
			    </div>
			    <div class="col-sm-7 col-xs-12 contact">
			      <h2>Свяжитесь <span>с нами</span></h2>
			      <hr>
			      <div class="col-sm-4 col-xs-4 phones">
			        <h3>Телефон</h3>
			        <!-- <a href="#">+38 (067) 715 29 31</a> -->
			        <a href="tel:+380635136295"><span itemprop="telephone">+38 (063) 513 62 95</span></a>
			        <br>
			        <h3>Email</h3>
			        <a href="#" class="email"><span itemprop="email">englishdeutschcourses@gmail.com</span></a>
			        <h3>Наш адрес:</h3>
			        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><p itemprop="streetAddress">ул. Канатная 36</span></p>
			      </div>
			      <!-- <div class="col-sm-8 col-xs-8 feedbackform">
			        <form action="" id="mapFeedback">
			          <input type="text" name="name" placeholder="Имя" required>
			          <input type="text" name="phone" placeholder="Телефон" required>
			          <input type="email" name="email" placeholder="Email">
			          <button>Отправить</button>
			        </form>
			      </div> -->
			    </div>
			</section>
			<!-- END MAP --> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

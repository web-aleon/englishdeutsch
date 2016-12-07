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
?><!DOCTYPE html>
<html id="htmltop" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Cuprum:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body id="mainPage" <?php body_class(); ?>>
  <div class="container-fluid homepage">
    

    <div id="leftPicture" class="col-sm-6 picture left">
      <img class="col-sm-offset-2 col-sm-10" src="<?php echo (get_template_directory_uri() . '/img/main/deutschland.jpg'); ?>" alt="Германия">
    </div>
    
    <a href="/english" id="left" class="col-sm-6 choise left">
      <div class="tagline-block container-fluid">
        <h2 class="col-sm-12 tagline" id="taglineLeft">Только у нас индивидуальные занятия по цене групповых</h2>
      </div>
      <h2 class="col-sm-12">Для тех, кто <br>хочет свободно <br><span>говорить по английски</span></h2>
      <h3 id="leftText" class="col-sm-12">Индивидуальное обучение <span>удобно</span><br> и максимально <span>эффективно</span></h3>
      <button id="leftButton">Подробнее</button>
    </a>

    <div id="rightPicture" class="col-sm-6 picture right">
      <img class="col-sm-8" src="<?php echo (get_template_directory_uri() . '/img/main/england.png'); ?>" alt="Англия">
    </div>

    <a href="/deutsch" id="right" class="col-sm-6 choise right">
      <div class="tagline-block container-fluid">
        <h2 class="col-sm-12 tagline" id="taglineRight">Только у нас индивидуальные занятия по цене групповых</h2>
      </div>
      <h2 class="col-sm-12">Для тех, кто <br>хочет свободно <br><span>говорить по немецки</span></h2>
      <h3 id="rightText" class="col-sm-12">Индивидуальное обучение <span>удобно</span><br> и максимально <span>эффективно</span></h3>
      <button id="rightButton" >Подробнее</button>
    </a>

  </div>

  <?php wp_footer(); ?>
</body>
</html>



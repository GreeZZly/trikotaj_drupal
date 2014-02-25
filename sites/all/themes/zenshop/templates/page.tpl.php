<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <div id="header_background">
    <div id="header">
      <ul>
        <li>
          <div id="header_left">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
              <?php endif; ?>
            <div id="search">
            
            <?print render($page['header_left']);?>
            </div>
          </div>
        </li>
        <li>
          <div id="header_center">
            <div id="header_phone">+7(8352)63-06-54</div>
            <div id="header_socials">
              <div class="icon_header_vk"></div>
              <div class="icon_header_tweet"></div>
              <div class="icon_header_fb"></div>
            </div>
          </div>
        </li>
        <li>
          <div id="header_right">
            <div id="logistr">
             <!--  <div id="registr">Регистрация</div>
              <div> | </div>
              <div id="login">Вход</div> -->
              <?php if ($secondary_menu): ?>
                <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
                  <?php print theme('links__system_secondary_menu', array(
                    'links' => $secondary_menu,
                    'attributes' => array(
                      'class' => array('links', 'inline', 'clearfix'),
                    ),
                    'heading' => array(
                      'text' => $secondary_menu_heading,
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                    ),
                  )); ?>
                </nav>
              <?php endif; ?>
            </div>
            <div id="cart">
              <div id="cart_title">Корзина</div>
              <div id="cart_items">Товары: <b>0</b></div>
              <div id="cart_summ">Сумма: <b>0</b></div>
            </div>
            <?php print render($page['header_right']); ?>
          </div>
        </li>
        <li class="helper"></li>
      </ul>
      <?php print render($page['header']); ?>
    </div>
  </div>
  
<!-- НАВИГАЦИОННЫЙ БАР -->

<div id="navbar_background" class="block_background">
  <div  class="center_block" id="navbar">
    <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
    <?php print render($page['navigation']); ?>
  </div>
</div>

<!-- НАВИГАЦИОННЫЙ БАР. КОНЕЦ -->

<!-- РЕКЛАМНЫЙ БЛОК -->
<div id="commercial_background">
  <div class="center_block" id="commercial">
    <div>
    

      <?php print render($page['hero']); ?>
    </div>
  </div>
</div>
<div id="pusto_mesto_cvetno"></div>
<!-- РЕКЛАМНЫЙ БЛОК. КОНЕЦ -->

<!-- ОТЗЫВЫ  -->
<div id="reviews_background">
  <div id="reviews" class="center_block">
      <?php //надо так 
    print render($page['pkv_region']); 
    ?>
    <!-- <div class="block_title">Отзывы</div>
    <ul>
      <li>
        <div class="reviews_item">
          <div class="reviews_item_pic"><img src="/sites/all/themes/zenshop/include/images/rev1.png"></div>
          <div class="reviewer_name">Настя</div>
          <div class="review_item_text">"Выбор просто замечательный! Для прогулки по городу, встречи в кафе с друзьями... Я нашла миллион идей для своего образа. Мама тоже очень..."</div>
        </div>
      </li>
      <li>
        <div class="reviews_item">
          <div class="reviews_item_pic"><img src="/sites/all/themes/zenshop/include/images/rev2.png"></div>
          <div class="reviewer_name">Марина</div>
          <div class="review_item_text">"Выбор этого магазина дает мне быть разной и неповторимой. На долгожданный вечер с любимым человеком просто необходимо выбрать..."</div>
        </div>
      </li>
      <li>
        <div class="reviews_item">
          <div class="reviews_item_pic"><img src="/sites/all/themes/zenshop/include/images/rev3.png"></div>
          <div class="reviewer_name">Катя</div>
          <div class="review_item_text">"Для учебы подойдет удобная и строгая одежда. А ведь еще нужно решить, в чем пойти на вечеринку! Здесь я нашла для себя то, что искала для создания..."</div>
        </div>
      </li>
      <li class="helper"></li>
    </ul> -->
  </div>
</div>
<!-- ОТЗЫВЫ КОНЕЦ -->

<!-- СОЦИАЛЬНЫЕ КНОПКИ -->
<div id="soclikes_background">
  <div class="center_block" id="soclikes">
    
      <?print render($page['soclikes']);?>
  </div>
</div>
<!-- СОЦИАЛЬНЫЕ КНОПКИ КОНЕЦ -->
  <div id="main">

	
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>

<?php //так не надо 
  // include_once("main/htmlheader.html");
  // include_once("main/header.php");
  // include_once("main/navbar.php");
  // include_once('main/commercial.php');
  // include_once('main/reviews.php');
  // include_once('main/soclikes.php');
  // include_once('main/likebox.php');
  // include_once('main/banner.php');
  // include_once('main/mostsale.php');
  // include_once('main/banner1.php');
  // include_once('main/newprod.php');
  // include_once('main/counter.php');
  // include_once('main/minimap.php');
  // include_once('main/footer.php');
  // include_once("main/htmlfooter.html");


?>
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

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    

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

    <?php print render($page['header']); ?>

  </header>
  


  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
     
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  
	    
	  <div class="pkvbgrd">
		<?php //надо так 
		print render($page['pkv_region']); 
		?>
	  </div>
	  
	  
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">

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
<<<<<<< HEAD

=======
</div>
<!-- контент  -->  

<!-- ОТЗЫВЫ  -->
<?php if (!empty($page['reviews'])){?>
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
<?php } ?>
<!-- ОТЗЫВЫ КОНЕЦ -->

<!-- СОЦИАЛЬНЫЕ КНОПКИ -->
<?php if (!empty($page['soclikes'])){?>
<div id="soclikes_background">
  <div class="center_block" id="soclikes">
    
      <?print render($page['soclikes']);?>
  </div>
</div>
<?php }?>
<!-- СОЦИАЛЬНЫЕ КНОПКИ КОНЕЦ -->

<!-- LIKEBOX -->
<?php if (!empty($page['likebox'])){?>
<div id="likebox_background">
  <div id="likebox" class="center_block">
    <?print render($page['likebox']);?>
  </div>
</div>
<?php } ?>
<!-- END. LIKEBOX -->

<!-- BANNER 1 -->
<?php if (!empty($page['banner1'])){?>
<div id="banner_background">
  <div id="banner" class="center_block">
    <?print render($page['banner1']);?>
  </div>
</div>
<?php } ?>
<!-- END BANNER 1 -->

<!-- NEW INCOMES -->
<?php if (!empty($page['new_incomes'])){?>
<div id="mostsale_background">
   <div id="mostsale" class="center_block">
     <?print render($page['new_incomes']);?>
   </div>
</div>
<?php } ?>
<!-- END NEW INCOMES -->

<!-- BANNER 2 -->

<div id="banner_background">
  <div id="banner" class="center_block">
    <?print render($page['banner2']);?>
  </div>
</div>

<!-- END BANNER 2 -->

<!-- MOSTSALE -->
<?php if (!empty($page['mostsale'])){?>
<div id="mostsale_background">
  <div id="mostsale" class="center_block">
    <?print render($page['mostsale']);?>
  </div>
</div>
<?php } ?>
<!-- END MOSTSALE -->

<!-- COUNTER -->
<?php if (!empty($page['counter'])){?>
<div id="counter_background">
  <div id="counter" class="center_block">
    <?print render($page['counter']);?>
  </div>
</div>
<?php } ?>
<!-- END COUNTER -->

<!-- MINIMAP -->
<div id="minimap_background">
  <div id="minimap" class="center_block">
   <?php print render($page['minimap']);?>
  </div>
</div>
<!-- END MINIMAP -->
<!-- FOOTER -->
<div id="footer_background">
  <div id="footer" class="center_block">
    <div id="copyright">Copyright © 2014г. Мой любимый трикотаж</div>
    <a href="http://sellingsites.pro"><div id="ss"></div></a>
>>>>>>> 791afa18c4f9e9d33a40ad175297e1cadf60374e
  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>



<?
 //так не надо 
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

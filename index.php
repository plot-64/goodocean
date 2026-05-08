<?php get_header(); ?>

  <main class="main">
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>  

    <?php if(is_page('privacy')):?>
    <h1 data-title="Privacy Policy" class="page-title"><?php the_title(); ?></h1>
    <?php else: ?>
      <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>
      <?php endif; ?>

    <div class="inner is-small">
      <ol class="c-breadcrumbs">
         <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
      
      <div class="box-white">
        <div class="privacy-wrapper">
         <?php the_content(); ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php get_footer(); ?>
<!-- ヘッダーメニュ -->
<?php 
  wp_nav_menu( array( 
    'theme_location' => 'main-menu',  // グローバルナビゲーション用のmain-menuを表示
    'container' => 'nav',  // ※必要なら追加<div>で出力されるソースコードを<nav>に変更
  ) ); 
?>

<!-- フッターメニュ -->
<?php 
  wp_nav_menu( array( 
    'theme_location' => 'footer-menu',//フッターナビゲーション用のfooter-menuを表示
  ) ); 
?>  


//ウィジェット機能の表示


<?php dynamic_sidebar('news-widgets'); ?>


<?php dynamic_sidebar('footer-widgets'); ?>


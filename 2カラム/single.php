<?php get_header();?>
  <div class="container">
    <main>
      <?php if(have_posts()): 
      while(have_posts()): the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      <?php endwhile; endif; ?>
      <?php echo do_shortcode('[contact-form-7 id="45f021b" title="コンタクトフォーム 1"]'); ?>
    </main>
    
    <aside>Aside</aside>
  </div>
<?php get_footer(); ?>
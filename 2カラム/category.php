<?php get_header();?>
  <div class="container">
    <main>
      <?php if(have_posts()): 
      while(have_posts()): the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php echo wp_trim_words( get_the_content() , 5, '...'); ?></p>
      <?php endwhile; endif; ?>

    </main>
    
    <aside>Aside</aside>
  </div>
<?php get_footer(); ?>
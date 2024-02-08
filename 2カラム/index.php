<?php get_header();?>

  <section id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hero1.JPG" id="hero1" class="slide">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hero2.JPG" id="hero2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hero3.JPG" id="hero3">
    <div class="slide-left"></div>
    <div class="slide-right"></div>
    <div class="hero_outer">
    </div>
    <div class="hero_inner">
      <h1>ヘアケアシャンプー</h1>
      <p>艶やかな髪質へ</p>
    </div>
  </section>

  <section id="news" class="container">
    <h2>News</h2>
    <div class="back">
      <h4>News</h4>
    </div>
    <div class="news">
    <?php 
    $args = array(
      'post_type'      => 'post',
      'category_name' => 'news',
      'posts_per_page' => 2,
    );
     $posts = get_posts($args);
     foreach($posts as $post):
      setup_postdata($post);?>
      
      <a href="<?php echo get_permalink(); ?>">
        <article>
        <div class="date_border-outer">
          <div class="date_border-inner">
            <p><?php echo post_custom('month'); ?></p>
            <p><?php echo post_custom('day'); ?></p>
          </div>
        </div>
        <div class="article_inner">
          <h3><?php the_title(); ?></h3>
          <p><?php 
                         $content = wp_trim_words( get_the_content() ,  10, '...');
                         echo $content;
                       ?></p>
        </div>
      </article>
    </a>
<?php endforeach;
wp_reset_postdata();?>
    </div>
  </section>


  <section id="catch">
    <div class="catch">
      <h3>こんなお悩みは<br>ありませんか？</h3>
      <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" width="32" height="32">うねり</li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" width="32" height="32">パサつき</li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" width="32" height="32">傷み</li>
      </ul>
    </div>
  </section>


  <section id="purpose">
    <div class="purpose">
      <div class="purpose_inner">
        <p>ヘアケアはテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
      <img id="pr1" src="<?php echo get_template_directory_uri(); ?>/img/pr1.JPG">
      <img id="deco1" src="<?php echo get_template_directory_uri(); ?>/img/deco1.PNG">
      <img id="deco2" src="<?php echo get_template_directory_uri(); ?>/img/deco2.PNG">
    </div>
  </section>

  <section id="product" class="container">
    <h2>Product</h2>
    <div class="back">
      <h4>Product</h4>
    </div>
    <div class="product_outer">
      <div class="product_inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/product.png">
      </div>
      <div class="product_inner">
        <h3>ヘアケアシャンプー</h3>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
  </section>

  <section id="review">
    <div class="container">
      <h2>Review</h2>
      <div class="back">
        <h4>Review</h4>
      </div>
      <?php 
    $args = array(
      'post_type'      => 'post',
      'category_name' => 'review',
      'posts_per_page' => 3,
    );
     $posts = get_posts($args);
     foreach($posts as $post):
      setup_postdata($post);?>
      <article>
        <div class="review_outer">
          <div class="post_thumbnail">
        <?php if (has_post_thumbnail()) : ?>
  <?php the_post_thumbnail(); ?>
<?php else: ?>
  <img src="<?php echo get_template_directory_uri(); ?>/img/review1.png">
<?php endif; ?>
</div>
          <div class="review_inner">
            <h3><?php the_title(); ?></h3>
            <p>
            <?php 
                         $content = wp_trim_words( get_the_content() ,  30, '...');
                         echo $content;
                       ?>
            </p>
          </div>
        </div>
      </article>
      <?php endforeach;
wp_reset_postdata();?>
    </div>
  </section>


  <section id="pr">
    <img src="<?php echo get_template_directory_uri(); ?>/img/pr2.JPG">
    <h3>指通り、するり。</h3>
  </section>

  <section id="items" class="container">
    <div>
      <h2>Items</h2>
      <div class="back">
        <h4>Items</h4>
      </div>
      <div class="items_outer">
        <ul>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/item1.jpg">
              <p>商品1</p>
            </a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/item2.jpg">
              <p>商品2</p>
            </a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/item3.jpg">
              <p>商品3</p>
            </a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/item4.jpg">
              <p>商品4</p>
            </a></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="sns">
    <div class="container">
      <h2>SNS</h2>
      <div class="back">
        <h4>SNS</h4>
      </div>
      <div class="sns_outer">
        <ul class="sns_inner1">
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns1.jpg"></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns2.jpg"></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns3.jpg"></a></li>
        </ul>
        <ul class="sns_inner2">
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns4.jpg"></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns5.jpg"></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns6.jpg"></a></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contact" class="container">
    <h2>Contact</h2>
    <div class="back">
      <h4>Contact</h4>
    </div>
    <form method="post" action="confirm.php">
      <table>
        <tr>
          <th><label for="name">name</label></th>
          <td><input type="text" id="name" name="name" placeholder="山田太郎" required></td>
        </tr>
        <tr>
          <th><label for="email">email</label></th>
          <td><input type="email" id="email" name="email" placeholder="abc@example.com" required></td>
        </tr>
        <tr>
          <th><label for="message">message</label></th>
          <td><textarea id="message" name="message" placeholder="お問い合わせ内容" required></textarea></td>
        </tr>
      </table>
      <input type="submit" value="送信" class="btn-submit is-unactive" disabled>
    </form>
  </section>
  <?php get_footer(); ?>
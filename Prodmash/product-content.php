<?php
  $product_id = get_the_ID();
  $product_img_src = get_the_post_thumbnail_url($product_id, 'product');
?>
  <div class="products__info_img orange__outline">
    <img src="<?php echo $product_img_src?>" alt="Prodmash" />
  </div>
  <div class="products__info_description">
    <span class="orange__before_line"><?php the_title(); ?></span>
    <div>
    <?php the_content(); ?>
    </div>
  </div>

<?php get_header ();?>

<div class="single__title">
    <div class="container">
    <h1 class="clr--accent text--center">
        <?php the_field('code'); ?> - 
        <?php the_title(); ?>
    </h1>
    </div>
</div>

<div class="single__wrapper">
    <div class="container">
    <div class="single__wrapper__grid">
        <figure class="single__img">
        <img src="<?php echo get_field('image')?>" alt="">
        </figure>

        <div class="single__content">
        <ul class="rating">
            <?php $rating = get_field('rating')?>

            <?php for($x = 1; $x < $rating; $x++) { ?>
                <li><i class="fas fa-star"></i></li>
            <?php } ?>
        </ul>  

        <p> <?php the_field('description')?></p>

        <h3>Options</h3>
        <ul>
        <?php
          $options =  get_field('addons') ?>
              
          <?php foreach( $options as $option): ?>
              <li><input type="checkbox" /> <?php echo $option; ?></li>
          <?php endforeach; ?>
        </ul>

        <div class="action">
            <h2> Php <?php the_field('price')?>.00 </h2>
            <button class="bg--secondary clr--light">Add to Cart</button>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="other">
      <div class="container">
        <div class="other__wrapper">
          <h2>You Might also want ot try</h2>
          <div class="other__grid">
          <?php $bestSeller = new WP_Query(array(
            'post_type' => 'foods',
            'posts_per_page' => 3,
            'meta_query' => array( 
                array(
                    'key'       => 'category',
                    'value'     => 'Best Seller',
                    'compare'   => 'LIKE',
                )
            )
        ))?>

        <?php if($bestSeller->have_posts()) : while($bestSeller->have_posts()) : $bestSeller->the_post() ?>

            <div class="card">
              <div class="card__wrapper">
                <img src="<?php echo get_field('image')?>" alt="" />

                <div class="grid bg--accent clr--light p--2">
                  <div class="card__content">
                  <ul class="rating flex">
                        <?php $rating = get_field('rating')?>

                        <?php for($x = 1; $x < $rating; $x++) { ?>
                            <li><i class="fas fa-star"></i></li>
                        <?php } ?>
                    </ul>  
                    <h4>
                      <?php the_title()?>
                    </h4>
                  </div>

                  <div class="card__price">
                    <p>
                      Start at <br />
                      <span><?php the_field('price')?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <?php endwhile;
            else :
                echo "No More Jollibee for you!";
            endif;
        wp_reset_postdata();
        ?>

          </div>
        </div>
      </div>
    </div>

<?php get_footer ();?>
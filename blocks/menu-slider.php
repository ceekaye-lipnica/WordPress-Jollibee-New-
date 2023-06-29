<?php
    $header = get_field('header');
    $viewAll = get_field('viewall');
    $jsId = get_field('jsid');
    $value = get_field('value');
?>

<section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2><?php echo $header?></h2>
            <span></span>
            <a href="<?php echo site_url($viewAll)?>">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="<?php echo $jsId ?>">

            <?php
                $query = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => $value,
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image', get_the_ID()) ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price', get_the_ID()); ?></span></p>
                    </div>
                </div>
                <button class="btnAddtoCart"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div> 
</section>
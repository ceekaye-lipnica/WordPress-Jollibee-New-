<?php get_header()?>

<?php if(have_posts()) : while(have_posts()) : the_post()?>

<section class="page__hero">
    <h1><?php the_title() ?></h1>
</section>

<div class="full__width">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>

<?php
    endwhile;
    else: 
        echo "wala ng post beshy";
    endif;
?>

<div class="modal">
    <div class="backdrop"></div>
    <div class="modal__main">
        <div class="modal__header">
            <h2>Contact Us</h2>
            <button id="btnClose"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal__body">
            <?php echo do_shortcode('[contact-form-7 id="83" title="Contact form 1"]')?>
        </div>
    </div>

</div>

<?php get_footer()?>


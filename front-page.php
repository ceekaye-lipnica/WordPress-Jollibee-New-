<?php get_header ()?>

<!-- 
WORDPRESS ACCOUNT: 

USERNAME: monmon.plaza@gmail.com
PASSWORD: pia123! 
-->

<?php if(have_posts()) : while(have_posts()) : the_post()?>
    <?php the_content(); ?>
<?php
    endwhile;
    else: 
        echo "wala ng post beshy";
    endif;
?>

<!-- ADD TO CART -->
<div class="cart">
    <div>
        <h3>Cart</h3>
        <button class="cart_close"><i class="fas fa-times"></i></button>

        <div class="cart__wrapper">
        </div>
    </div>

    <ul>
        <li>Total</li>
        <li id="total"></li>
    </ul>
</div>

<?php get_footer ()?>
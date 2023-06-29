<?php 
    $header = get_field('header');
    $body = get_field('body');
    $image = get_field('image');
    $orientation = get_field('orientation');
?>

<section class="two__cols <?php echo $orientation; ?>" >
    <div class="container">
        <div class="two__cols__grid">

            <div class="col__1">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col__2">
                <h3><?php echo $header; ?></h3>
                <?php echo $body; ?>
            </div>

        </div>
        
    </div>
</section>



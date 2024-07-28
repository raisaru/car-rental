<?php 
get_header(); ?>

<div class="container">
    <h1 class="feature__title"><?php echo get_the_title();?></h1>

    <div class="feature__content">
        <?php echo wpautop(the_content()); ?></div>
</div>

<?php get_footer(); ?>
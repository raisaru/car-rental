<?php
get_header(); ?>
<div class="container">
    <h1 class="usage__ttl"><?php echo get_the_title(); ?></h1>
    <div class="usage__description"><?php echo wpautop(the_content()); ?></div>
</div>


<?php get_footer(); ?>
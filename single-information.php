<?php 
get_header(); ?>
<div class="container">
    <h2 class="information__ttl">
        <?php echo get_the_title();?></h2>
    <div class="information__description">
        <?php echo wpautop(the_content()); ?></div>
</div>

<?php get_footer(); ?>
<?php 
/*
Template Name: Fancy Title
*/
?>
<?php get_header() ?>
<?php while (have_posts()) : the_post();?>
<main class="main-content">
<div class="fullwidth-block inner-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="content">
<h2 class="entry-title"
style="color:#FD5921;"><?php the_title();?></h2>
<?php the_content();?>
</div>
</div>
</div>
</div>
</div>
</main> <!-- .main-content -->
<?php endwhile; ?>

<a href="<?=the_field('link_adresse') ?>" class="button"><li class="fa fa-link"></li><?=the_field('titre_de_lien') ?></a>
<?php get_footer() ?>
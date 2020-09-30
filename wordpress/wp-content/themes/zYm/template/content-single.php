<div class="post">
                    <div class="entry-date">
                      <div class="date"><?=get_the_date('d');?></div>
                      <span class="month"><?=get_the_date('M');?></span>
                    </div>
                    <div class="featured-image">

                    <?= var_dump(the_post_thumbnail()); ?>  
                    </div>
                    <h2 class="entry-title">
                      <a href="<?= the_permalink(); ?>"><?= the_title();?></a>
                    </h2>
                    <p>
                     <?= the_excerpt(); ?>
                    </p>
                    <a href="#">Read more</a>
</div>

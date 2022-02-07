<?php
    get_header();
    if(is_archive()){
        ?>
            <h2><?=esc_html( get_the_category()[0]->name);?></h2>
        <?php
    }else{
        ?>
            <h2>Accueil</h2>
        <?php
    }
    ?>
        <div class="flex">
            <section class="trois-quart">
            <?php
            
                if(have_posts()){

                    while (have_posts())
                    { 
                        the_post() 
                    ?>
                    <article class="flex">
                        <div class="image-article quart">
                        <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail('small', ['class' => 'fluide'] );
                            }
                        ?>   
                        </div>
                        <div class="texte-article trois-quart">
                            <h3><?=the_title();?></h3>
                            <p><?=the_excerpt();?><a href="<?=the_permalink();?>">En savoir plus...</a></p>
                            <p><?=the_tags();?></p>
                        </div>
                    </article>
                    <?php
                    }
                }
            ?>
            </section>
            <section class="quart sidebar">
                <article>
                    <h3>Sidebar</h3>
                    <div class="widget-container">
                        <!-- widget -->
                    </div>
                    <div class="widget-container">
                        <!-- widget -->
                    </div>
                </article>
            </section>
        </div>

    </main>
    <?=get_footer();?>
</body>

</html>
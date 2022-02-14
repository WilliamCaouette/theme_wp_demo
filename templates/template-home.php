<?php 
/*
Template Name: Gabarit accueil
*/
    get_header();
    
    //$args = array('category_name'=>'Techno', 'post_type' => 'post');
    //$query = new WP_Query($args);

    $args = array('category__not_in' => 1);
    $query = new WP_Query($args);


    ?>
    <div class="flex">
            <section class="trois-quart">
            <?php
            
                if($query->have_posts()){

                    while ($query->have_posts())
                    { 
                        $query->the_post() 
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
                <?=get_sidebar();?>
            </section>
        </div>
    
    <?php
    get_footer();
?>
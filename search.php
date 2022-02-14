<?php
    get_header();

    ?>
    <h2>Résultat de recherche</h2>
    <?php
    if(have_posts()){
        while (have_posts()){ 
            the_post();
        ?>
            <article class="flex">
                <div class="text-article">
                        <h2><?=the_title( );?></h2>
                        <p><?=the_excerpt( );?><a href="<?=the_permalink();?>">En savoir plus...</a></p>
                </div>
            </article>
        <?php
        }
    }
    else{
        ?>
            <p>Aucun résultat pour cette requête...</p>
        <?php
    }
    get_footer();
?>
<?php
    if(have_posts()){
        while (have_posts()){ 
            the_post();
        ?>
            <article class="flex">
                <div class="text-article">
                        <h2><?=the_title( );?></h2>
                        <p><?=the_content( );?></p>
                </div>
            </article>
    <?php
        }
    }
?>
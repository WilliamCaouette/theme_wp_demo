<h2>Article</h2>
    <?php
        if(have_posts()){
            while (have_posts()){ 
                the_post();
            ?>
                <article class="flex">
                    <div class="image-article quart"> 
                        <?php
                            if(has_post_thumbnail())
                            {
                                the_post_thumbnail();
                            }
                        ?>
                    </div>
                    <div class="text-article trois-quart">
                            <h3><?=the_title( );?></h3>
                            <p><?=the_content( );?></p>
                            <p>Ce sujet vous intéresse? Consultez d'autres articles dans la catégorie <?=the_category( ',');?></p>
                    </div>
                </article>
        <?php
            }
        }
    ?>
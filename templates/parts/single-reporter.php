<h2>Article</h2>
    <?php
        if(have_posts()){
            while (have_posts()){ 
                the_post();
            ?>
                <article class="flex">
                    <div class="image-article quart"> 
                        <?php
                            if(get_field('photo'))
                            {
                             ?>
                                <img src="<?=get_field('photo')['sizes']['large'];?>" alt="">
                             <?php
                            }
                        ?>
                    </div>
                    <div class="text-article trois-quart">
                            <h3><?=get_field('prenom');?> <?=get_field('nom');?></h3>
                            <p><?=get_field('description');?></p>
                            <p>Expérience: <?=get_field('annees_dexperience');?></p>
                    </div>
                </article>
        <?php
            }
        }
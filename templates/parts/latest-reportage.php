<?php //affiche les derniers reportage en ordre de date


//paramètres pour la requête
$args = array('category_name'=>'reportage','order'=>'DESC', 'orderby'=> 'date');

//Exécution de la requête
$query = new WP_Query($args);
?>
<h2>Derniers reportage</h2>
<div class="splide">
  <div class="splide__track">
    <ul class="splide__list">
        <?php 
        //Boucle sur les résultats de la requête
            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

            <li class="splide__slide">
                <img src="<?=get_field('image_du_reportage')['sizes']['thumbnail']?>" alt="">
                <p><?=get_field('titre_du_reportage')?></p>
                <p><?=get_field('date_du_reportage')?></p>
                
            </li>
            
            <?php
            endwhile;
            endif;
        ?>
        </ul>
    </div>
</div>
<?php
//réinitialiser le poste global
wp_reset_postdata();

?>
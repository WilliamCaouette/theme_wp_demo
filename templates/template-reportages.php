<?php 

/**
 * Template Name:Reportages
 */



?>
<?php get_header() ?>

<h2><?=get_the_title();?></h2>
<p><?php get_the_content(); ?></p>

<?php 
    $args = array(
        'category_name' => "reportage",
        'order' => 'date',
        'order_by' => 'ASC'
    );
    $query = new WP_Query($args);

    if($query->have_posts()){
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <article>
                <a href="<?=get_the_permalink()?>"><h3><?=get_field('titre_du_reportage')?></h3></a>
            
            <?php 
            
            if(get_field('image_du_reportage')){
                ?>
                    <img src="<?=get_field('image_du_reportage')['sizes']['thumbnail']?>" alt="">
                <?php
            }  
            ?>
                <p><?=get_field('date_du_reportage')?></p>
            </article>

            <?php 
        }

    }

?>



<?php get_footer() ?>
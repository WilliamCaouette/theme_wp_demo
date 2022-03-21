<?php 

/**
 * Template Name:Reporters
 * Page qui liste les reporters
 */



?>

<?php get_header(  ); ?>

<h2><?=get_the_title();?></h2>
<p><?=get_the_content(); ?></p>
<div class="flex">
<?php 
    $args = array(
        'category_name' => "reporters",
        'order' => 'title',
        'orderby' => 'ASC'
    );
    $query = new WP_Query($args);
    if($query->have_posts()){
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <a href="<?=get_the_permalink();?>">
                <article>
                    <h3><?=get_field('prenom')?>&nbsp;<?=get_field('nom')?></h3>
                <?php 
                if(get_field('photo')){
                    ?>
                        <img src="<?=get_field('photo')['sizes']['thumbnail']?>" alt="">
                    <?php
                }
                else{
                    ?>
                        <img src="<?=get_template_directory_uri()?>/img/portrait.png" width='150' height="150" alt="">
                    <?php  
                }   
                ?>
                </article>
            </a>
            <?php 
        }
    }
    
?>

</div>
<?php wp_reset_postdata(  ) ?>

<?php get_footer( ); ?>
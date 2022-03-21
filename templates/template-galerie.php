<?php 
/*
Template Name: Gabarit Galerie
*/
?>

<?php 
    get_header();
?>
<main>
    <h2>Galerie</h2>
<?php 
    $imgs = get_field('galerie');
    if($imgs){

        ?>
        
        <div class="galerie">
           
                <?php 
                    foreach ($imgs as $img) {
                        ?>  
                            <a href="<?=$img['full_image_url'];?>"><img src="<?=$img['thumbnail_image_url'];?>"/></a>
                        <?php 
                    }
                ?>
        </div>
        <?php
    }
?>
</main>
<?php 
    get_footer();
?>
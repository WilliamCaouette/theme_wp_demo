<?php 
/*
Template Name: Gabarit Entrevues
*/
?>

<?php 
    get_header();
?>
<main>
    <h2><?=get_the_title(); ?></h2>
    <p><?=get_the_content();?></p>

    <button onclick="showEntrevueType('all', this)" class="btn-all">Tous</button>
    <button onclick="showEntrevueType('video', this)" class="btn-video">Vidéo</button>
    <button onclick="showEntrevueType('audio', this)" class="btn-audio">Audio</button>
    <button onclick="showEntrevueType('text', this)" class="btn-text">Texte</button>
    <br>
    <br>
    <div class="flex">
    <?php 
        //paramètres pour la requête
        $args = array('post_type'=>'entrevue','orderby' => 'date', 'order'=>'DESC');
        
        //Exécution de la requête
        $query = new WP_Query($args);
        
        //Boucle sur les résultats de la requête
        if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); 
        
            $video = get_field("video");
            $audio = get_field("audio");
            $text = get_field("contenu");

            //on veut garder le type en cours
            $type = ($video) ? 'video' : (($audio) ? 'audio' : 'text');
        
        ?>
            
            <a class="flex entrevue" href="<?=get_permalink();?>" data-type="<?=$type?>">
                <div>
                    <?php
                        if($video){
                            ?>
                            <img src="<?=get_template_directory_uri()?>/img/video_camera.png" alt="">
                            
                            <?php
                        }
                        if($audio){
                            ?>
                            <img src="<?=get_template_directory_uri()?>/img/microphone.jpg" alt="">
                            
                            <?php
                        }
                        if($text){
                            ?>
                            <img src="<?=get_template_directory_uri()?>/img/text.jpg" alt="">
                            
                            <?php
                        }
                    ?>
                </div>
                <div>
                    <h3><?=get_field('titre');?></h3>
                </div>
            </a>

        <?php
        endwhile;
        endif;
        
        //réinitialiser le poste global
        wp_reset_postdata();
     ?>
     </div>
</main>
<?php 
    get_footer();

    /*

    
    */
?>

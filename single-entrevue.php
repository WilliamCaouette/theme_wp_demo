<?php get_header( ); ?>
<div>
    <h2><?=get_field('titre') ?></h2>
    <h4><?=get_field('date') ?></h4>

<?php  
    $video = get_field("video");
    $audio = get_field("audio");
    $text = get_field("contenu");
    if($video){
        echo $video;
    }
    if($audio){
        ?>
            <audio controls src="<?=$audio?>"></audio>
        <?php
    }
    if($text){
        ?>
            <p><?=get_field('contenu'); ?></p>
        <?php
    }

?>
<a href="<?=get_page_link(138);?>">retour aux entrevues</a>
</div>
<?php get_footer();?>

    

                        
                        
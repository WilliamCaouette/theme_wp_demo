<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?=bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Action hook: placeholder pour le code WP-->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!--Hook utilisable dans function.php-->
    <?php wp_body_open();?>

    <header class="v-aligne">
        <div class="conteneur flex space-between">
            <section>
                <h1 class="titre-principal"><a href="<?=esc_url(home_url('/'))?>"><?php bloginfo('title'); ?></a> </h1>
                <div class="slogan"><?php bloginfo('description'); ?></div>
            </section>
            <nav class="flex v-aligne">
                <?php
                
                    /*
                    <ul class="menu">
                        <li><a href="#" class="btn">Accueil</a></li>
                        <li><a href="#" class="btn">À propos</a></li>
                        <li><a href="#" class="btn">Contact</a></li>
                    </ul>
                    */

                    $args = array('theme_location' => 'main-menu');
                    wp_nav_menu( $args);
                
                ?>
            </nav>
        </div>
    </header>
    <div class="flex conteneur align-right">
        <form action="<?=esc_url( home_url('/') );?>" method="get">
            <input type="text" name="s" placeholder="Rechercher">
        </form>
    </div>
    <main class="conteneur">
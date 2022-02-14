<article>

    <h3>Compléments</h3>

    <div class="widget-container">
        <?php 
            if(is_active_sidebar('widget-1')){
                dynamic_sidebar( 'widget-1' );
            }
        ?>
    </div>
    <div class="widget-container">
        <?php 
            if(is_active_sidebar('widget-2')){
                dynamic_sidebar( 'widget-2' );
            }
        ?>
    </div>

</article>
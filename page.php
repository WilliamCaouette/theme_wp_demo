<?php
    get_header( );
    ?>
        <div class="flex">
            <section class="trois-quart">
                <?=get_template_part( "templates/generic-loop" );?>
            </section>
            <section class="quart sidebar">
                <?=get_sidebar();?>
            </section>
        </div>
    <?php
    get_footer();
?>
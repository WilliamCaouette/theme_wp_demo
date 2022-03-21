<?php
    get_header( );

    if(in_category('reporters')){
        get_template_part( 'templates/parts/single', 'reporter');
    }else if(in_category('reportages')){
        get_template_part( 'templates/parts/single', 'reportage');

    }else{
        get_template_part( 'templates/parts/single', 'news');
    }

    get_footer();
?>
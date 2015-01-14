<?php
    if ( dynamic_sidebar( 'front-page-header-third' ) ){
        /* IF NOT EMPTY */    
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>Restez en contact !</h3>';
            echo '<div class="textwidget">Pour vous tenir au courant de nos prochaines activités, veuillez vous abonner à notre <a href="/mailman/listinfo/annonces_linuq.org" target="_blank">liste courriel</a> ou notre <a href="https://www.facebook.com/groups/linuq/" target="_blank">groupe Facebook</a>.</div>';
            echo '</div>';
        }
    }
?>
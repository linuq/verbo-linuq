<?php
    if ( dynamic_sidebar( 'footer-third' ) ){
        /* IF NOT EMPTY */    
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h5>Contact</h5>';
            echo '<div class="textwidget">';
            echo 'e-mail: <a href="mailto:info@linuq.org">info@linuq.org</a></div>';
            echo '</div>';
        }
    }
?>
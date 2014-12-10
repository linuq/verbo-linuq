<?php
    if ( dynamic_sidebar( 'footer-second' ) ){
        /* IF NOT EMPTY */    
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h5>Adresse des activités</h5>';
            echo '<div class="textwidget">';
            echo 'Centre de loisirs St-Louis-de-France</br>';
            echo '1560 Route De L’Église</br>';
            echo 'Québec, G1W 3P5</div>';
            echo '</div>';
        }
    }
?>
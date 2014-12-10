<?php
    if ( dynamic_sidebar( 'footer-first' ) ){
        /* IF NOT EMPTY */    
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget website-description">';
            echo '<h1>';
            echo '<a href="" title="LinuQ">LinuQ</a>';
            echo '</h1>';
            echo '<p>N’hésitez pas à nous contacter si vous avez des questions, <br>';
            echo 'commentaires ou propositions de présentations/projets!</p>';
            echo '</div>';
        }
    }
?>
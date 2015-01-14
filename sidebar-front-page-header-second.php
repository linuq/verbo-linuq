<?php
    if ( dynamic_sidebar( 'front-page-header-second' ) ){
        /* IF NOT EMPTY */    
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>Nos Activités</h3>';
            echo '<div class="textwidget">Nos activités se tiennent habituellement le samedi après-midi aux deux semaines suivant la programmation des loisirs de la Ville de Québec.</div>';
            echo '<div><a class="btn btn-primary" href="/activites">découvrez-les !</a></div>';
            echo '</div>';
        }
    }
?>
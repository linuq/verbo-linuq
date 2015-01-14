<?php
    if ( dynamic_sidebar( 'front-page-header-first' ) ){
        /* IF NOT EMPTY */
        
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>Qui Sommes Nous</h3>';
            echo '<div class="textwidget">LinuQ est une association qui a pour vocation de promouvoir et vulgariser les logiciels libres (« open source ») dans la ville de Québec</div>';
            echo '<div><a class="btn btn-primary" href="/qui-sommes-nous">en savoir plus</a></div>';
            echo '</div>';
        }
    }
?>
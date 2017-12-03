<?php 
/**
 * Generate breadcrumbs
 */

//TODO Translation ready strings
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    
    if( is_singular( 'mvp_projects' ) ) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo '<a href="/projects/">Projects</a>';
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo "Category: ";
        the_category(' &bull; ');
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_title();
    }
    elseif (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo "Category: ";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } 
    elseif (is_archive()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_archive_title();
    }
    elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo "Page: " . get_the_title();
    } 
    elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        $search_query = get_search_query();
        if ( ! empty( $search_query ) ) {
            echo '"<em>';
            echo $search_query;
            echo '</em>"';
        }
    }
}
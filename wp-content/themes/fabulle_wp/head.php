<title class="artiche-h1"><?php
    if ( is_search() ) :
      echo 'Résultats de recherche pour "'.get_search_query().'" | ';

    else :
      wp_title('|', true, 'right');
    endif;

    bloginfo('name');
  ?>
</title>
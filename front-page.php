<?php
get_header();
if ( have_posts(  ) ) :
    echo '<ul>';
    while ( have_posts(  ) ) : the_post();
        the_title( '<li>', '</li>' );
    endwhile;
    echo '</ul>';
else:   
    _e( 'sorry, no posts matched your criteria.', 'textdomain' ); 
endif;

rewind_posts();

while ( have_posts() ) : the_post(  );
    the_content();
endwhile;
get_sidebar();

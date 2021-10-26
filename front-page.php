<?php
get_header();
if ( have_posts(  ) ) :
    while ( have_posts(  ) ) : the_post();
        the_title( '<h2>', '</h2>' );
    endwhile;
else:   
    _e( 'sorry, no posts matched your criteria.', 'textdomain' ); 
endif;

rewind_posts();

while ( have_posts() ) : the_post(  );
    the_content();
endwhile;
get_sidebar();
get_footer();
?>
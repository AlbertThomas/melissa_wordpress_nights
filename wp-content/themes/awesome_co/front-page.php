<?php get_header(); ?>
    
    <div id="content">
	<?php 
	//THE LOOP.
	if( have_posts() ): 
		while( have_posts() ):
		the_post(); ?>
	
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
            
            

           
            <div class="entry-content">
                <?php
                //show full length content on single posts or pages, otherwise, show short content (excerpt)
                if( is_single() OR is_page()):
                 the_content(); 
                else:
                the_excerpt();
                endif;
             ?>
            </div>
       
        
		 </article><!-- end post -->
      <?php 
	  endwhile;
	  else: ?>

	  <h2>Sorry, no posts found</h2>

	  <?php endif; //END OF LOOP. ?>
	          
        
        <div id="nav-below" class="pagination"> 
        	<?php //TODO: Make pagination functional ?>
            <a href="/blog/page/2/" >&larr; View Older Posts</a> 
        </div><!-- end #nav-below --> 
        
    </div><!-- end content -->
    
<?php get_sidebar(); ?> 
<?php get_footer(); ?>  
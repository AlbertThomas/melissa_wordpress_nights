
<?php get_header(); ?>


	<main id="content">

		<?php 
			//make sure there are some posts to display
			if(have_posts() ):
				// loop through posts
				while( have_posts() ):
					the_post();
		 ?>
		<article id="post-1" class="post">
			<h2 class="entry-title"> <a href="/link to single post/"> <?php the_title(); ?> </a></h2>
			<div class="postmeta"> 
				<span class="author"> Posted by: Bob </span>
				<span class="date"> December 27, 2011 </span>
				<span class="num-comments"> one comment </span>
				<span class="categories"> <a href="/category/updates/" title="View all posts in Updates" rel="category tag">Updates</a> </span>
				<span class="tags">tag, tag2, tag3</span> 
			</div><!-- end postmeta -->

			<div class="entry-content">
				<p>A short portion of the post content. Etiam posuere adipiscing ante a euismod. Aliquam rutrum tempus ipsum a pulvinar. Cras arcu tellus, aliquam ac rutrum sit amet, consectetur et sapien. [...]</p>
			</div>
		</article>

	<?php endwhile; //have posts ?>
	<?php endif; //have posts ?>


	</main><!-- end #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
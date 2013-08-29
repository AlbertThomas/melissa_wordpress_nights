<aside id="sidebar"> 
		<section id="categories" class="widget">
			<h3 class="widget-title"> Categories </h3>
			<ul>
			<?php wp_list_categories(array(
					'title_li' => '',
					'show_count' => 1,
					'number' => 10,
					'orderby' => 'count',
					'order' => 'desc',

			)); ?>               
			</ul>
		</section>

		<section id="archives" class="widget">
			<h3 class="widget-title"> Archives </h3>
			<ul>
				<?php wp_get_archives( array(
					'type' => 'yearly',
				) )?>
			</ul>
		</section>

		<section id="tags" class="widget">
			<h3 class="widget-title"> Tags </h3>
			<ul>
				<?php wp_tag_cloud(array(
					'taxonomy' => 'post_tag',
					'title_li' => '',
					'show_count' => 1,
					'number' => 10,
					'orderby' => 'count',
					'order' => 'desc',

				)); ?>
			</ul>
		</section>

		<section id="meta" class="widget">
			<h3 class="widget-title"> Meta </h3>
			<ul>
				<?php  wp_register();//show admin link if logged in ?>
				<li><?php wp_loginout(''); ?></li>
			</ul>
		</section>
	</aside><!-- end #sidebar -->
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="conductor">
	
	<header>
		<p class='info'>Written on <?php the_time('M jS, Y') ?> , categorized under <b><?php the_category(', ') ?></b>.</p>
	</header> 


	<ul class="posts">

		<li class="post">
			<figure class="hover_select animate" style='display:none;'> 	
				<a class="kudos" href="#comments" >
					<div class="circle">
						<div class="filled">&nbsp;</div>
					</div>
					<p class="kcount"><?php comments_popup_link('0', '1', '%'); ?></p>
					<p cla  ss="identifier">Comment</p>
					<span class="extid hide"></span>
					<span class="permalink hide"><?php the_title(); ?></span>
				</a>
			</figure>
			<article>
				<h2>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><a class="anchor" href="<?php the_permalink() ?>">&#9875;</a>
				</h2>

				<?php the_content(); ?>
			<hr />
			<p><em>You have reached end of this post. You can follow my thoughts on <a href='http://twitter.com/ahmetalpbalkan' rel='nofollow'>Twitter</a>.</em></p>
			
			<a href="http://news.ycombinator.com/submit" class="hn-share-button" 
				data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">Vote on HN</a>

			<div class="fb-like" data-send="false" data-width="400" data-show-faces="false" data-font="arial"></div>
			</article>

		</li>
<?php endwhile; else: ?>
<?php endif; ?>
<?php comments_template(); ?>
		<li class="pagination padded">

			<nav class="pagination">
				<div class="buttonize square prev">
					<a href="<?php echo get_settings('home'); ?>">&#8592; Back to blog</a>
				</div>
			</nav>
		</li>
	</ul>


	</section>

<?php get_footer(); ?>
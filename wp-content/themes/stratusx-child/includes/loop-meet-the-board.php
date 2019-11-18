<?php
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'post',
	'category_name' => 'meet-the-board'
);

$the_query = new WP_Query( $args );

if( $the_query->have_posts() ): ?>

<h2 class="text-align-center">
	<?php esc_html_e('Meet the Board: Questions &amp; Answers'); ?>
</h2>
	
<ul class="board-flex">

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail( array(200,200) );
			} ?>
			<h6><?php esc_html_e('With '); the_field('doctor_name'); ?></h6>
		</a>
	</li>

	<?php endwhile; ?>

</ul>
	
<?php endif; ?>

<style>
	.board-flex {
		display: flex;
		padding: 0;
		list-style: none;
		justify-content: center;
		text-align: center;
		margin: 50px 0;
	}
	.board-flex img {
		max-width: 150px;
		border-radius: 1000px;
	}
	.text-align-center {
		text-align: center;
	}
</style>
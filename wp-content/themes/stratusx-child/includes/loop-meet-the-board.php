<?php
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'post',
	'category_name' => 'meet-the-board'
);

$the_query = new WP_Query( $args );

if( $the_query->have_posts() ): ?>

<h2>
	<?php esc_html_e('Meet the Board: Questions &amp; Answers'); ?>
</h2>
	
<ul class="board-flex">

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail( array(200,200) );
			} ?>
			<h3><?php esc_html_e('With '); the_field('doctor_name'); ?></h3>
		</a>
	</li>

	<?php endwhile; ?>

</ul>
	
<?php endif; ?>
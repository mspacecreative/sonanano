<style>
	.sonacast-container {
		margin: auto;
		display: flex;
		flex: 1;
		flex-wrap: wrap;
		flex-direction: row;
	}
	.sonacast-episode {
		flex-basis: 32%;
		margin-bottom: 2%;
		margin-right: 2%;
	}
	.sonacast-episode:nth-child(3n) {
		margin-right: 0;
	}
	.sonacast-episode iframe {
		width: 100%;
		display: block;
	}
	@media (max-width: 980px) {
		.sonacast-episode {
			flex-basis: 49%;
			margin-right: 2%;
		}
		.sonacast-episode:nth-child(3n) {
			margin-right: 2%;
		}
		.sonacast-episode:nth-child(2n) {
			margin-right: 0;
		}
	}
	@media (max-width: 450px) {
		.sonacast-episode {
			flex-basis: 100%;
		}
		.sonacast-episode {
			margin-right: 0;
		}
	}
</style>

<?php

// check if the repeater field has rows of data
if( have_rows('episodes') ): ?>

	<div class="sonacast-container">

 	<?php while ( have_rows('episodes') ) : the_row(); ?>

        <div class="sonacast-episode">
			<h3><span style="font-weight: bold;"><?php esc_html_e('Episode #'); ?><?php the_sub_field('episode_#'); ?></span> <?php the_sub_field('title'); ?></h3>
			<iframe src="https://anchor.fm/sonananotech/embed/episodes/<?php the_sub_field('episode'); ?>" height="102px" width="400px" frameborder="0" scrolling="no"></iframe>
		</div>

    <?php endwhile;

endif; ?>
<style>
	.sonacast-container {
		max-width: 1080px;
		margin: auto;
		display: flex;
		flex: 1;
		flex-wrap: wrap;
		flex-direction: row;
	}
	.sonacast-episode {
		flex-basis: 48%;
		margin-bottom: 4%;
	}
	.sonacast-episode:nth-child(odd) {
		margin-right: 4%;
	}
	.sonacast-episode iframe {
		width: 100%;
	}
	@media (max-width: 450px) {
		.sonacast-episode {
			flex-basis: 100%;
		}
		.sonacast-episode:nth-child(odd) {
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
			<iframe src="https://anchor.fm/sonananotech/embed/episodes/<?php the_field('episode'); ?>" height="102px" width="400px" frameborder="0" scrolling="no"></iframe>
		</div>

    <?php endwhile;

endif; ?>
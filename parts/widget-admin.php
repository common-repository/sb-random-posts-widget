<p>
	<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
		<?php esc_html_e('Title:', 'simple-random-posts'); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>"
		name="<?php echo esc_attr( $this->get_field_name('title') ); ?>"
		type="text" value="<?php echo esc_attr( $title ); ?>">
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id('post_type') ); ?>">
		<?php esc_html_e('Post Type:', 'simple-random-posts') ?></label>
	<select class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_type') ); ?>"
		name="<?php echo esc_attr( $this->get_field_name('post_type') ); ?>">

			<?php foreach ($post_types as $key => $item): ?>
				<option value="<?php echo esc_attr($key	) ?>" <?php selected( $post_type, $key ) ?>>
				<?php echo esc_html($item) ?></option>
			<?php endforeach ?>

	</select>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id('thumb_size') ); ?>">
		<?php esc_html_e('Thumbnail Size:', 'simple-random-posts') ?></label>
	<select class="widefat" id="<?php echo esc_attr( $this->get_field_id('thumb_size') ); ?>"
		name="<?php echo esc_attr( $this->get_field_name('thumb_size') ); ?>">

			<?php foreach ($thumbnail_sizes as $item): ?>
				<option value="<?php echo esc_attr($item	) ?>" <?php selected( $thumb_size, $item ) ?>>
				<?php echo esc_html($item) ?></option>
			<?php endforeach ?>

	</select>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id('numposts') ); ?>">
		<?php esc_html_e('Number of posts to show:', 'simple-random-posts') ?></label>
	<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id('numposts') ); ?>"
		name="<?php echo esc_attr( $this->get_field_name('numposts') ); ?>"
		type="number" step="1" min="1" value="<?php echo esc_attr( $numposts ) ?>" size="3">
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
		<?php esc_html_e('Layout:', 'simple-random-posts') ?></label>
	<select class="widefat" id="<?php echo esc_attr( $this->get_field_id('layout') ); ?>"
		name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>">

			<?php foreach ($layouts as $key => $item): ?>
				<option value="<?php echo esc_attr($key	) ?>" <?php selected( $layout, $key ) ?>>
				<?php echo esc_html($item) ?></option>
			<?php endforeach ?>

	</select>
</p>

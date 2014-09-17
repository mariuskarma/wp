<div class="wrap">
	<h2><?php _e('IgnitionDeck Extensions', 'idf'); ?></h2>
	<?php
	foreach ($data as $item) {
		$title = $item->title;
		$desc = $item->short_desc;
		$link = $item->link;
		$thumbnail = $item->thumbnail;
		$basename = $item->basename;
		$installed = false;
		$active = false;
		$text = __('Get Plugin', 'idf');
		$plugin_path = dirname(IDF_PATH).'/'.$basename.'/'.$basename.'.php';
		if (file_exists($plugin_path)) {
			$installed = true;
			$text = __('Activate', 'idf');
			$link = '';//admin_url('/plugins.php/?idf_activate_extension='.$basename);
			if (is_plugin_active($basename.'/'.$basename.'.php')) {
				$active = true;
				$text = __('Installed', 'idf');
			}
		}
		?>
		<div class="extension">
			<div class="extension-image" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
			<p class="extension-desc"><?php echo $desc; ?></p>
			<div class="extension-link">
				<button class="button <?php echo (!$active && !$installed ? 'button-primary' : 'active-installed'); ?>" <?php echo (!empty($link) ? 'onclick="location.href='.$link.'"' : ''); ?> <?php echo ($active ? 'disabled="disabled"' : ''); ?> data-extension="<?php echo $basename; ?>"><?php echo $text; ?></button>
			</div>
		</div>
	<?php } ?>
</div>
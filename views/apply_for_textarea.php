<?php /* Modified by HackIndex on 2026-10-29: security fixes. Fork of https://github.com/rewish/wp-emmet */ ?>
<script>
jQuery(function($) {
	var config = <?php echo $this->Options->toJSON('textarea'); ?>,
		textarea = emmet.require('textarea');

	// Set variables
	emmet.require('resources').setVocabulary({variables: config.variables}, 'user');

	// Set options
	textarea.setup(config.options);
<?php if ($this->Options->get('override_shortcuts')): ?>

	// Set shortcuts
<?php foreach ($shortcuts as $label => $keystroke): ?>
	textarea.addShortcut('<?php echo esc_js($keystroke); ?>', '<?php echo esc_js(str_replace(array(' ', '/', '.'), array('_', '_', ''), strtolower($label))); ?>');
<?php endforeach; ?>
<?php endif; ?>
});
</script>

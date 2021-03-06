<?php

use humhub\libs\Html;
use humhub\modules\rockethub\assets\Assets;

Assets::register($this);
?>

<?= Html::beginTag('div') ?>
<!-- Start of Rocket.Chat Livechat Script -->
<script type="text/javascript">
(function(w, d, s, u) {
	w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
	var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
	j.async = true; j.src = '<?= $rocketHub; ?>/rocketchat-livechat.min.js';
	h.parentNode.insertBefore(j, h);
})(window, document, 'script', '<?= $rocketHub; ?>');
</script>
<!-- End of Rocket.Chat Livechat Script -->
<?= Html::endTag('div'); ?>

<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="margin-top: 51px;">
	<div class="alert alert-success" style="margin-bottom: 0px !important" onclick="this.classList.add('hidden')"><?= $message ?></div>
</div>
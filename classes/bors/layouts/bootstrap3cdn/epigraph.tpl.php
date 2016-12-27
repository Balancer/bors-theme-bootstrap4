<?php

$w2 = round($size*12);
$w1 = 12-$w2;

echo <<< __EOT__
<div class="row" style="margin-bottom: 1ex">
	<div class="col-ms-{$w2} col-md-offset-{$w1}">
		{$content}
	</div>
</div>
__EOT__;

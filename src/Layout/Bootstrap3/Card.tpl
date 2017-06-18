<div class="col-xs-12 col-sm-6 col-lg-4">
	<figure class="thumbnail">
{if $image && !$image->is_null()}
		<a href="{$url}">
			<div class="flex-img-holder">
	{$image->thumbnail('200x150(up,crop)')->html()}
			</div>
		</a>
{/if}
		<figcaption class="caption">
			<div class="pre-title">
{$card_pre_title}
			</div>
			<h3><a href="{$url}">{$title}</h3>
			<p class="flex-text text-muted">{$snippet}</p>
			<p><a class="btn btn-primary btn-sm" href="{$url}">Подробнее »</a></p>
			</figcaption>
	</figure>
</div>

	<div class="flex-row row">
{foreach $items as $x}

		<div class="col-xs-12 col-sm-6 col-lg-4">
			<figure class="thumbnail">
	{if $x->get('image') && !$x->is_null()}
				<a href="{$x->url()}">
					<div class="flex-img-holder">
		{$x->image()->thumbnail('200x150(up,crop)')->html()}
					</div>
				</a>
	{/if}
				<figcaption class="caption">
					<div class="pre-title">
	{$x->get('card_pre_title')}
					</div>
					<h3>{$x->titled_link()}</h3>
					<p class="flex-text text-muted">{$x->get('snippet')}</p>
					<p><a class="btn btn-primary btn-sm" href="{$x->url()}">Подробнее »</a></p>
				</figcaption>
			</figure>
		</div>
{/foreach}

	</div>

<div class="container">
	<div class="flex-row row">
{foreach $items as $x}

		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
	{if $x->image() && !$x->is_null()}
				{$x->image()->thumbnail('320x240(up,crop)')->html()}
	{/if}
				<div class="caption">
					<h3>{$x->titled_link()}</h2>
					<p class="flex-text text-muted">{$x->snippet()}</p>
					<p><a class="btn btn-primary" href="{$x->url()}">Подробнее »»»</a></p>
				</div>
			</div>
		</div>
{/foreach}

	</div>
</div>

<div class="bors-flipster">
  <ul>
{foreach $items as $i}
{if $i->file_name()}
		<li style="max-width: 70%">
			<a href="{$i->www()}" target="_blank" class="thumbnail">
				<img src="{$i->thumbnail('800x480(up,crop)')->url()}" alt="{$i->title()}" style="width: 100%; height: auto;">
			</a>
		</li>
{/if}
{/foreach}
  </ul>
</div>

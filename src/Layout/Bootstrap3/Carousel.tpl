<div id="B2Carousel1" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
{foreach $items as $i}
		<li data-target="#B2Carousel1" data-slide-to="{$i@iteration}"{if $i@first} class="active"{/if}></li>
{/foreach}
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
{foreach $items as $i}
		<div class="item{if $i@first} active{/if}">
			<a href="{$i->www()}" target="_blank">
				<img src="{$i->thumbnail('800x480(up,crop)')->url()}" alt="{$i->title()}" style="width: 100%; height: auto; object-fit: cover; min-height: 480px;">
			</a>
		</div>
{/foreach}
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#B2Carousel1" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#B2Carousel1" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

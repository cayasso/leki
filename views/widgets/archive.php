<div id="archive" class="tabs-content">
		
    <ul>    
		{foreach $dates as $years}
        <li><a href="{$site_url}{$page}/$post->uri" title="{#__('link to')}: $post->title">{$years['year']}</a></li>    
		{/foreach}
    </ul>
	
</div><!-- /#archive -->
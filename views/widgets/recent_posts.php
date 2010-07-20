<div id="recent-posts" class="tabs-content">
		
    <ul style="margin-bottom: 15px">    
		{foreach $posts as $post}
        <li><a href="{$site_url}{$page}/{$post->uri}" title="{#__('link to')}: {$post->title}">{$post->title}</a></li>    
		{/foreach} 
    </ul>
	
</div><!-- /#recent-posts -->
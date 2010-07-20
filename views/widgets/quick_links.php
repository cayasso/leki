<div class="aside">
		
    <h5>{#__('Quick Links')}</h5>	
    <ul class="quick-links" style="margin-bottom: 15px">    
		{foreach $posts as $post}
        <li><a href="{$site_url}{#__('publications')}/{$post->uri}" title="{#__('link to')}: {$post->title}">{$post->title}</a></li>    
		{/foreach}    
    </ul>
	
</div><!-- /.aside -->
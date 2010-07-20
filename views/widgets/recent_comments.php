<div id="recent-comments" class="tabs-content">
		
    <ul>    
	{foreach $comments as $comment}          
        <li>
        {$comment->author} | {#date("d, F, Y", $comment->created)} 
		<br /><a href="{$site_url}{$comment->post->uri}#comment_{$comment->id}" title="{#__('link to')}: ">{#Text::limit_words(text::strip_html_tags($comment->message, $html_tags), 15, ' [...]')}</a>
        </li>
	{/foreach}
    </ul>
	
</div><!-- /#recent-comments-->
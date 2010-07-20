<div class="article">
    
    #widget::load('quick_links')
        
    {if $post}

        <div class="header">
            <h2><a href="{$current_url}" title="{#__('link to')}: {$post->title}">{$post->title}</a></h2>
            <span class="time">{#__('This publication was created')} {#__(Date::fuzzy_span(strtotime($post->created)))}</span>
            {if $post->author}<address class="vcard">{#__('Author')}: {$post->author}</address> {/if}
        </div>    
    
        <p>{$post->content}</p>
        
        <hr />
        <a class="get-more" title="{#__('Read more publications')}" href="{$base_url}{$page}">{#__('Read more publications')}</a>
        
		<div id="{$id}" class="section comments {$class}">        	
			<h2 class="hcomment"><span class="num">{$num_comments}</span> {#__('Comments for this post')}</h2>
		   
           	{set $counter = 1}
			{foreach $comments as $comment}
			 <div class="article">
             	<a name="comment_{$comment->id}"></a>
				<address>{if $comment->url}<a href="{$comment->url}">{$comment->author}</a>{else} {$comment->author} {/if}</address><br>
				<span class="time">{#__('This comment was created')} {#__(Date::fuzzy_span(strtotime($comment->created)))}</span><br><hr>
				<p>{$comment->message}</p>
                <span class="comment_bottom_bg"></span>
			 </div><!-- /.article -->
             
             {set $counter++}
			{/foreach}
		
		</div><!-- /.comments -->
        
		{$form}

        <hr class="clear" />
    
    {else}
    
        {foreach $posts as $post}

        <div class="header">
            <h2><a href="{$site_url}{$page}/{$post->uri}" title="{#__('link to')}: {$post->title}">{$post->title}</a></h2>
            <span class="time">{#__('This publication was created')} {#__(Date::fuzzy_span(strtotime($post->created)))}</span>
            {if $post->author}<address class="vcard">{#__('Author')}: {$post->author}</address>{/if}
        </div>    
        
        <p>	{#Text::limit_words(text::strip_html_tags($post->content, $html_tags), 50, ' [...]')} <em><br /><a href="{$site_url}{$page}/{$post->uri}" title="{#__('Read more')}">{#__('Read more')}</a></em> </p>
        
        <hr />
    
        {/foreach}
    

        {if $pagination}
         {$pagination}
         <hr class="clear" />
        {/if}
        
    {/if}

</div><!-- /.article -->
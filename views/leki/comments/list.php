<div class="box">
<h2>COMMENTS</h2>

{#Form::open()}
<table cellspacing="0" class="list-table" id="post-list">
					
	<thead>
		<tr>
			<th width="3%"><input class="check-all" type="checkbox" /></th>			
			<th><a href="#" title="Post">{#__('Comment')}</a></th>
			<th><a href="#" title="Post">{#__('Author')}</a></th>			
			<th><a href="#" title="Post">{#__('email')}</a></th>
			<th><a href="#" title="Modified">{#__('Created')}</a></th>			
			<th><a href="#" title="Status">{#__('Active')}</a></th>			
		</tr>
	</thead><!-- /thead -->
		
	<tbody>	
	{foreach $comments as $comment}
		<tr>
			<td><input type="checkbox" name="comments[status][{$comment->id}]" /></td>
			<td class="preview-trigger" style="width: 100%"><a class="little-preview" href="">{#Text::limit_words(text::strip_html_tags($comment->message, $html_tags), 150, ' [...]')}</a>
				<div class="actions close">
					<a href="{$base_url}cms/comments/edit/{$comment->id}" title="{#__('Edit this post')}">{#__('Edit')}</a>
					<a href="{$base_url}{$comment->post->page->uri}/{$comment->post->uri}/commen_{$comment->id}" title="{#__('View this post')}">{#__('View')}</a>
					<a href="{$base_url}cms/comments/delete/{$comment->id}" title="{#__('Delete this item')}">{#__('Delete')}</a>
				</div>
				
				<div class="preview-content box preview-close">{$comment->message}</div>
			</td>
			<td class="center">{if $comment->url}<a href="{$comment->url}" title="{#__('Visit: ')}{$comment->url}">{$comment->author}</a>{else}{$comment->author}{/if}</td>			
			<td class="center">{#HTML::mailto($comment->email, $comment->email)}</td>
			<td class="center">{#date('d/m/y', $comment->created)}</td>
			<td class="center">{if $comment->status == 1}{#__('Yes')}{else}{#__('No')}{/if}</td>									
		</tr>
	{/foreach}
	</tbody><!-- /tbody -->
	
	<tfoot>
		<tr>
			<td class="pagination" colspan="6">
				{$pagination}					
			</td>
		</tr>
	</tfoot><!-- /tfoot -->
	
</table>	

<p>{#Form::submit('publish', 'Publish')} {#Form::submit('unpublish', 'Un-Publish')} {#Form::submit('delete', 'Delete')}</p>

{#Form::close()}
</div>			
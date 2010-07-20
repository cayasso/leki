<h2>{#_('Post list')}</h2>

<div class="box">

	
	{#Form::open()}
	<table class="list-table" id="post-list">
		
		<thead>
			<tr>
				<th style="width: 5%"><input type="checkbox" /></th>
				<th style="width: 90%">{#__('Title')}</th>
				<th>Comments</th>
				<th>{#__('Created')}</th>			
				<th>{#__('Published')}</th>
			</tr>
		</thead><!-- /thead -->
		
		<tbody>	
		{foreach $posts as $post}
			<tr>
				<td><input type="checkbox" name="posts[status][{$post->id}]" /></td>						
				<td class="preview-trigger" style="width: 100%"><a class="little-preview" href="">{$post->title}</a>
					<div class="actions close">
						<a href="{$base_url}cms/posts/edit/{$post->id}" title="{#__('Edit this post')}">{#__('Edit')}</a>
						<a href="{$base_url}{$post->page->uri}/{$post->uri}" title="{#__('View this post')}">{#__('View')}</a>
						<a href="{$base_url}cms/posts/delete/{$post->id}" title="{#__('Delete this item')}">{#__('Delete')}</a>
					</div>
					
					<article class="preview-content box preview-close">{$post->content}</article>
				</td>			
				<td class="center">{set $comments = $post->comments->count()} {if $comments > 0 } <a class="comments-count" href="{$base_url}cms/comments/list/{$post->id}">{$comments}</a>{/if}</td>
				<td class="center"><time datetime="{$modified = date('d-m-y', $post->modified)}">{$modified}</time></td>
				<td class="center">{if $post->status == 1}{#__('Yes')}{else}{#__('No')}{/if}</td>				
			</tr>
		{/foreach}		
		</tbody><!-- /tbody -->
		
		<tfoot>
			<tr>
				<td class="pagination" colspan="5">
					{$pagination}					
				</td>
			</tr>
		</tfoot><!-- /tfoot -->
		
	</table>		
	<p>{#Form::submit('publish', 'Publish')} {#Form::submit('unpublish', 'Un-Publish')} {#Form::submit('delete', 'Delete')}</p>
	
	{#Form::close()}

</div><!-- /.box -->

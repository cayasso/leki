<div class="box">
<h2>Pages</h2>

<a class="create" href="{$base_url}cms/pages/create">{#__('NEW PAGE')}</a>

<table cellspacing="0" class="list-table" id="page-list">
					
	<thead>
		<tr>
			<th width="3%"><input type="checkbox" /></th>
			<th width="90%"><a href="#" title="{#__('Title')}">{#__('Title')}</a></th>
			<th><a href="#" title="{#__('Modified')}">{#__('Modified')}</a></th>
			<th><a href="#" title="{#__('Status')}">{#__('Published')}</a></th>			
		</tr>
	</thead><!-- /thead -->
		
	<tbody>	
	{foreach $pages as $page}
		<tr>
			<td><input type="checkbox"></input></td>
			<td class="preview-trigger"><a class="little-preview" href="#" title="{$page->title}">{$page->title}</a>
				<div class="actions close">
					<a href="{$base_url}cms/pages/edit/{$page->id}" title="{#__('Edit this page')}">{#__('Edit')}</a>					
					<a href="{$base_url}cms/pages/delete/{$page->id}" title="{#__('Delete this page')}">{#__('Delete')}</a>
				</div>
			</td>
			<td class="center"><time datetime="{$modified = date('d/m/y', $page->modified)}">{$modified}</time></td>
			<td class="center">{if $page->status == 1}{#__('Yes')}{else}{#__('No')}{/if}</td>									
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
<a href="">{#__('PUBLISH SELECTED')}</a><a href="">{#__('DELETE SELECTED')}</a>

</div>
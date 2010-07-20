
<p class="pagination">

	{if $first_page !== FALSE}	
		<a href="{$page->url($first_page)}"> &raquo; {#__('First')}</a>		
	{else}
		&laquo; {#__('First')}		
	{/if}
	
	{if $previous_page}		
		<a href="{$page->url($previous_page)}"> &laquo; {#__('Previous')}</a>		
	{else}		
		&laquo; {#__('Previous')}		
	{/if}

	{for $i from 1 to $total_pages}
		{if $i == $current_page}		
			<strong>[{$i}]</strong>			
		{else}			
			<a href="{$page->url($i)}"> {$i} </a>			
		{/if}
	{/for}

	{if $next_page !== FALSE}	
		<a href="{$page->url($next_page)}">{#__('Next')} &raquo;</a>		
	{else}	
		{#__('Next')} &raquo;		
	{/if}
	
	{if $last_page !== FALSE}	
		<a href="{$page->url($last_page)}">{#__('Last')} &raquo;</a>		
	{else}
		{#__('Last')} &raquo;		
	{/if}

</p><!-- /.pagination -->
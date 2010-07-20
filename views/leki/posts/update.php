
	<h2>{#__('Update')}</h2>
	
	<div class="box">
	
	<form id="form-post" method="post" action="{$current_url}">	

	    {$field->title}		
		{$field->content}		

		<p><a href="#">Post options</a></p>

		{$field->status}		
		{$field->language}
	
		
		
		{#Form::submit('submit', 'Submit')}	
	</form>
	
	</div><!-- /.box -->
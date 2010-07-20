<h2>Pages</h2>

<div class="grid_11">

<form id="form-page" method="post" action="{$current_url}">

    <p class="form-field">
	{$field->title}
	</p>
	
	<p class="form-field">
	{$field->uri}
	</p>
	
	<p class="form-field">
	{$field->status}
	</p>
	
	<p class="form-field">
	{$field->language}
	</p>
	
	<p class="form-field">
	{$field->menu_active}
	</p>
	
	<p class="form-field">
	{$field->menu_weight}
	</p>               

	<p>{#Form::submit('submit', 'Submit')}</p>
	
</form>

</div><!-- /.grid_11 -->
<div class="box">

<h2>Pages</h2>

<p><strong>{#__('Are you sure you want to delete this :name?',array(':name' => $name))}</strong> <span class="small">{#__('This is not reversible!')}</span></p>

{#Form::open()}
	{#form::submit('submit',__('Yes, delete it.'),array('class'=>'submit'))}
	<a href="{$base_url}cms/{$page}">{#__("No cancel")}</a>
{#Form::close()}

</div><!-- /.box -->
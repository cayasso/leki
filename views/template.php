<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang}" lang="{$lang}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="{$keywords}"/>
<meta name="description" content="{$description}"/>

<title>{$name}: {$title}</title>

<link rel="icon" href="{$base_url}media/imgs/icons/favicon.ico" type="image/x-icon" />

{$styles}

<script>

{ignore}
var site = {	
{/ignore}

base_url: 		'{$base_url}',
current_url: 	'{$current_url}',
page: 			'{$active_page}',
referrer_url: 	''	
{ignore}
}
{/ignore}

</script>



</head>
<body>

<div id="drawer">[ERROR MESSAGE]</div>

{$header}

<div class="nav">
  <ul>
    {foreach $navigation as $nav}
    <li {if $nav->uri == $active_page} class="current"{/if}><a href="{$base_url}{$nav->uri}" title="{#__('Section')} {$nav->title}">{$nav->title}</a></li>
    {/foreach}
  </ul>
</div><!-- /.nav -->

<div class="breadcrumb">
  <ul>
    <li class="home"><a href="{$site_url}{#__('home')}" title="{#__('Back to Home')}"></a></li>
    {$breadcrumbs}
  </ul>
</div><!-- /.breadcrumb -->

<div id="content-wrapper">
 
  <div id="content">
  	{$content}
    {$sidebar}
  </div><!-- /#content -->
  
</div><!-- /#content-wrapper -->

{$footer}
{$scripts}
</body>
</html>
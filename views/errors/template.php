<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang}" lang="{$lang}">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="{$keywords}"/>
<meta name="description" content="{$description}"/>

<title>{$title}</title>

<link rel="icon" href="{$media_url}imgs/icons/favicon.ico" type="image/x-icon" />


{$styles}

</head>
<body>

{$header}

<div class="nav">
  <ul>
    {foreach $navigation as $nav}
    <li {if $nav->uri == $active} class="current"{/if}><a href="{$site_url}{$nav->uri}" title="{#__('Section')} {$nav->title}">{$nav->title}</a></li>
    {/foreach}
  </ul>
</div><!-- /.nav -->

<div id="content-wrapper">

  	{$content}
  
</div><!-- /#content-wrapper -->

{$footer}

{$scripts}
</body>
</html>
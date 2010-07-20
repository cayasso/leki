<!DOCTYPE html>
<html class="no-js" lang="{$ll}" xmlns="http://www.w3.org/1999/xhtml">

<head>

<script>
{ignore}(function(h,c){ h[c]=h[c].replace(/\bno-js\b/, 'js')})(document.documentElement, 'className'){/ignore}
</script>

<!--[if lt IE 9]>
<script src="{#url::base()}media/js/html5.js"></script>
<![endif]-->

<meta charset="utf-8" />
<meta name="keywords" content="{$keywords}"/>
<meta name="description" content="{$description}"/>

<title>$title</title>
<link rel="icon" href="{#url::base()}media/imgs/icons/favicon.ico" type="image/x-icon" />

{$styles}

<script>
{ignore}
var site = {	
{/ignore}
base_url: 		'{$base_url}',
current_url: 	'{$current_url}',
page: 			'{$page}',
referrer_url: 	'{#Session::instance()->get("current_url")}'
{ignore}
}
{/ignore}
</script>

</head>

<body>

{$header}

<div id="content" class="container_16">
{$content}
</div>		

{$footer}
{$scripts}
</body>
</html>
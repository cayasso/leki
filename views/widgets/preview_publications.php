<div class="preview">

<h2 class="hh">{#__('Publications')}</h2>

{foreach $publications as $p}
	
    <h4><a href="{$site_url}{#__('publications')}/{$p->uri}" title="{#__('link to')}: {$p->title}">{$p->title}</a></h4>
    <span class="time">{#__('This publication was created')} {#__(Date::fuzzy_span(strtotime($p->created)))}</span>
	
    <p>{#Text::limit_words(text::strip_html_tags($p->content, $html_tags), 30, '   [...]')} <em><br /><a href="{$site_url}{#__('publications')}/{$p->uri}" title="{#__('Read more')}">{#__('Read more')}</a></em> </p>
	<hr />
{/foreach}
<a class="get-more" title="{#__('Read more publications')}" href="{$site_url}{#__('publications')}">{#__('Read more publications')}</a>
</div><!-- /.preview -->
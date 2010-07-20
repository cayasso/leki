<div class="article">

	<span id="message"></span>
    
	<div class="current-edition">

        <span class="side-img"> 
        <img src="{$media_url}imgs/revistas/titulares/{$current_magazine->image}" width="200"height="260" alt="{#__('Magazine Edition')} {$current_magazine->title}" title="{#__('Magazine Edition')} {$current_magazine->title}" />
        <a class="btn-download" href="{$base_url}files/pdf/{$current_magazine->file->path}{$current_magazine->file->name}" title="{#__('Download PDF')}">{#__('Download PDF')}</a>
        </span>

        <div class="edition-section">

            <h1>{#__('Edition')} {$current_magazine->title}</h1>
            <p>{$current_magazine->description}</p>         
            <h2>{#__('Content')}</h2>

            <ul class="quick-links">
            {foreach $sections as $index => $section}       
                {if $index < $section_divider}
                <li><a href="{$base_url}files/pdf/{$section['path']}{$section['name']}" title="{$section['title']}">{$section['title']}</a></li>
                {else}
            {if $index == $section_divider}
            </ul>

            <ul class="quick-links">
            {/if}
                <li><a href="{$base_url}files/pdf/{$section['path']}{$section['name']}" title="{$section['title']}">{$section['title']}</a></li>
                {/if}
            {/foreach}
            </ul>

            <a href="{$site_url}{#__('subscribe')}" title="{#__('Subscribe to magazine')}"><img style="float: right; border: none; margin-right: 20px" border="0" src="{$media_url}imgs/suscribase.png"></a>
        </div>

        <ul class="short-links">
            <li><span>{#__('Previous Editions')}</span></li>
            
            {foreach $magazines as $magazine}
            <li><a href="{$site_url}{#__('magazine')}/{$magazine->edition}" title="{#__('Magazine Edition')} {$magazine->title}">{$magazine->title}</a></li>
            {/foreach}
        
            <li><a href="{$site_url}{#__('magazine')}" title="{#__('More editions')}">{#__('More editions')}</a></li>
                
        </ul>

	</div><!-- /#current-edition -->
    
    {#widget::load('preview_publications')}
    
    {#widget::load('google_calendar')}

	<hr class="clear" />
</div><!-- /.article -->


<div class="overlay">
	<a class="prev">Anterior</a>
	<a class="next">Siguiente</a>
	<div class="info"></div>
	<img class="progress" src="{$media_url}imgs/icons/loading.gif" />
</div>

<div class="aside">

	<div class="widget">
    
        <div id="widget-aside-tabs">
            
            <ul class="tabs">
                <li><a href="#recent-posts" title="Recientes">{#__('Recents')}</a></li>
                <li><a href="#recent-comments" title="Commentarios">{#__('Comments')}</a></li>
                <li><a href="#archive" title="Archivos">{#__('Archive')}</a></li>
            </ul>
            
            {#widget::load('recent_comments')}
        
            {#widget::load('recent_posts')}
            
            {#widget::load('archive')}
                        
        </div><!-- /#widget-aside-tabs -->
        
 	</div><!-- /.widget -->
    
    <div class="widget">
    {#widget::load('tag_cloud')}
    </div><!-- /.widget -->
    
</div><!-- /.aside -->
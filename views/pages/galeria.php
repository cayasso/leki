<div class="article">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
    
    {$entry->content}
    
    <div id="gallery" style="margin: auto; width: 660px; padding: 5px 0; text-align: center;">        
    	<div id="wall">

		</div>
   	</div><!-- /#gallery -->

    <hr class="clear">
    
</div><!-- /.article -->

{ignore}
<script>
var flashvars = {
    feed: "http://www.infoganaderocentroamericano.com/media/imgs/galleries/gallery_1/gallery_1.rss",
	style: 'light',
	numRows: 2
};
var params = {
    allowscriptaccess: "always"
};

swfobject.embedSWF("http://apps.cooliris.com/embed/cooliris.swf","wall", "650", "350", "9.0.0", "", flashvars, params);
</script>
{/ignore}
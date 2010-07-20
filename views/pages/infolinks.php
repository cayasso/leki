{ignore}
<style>

/* root element for tabs  */
.tabs {  
	padding:0;
	margin: 0;
	height:25px;
	border-bottom:2px solid #0F8075;	 	
}

/* single tab */
.tabs li {  
	float:left;	 
	padding:0; 
	margin:0;  
	list-style-type:none;
}

/* link inside the tab. uses a background image */
.tabs a { 
	float:left;
	display:block;
	padding:0 15px;	
	text-decoration:none;
	height:20px;
	background-color:#CAE4DC;
	color: #0F8075;
	margin: 0 5px 0 0; 
	position:relative;
	top:2px;
	border-bottom:0;
}

.tabs-wrap a.tab-toggle-button {
display:block;
text-align:right;
width:99%;
}
.pane img.logo {
float:left;
margin:10px 10px 10px 0;
}
.pane h4 {
border-bottom:1px solid #0F8075;
}

.tabs a:hover {
	background-color:#555555;
	color:#FFF;
}
	
/* selected tab */
.tabs a.current {	
	cursor:default;
	border-bottom: 2px solid #0F8075;
	background-color:#0F8075;
	height:20px;
	color: #FFF;
	top:2px;
	padding-top: 2px;
}

.tabs-wrap {
	width: 430px;
	padding: 10px;
	background-color: #F4F4F4;
	margin-bottom: 15px;
	font-size: 93%;
}
	
/* tab pane */
.tabs-wrap .pane {
	border:1px solid #0F8075;
	border-width:0 2px 2px 2px;
	min-height:150px;
	padding:0 10px;
	background-color:#FFF;
	padding-top: 5px;
	overflow: hidden;
	padding-bottom: 20px;
}

/* the root element for scrollable */ 
.tabs-wrap { 
    overflow:hidden; 
    position:relative; 
} 
 
</style>
{/ignore}
<div class="article">

	<span id="message"></span>
    
    <div class="aside">
        <h5>{#__('Sponsor list')}</h5>
        <ul class="quick-links">
            {foreach $sponsors as $s}
            <li><a href="{$site}infolinks#sponsor-{$s->id}">{$s->name}</a></li>  
            {/foreach}
        </ul>       
    </div><!-- /.aside -->
      
    <h2>{$entry->title}</h2>
	{$entry->content}

    
    {foreach $sponsors as $s}
    <div id="tab{$s->id}" class="tabs-wrap">   
    
    	<h3 id="sponsor-{$s->id}">
        {if $s->website}
        	<a rel="external" href="{$s->website}">{$s->name}</a>
        {else}
        	{$s->name}
        {/if}
        </h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
    	<ul class="tabs">
            <li><a href="{$site}infolinks#tabs{$s->id}-1">{#__('About Us')}</a></li>            
            <li><a href="{$site}infolinks#tabs{$s->id}-2">{#__('Advertizement')}</a></li>
        </ul>
        
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            
            
            <h4>{#__('About us')}</h4>
            <img alt="{$s->image->alt}" title="{$s->image->alt}" class="logo" src="{$media_url}imgs/{$s->image->path}{$s->image->name}">
            <p>{$s->description}</p>
            
            <h4>{#__('Contact Us')}</h4>
            <p>
                {if $s->show_email && $s->email}
                <span class="ico_email"><strong>{#__('Email')}:</strong> {$s->email}</span>
                {/if}
                
                {if $s->show_url && $s->website}
                <span class="ico_page_link"><strong>{#__('Website')}:</strong> <a rel="external" href="{$s->website}">{$s->website}</a></span>
                {/if}

                {if $s->show_phone && $s->phone}
                <span class="ico_phone"><strong>{#__('Phone')}:</strong> {$s->phone}</span>
                {/if}      
            </p>
            
            
            
        </div><!-- /.pane -->
        
        <div id="tabs{$s->id}-2" class="pane">
            <h4>{#__('Advertizement')}</h4>
            <p>{$s->services}</p>
        </div><!-- /.tabs{$s->id}-2 -->
        
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
   {/foreach}


</div><!-- /.article -->

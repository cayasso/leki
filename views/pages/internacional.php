{ignore}
<style>

.tabs-wrap a.tab-toggle-button {
	display:block;
	text-align:right;
	width:99%;
}

.pane h4 {
	border-bottom:1px solid #0F8075;
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
	border:2px solid #0F8075;
	min-height:150px;
	padding:0 10px;
	background-color:#FFF;
	padding-top: 5px;
	overflow: hidden;
	padding-bottom: 20px;
}

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
      
    <h2>Representantes Internacionales</h2>
	{$entry->content}
    
    <div id="tab1" class="tabs-wrap">   
    
    	<h3 id="sponsor-{$s->id}">México</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
       
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
    
    <div id="mexico" class="tabs-wrap">   
    
    	<h3>México</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
       
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
    <div id="tab2" class="tabs-wrap">   
    
    	<h3 id="guatemala">Guatemala</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
       
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
    <div id="guatemala" class="tabs-wrap"> 
    
    	<h3>Guatemala</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
       
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
    <div id="tab2" class="tabs-wrap">   
    
    	<h3 id="honduras">honduras</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
        
       
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    
    <div id="tab2" class="tabs-wrap">   
    
    	<h3 id="sponsor-{$s->id}">México</h3>
    
    	<a class="tab-toggle-button">{#__('Close')}</a>
  		<a class="tab-toggle-button" style="display: none">{#__('Open')}</a>
               
      	<div class="panes">
        <div id="tabs{$s->id}-1" class="pane">     
            <h4>Información</h4>
          	<p><span class="ico_email"><strong>Contacto:</strong> Señor Andrés Pérez</span>
            <span class="ico_email"><strong>Correo electrónico:</strong> aperez@innomap.net</span>
            <span class="ico_phone"><strong>Teléfono:</strong> (809) 6835639</span>
            <span class="ico_phone"><strong>Celular:</strong> (809) 8809640</span>
            <span class="ico_phone"><strong>Companía:</strong> CALOX REPUBLICA DOMINICANA</span></p>        
        </div>
        </div>
          
 	</div><!-- /#tabs-wrap -->
    

</div><!-- /.article -->
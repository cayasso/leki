<div class="header">
  <h1><a href="{$site_url}" title="{$logo_title}"><span>{$logo_title}</span></a></h1>
  
  <span class="top-links">
    <strong>{#__('Welcome')}, {if $user}{$user->name}{else}{#__('visiter')}{/if}</strong> | <a href="{$site_url}{#__('who-we-are')}" title="{#__('Who we are')}">{#__('Who we are')}</a> | <a href="{$site_url}{#__('contactus')}" title="{#__('Contact Us')}">{#__('Contact Us')}</a>
	{if $logged_in} | 
    <!-- <a href="#{$site_url}" title="{#__('My account')}">{#__('My account')}</a> | --> 
    <a href="{$site_url}auth/logout" title="{#__('Logout')}">{#__('Logout')}</a>
    {else} | 
    <a href="{$site_url}auth/login" title="{#__('Login')}">{#__('Login')}</a>
    {/if}
  </span>
  
  <ul class="flags">
    <li><a id="fl_mx" href="{$site_url}#" title="México">México</a></li>
    <li><a id="fl_gt" href="{$site_url}#" title="Guatemala">Guatemala</a></li>
    <li><a id="fl_hd" href="{$site_url}#" title="Honduras">Honduras</a></li>
    <li><a id="fl_sv" href="{$site_url}#" title="El Salvador">El Salvador</a></li>
    <li><a id="fl_ni" href="{$site_url}#" title="Nicaragua">Nicaragua</a></li>
    <li><a id="fl_cr" href="{$site_url}#" title="Costa Rica">Costa Rica</a></li>
    <li><a id="fl_pa" href="{$site_url}#" title="Panamá">Panamá</a></li>
    <li><a id="fl_rd" href="{$site_url}#" title="República Dominicana"></a></li>
  </ul>
</div><!-- /.header -->


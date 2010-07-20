<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>

<div id="auth">

<div class="wrap">
<div class="auth-content">

<form id="login-form" method="post" action="{$current_url}">

	<input type="hidden" value="{$token}" name="token"/>    
    
    <fieldset>
		<h2>Log In</h2><br />     
		<div>
        <label for="username" >{#__('Username')}</label>                
        <input {if $err_username}class="error"{/if} type="text" id="username" name="username" value="{$data['username']}" />
        <em>{$err_username}</em>        
        </div>
		
		<div>
        <label for="password" >{#__('Password')}</label>               
        <input {if $err_password}class="error"{/if} type="password" id="password" name="password" value="" />       
        <em>{$err_password}</em>  
        </div>	
		
   	</fieldset>

   	<div class="btn-send">
    <input type="image" id="submit" name="submit" class="btn-login" src="{$media_url}imgs/btn_login.png" value="{#__('send')}"/>
    </div>
    
    <p><a href="{$base_url}auth/recover-pwd">{#__('Forgot your password?')}</a></p>

</form>

<div class="aside">
<h2>{#__('New User')}</h2>
<p>{#__('If you are not a user yet, please click the link bellow to register.')}</p>
<a title="{#__('Go to registration page')}" class="btn-register" href="{$site_url}{#__('subscribe')}">{#__('Contact Us')}</a>
</div><!-- /.aside -->

</div><!-- /.auth-content -->
</div><!-- /.wrap -->
<br />
<a href="{#Session::instance()->get('current_url')}" title="{#__('Get back to the site')}">{#__('Get back to the site')}</a>
</div><!-- /#auth -->
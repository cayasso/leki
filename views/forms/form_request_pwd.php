<div id="auth">
{if $message}<div class="message">{$message}</div><br />{/if}
<div class="wrap">
<div class="auth-content">

<form id="recover-pwd-form" method="post" action="{$current_url}">

    <fieldset>
    
    	<h2>{#__('Recover password')}</h2><br /> 
        
        <div>
        <label for="email" >{#__('Email')}</label>                
        <input {if $errors['email']}class="error"{/if} type="text" id="email" name="email" value="{$data['email']}" />
        <em>{$errors['email']}</em>       
        </div>
              
    </fieldset>
    
    <div class="btn-send">
    <input type="image" id="submit" name="submit" class="btn-send" src="{$media_url}imgs/btn_enviar.png" value="{#__('send')}"/>
    </div>
    <p><a href="{$base_url}auth/login">{#__('Back to login form')}</a></p>
    <br />
    
</form>
</div><!-- /.auth-content -->
</div><!-- /.wrap -->

<br />
<a href="{#Session::instance()->get('current_url')}" title="{#__('Get back to the site')}">{#__('Get back to the site')}</a>
</div><!-- /#auth -->
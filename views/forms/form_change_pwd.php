<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>

<div id="auth">

<div class="wrap">
<div class="auth-content">

<form id="change-pwd-form" method="post" action="{$current_url}">

    <fieldset>
    
    <h2>{#__('Password reset')}</h2><br /> 
    
    <div>
    <label for="password" >{#__('New password')}<em>*</em></label>               
    <input class="{if $err_password}error{/if}" type="password" id="password" name="password" value="{$data['password']}" />        
    <em class="err_detail">{$err_password}</em>
    </div>
    
    <div>
    <label for="password_confirm" >{#__('Confirm password')}<em>*</em></label>                
    <input class="{if $err_password_confirm}error{/if}" type="password" id="password_confirm" name="password_confirm" value="{$data['password_confirm']}" />        
    <em class="err_detail">{$err_password_confirm}</em>
    </div>

    </fieldset>
    
    <div class="btn-send">
    <input type="image" id="submit" name="submit" class="btn-send" src="{$media_url}imgs/btn_enviar.png" value="{#__('send')}"/>
    </div>
        
    <br />
    
</form>
</div><!-- /.auth-content -->
</div><!-- /.wrap -->

<br />
<a href="{#Session::instance()->get('current_url')}" title="{#__('Get back to the site')}">{#__('Get back to the site')}</a>
</div><!-- /#auth -->
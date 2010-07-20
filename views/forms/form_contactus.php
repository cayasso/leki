<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>
<form id="contact-form" method="post" action="{$current_url}">
	
    <input type="hidden" value="{$token}" name="token"/>    
    
    <fieldset>
        <legend>{#__('Send your comments')}</legend>
        
        <div class="req"><span>{#__('Required fields')}<em>*</em></span></div>
        
        <div>
        <label for="name" >{#__('Name')}<em>*</em></label> 
        <input class="{if $err_name}error{/if}" type="text" id="name" name="name" value="{$data['name']}" />
        <em>{$err_name}</em>
        </div>
            
        <div>
        <label for="email" >{#__('Email')}<em>*</em></label>                
        <input class="{if $err_email}error{/if}" type="text" id="email" name="email" value="{$data['email']}" />
        <em>{$err_email}</em>      
        </div>
        
        <div>
        <label for="subject" >{#__('Subject')}<em>*</em></label> 
        <input class="{if $err_subject}error{/if}" type="text" id="subject" name="subject" value="{$data['subject']}" />
        <em>{$err_subject}</em>
        </div>
              
        <div>
        <label for="message" >{#__('Message')}<em>*</em></label>        
        <textarea class="{if $err_message}error{/if}" id="message" name="message" >{$data['message']}</textarea>
        <em>{$err_message}</em>
        </div>
        
        <div class="btn-send">
        <input type="image" id="submit" name="submit" class="btn-send" src="{$media_url}imgs/btn_enviar.png" value="{#__('send')}"/>
        </div><br />                   
    </fieldset>
    
</form>

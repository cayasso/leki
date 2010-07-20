<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>

<form id="comment_form" method="post" action="{$current_url}">

    <input type="hidden" value="{$token}" name="token"/>  
    
    <fieldset>
    
        <legend>{#__('Send a comment')}</legend>
        
        <div>
        $data->label('author')<em>*</em>               
        <input class="{if $err_author}error{/if}" type="text" id="author" name="author" value="{$data->author}" />        
		{if $err_author}<em>{$err_author}</em><br />{/if}
        </div>
        
         <div>
        $data->label('email')<em>*</em>               
        <input class="{if $err_email}error{/if}" type="text" id="email" name="email" value="{$data->email}" />
		{if $err_email}<em>{$err_email}</em><br />{/if}
        </div>
        
        <div>
        $data->label('url')    
        <input class="{if $err_url}error{/if}" type="text" id="url" name="url" value="{$data->url}" />  
		{if $err_url}<em>{$err_url}</em><br />{/if}     
        </div>
                           
        <div>
        $data->label('message')<em>*</em>       
        <textarea class="{if $err_message}error{/if}" id="message" name="message" >{$data->message}</textarea>
		{if $err_message}<em>{$err_message}</em><br />{/if}     
        </div>
        
        {$captcha}
        
        <div class="btn-send">
        <input type="image" id="submit" name="submit" class="btn-send" src="{$media_url}imgs/btn_enviar_comentario.png" value="{#__('Send')}"/>
        </div><br />  
   
   </fieldset>
     
</form>
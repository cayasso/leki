<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>
<form id="subscribe-form" method="post" action="{$current_url}">

	<input type="hidden" value="{$token}" name="token"/>    
    
    <fieldset>
        <legend>{#__('Subscribe to our magazine')}</legend>
        
        <div class="req"><span>{#__('Required fields')}<em>*</em></span></div>
        
        <div>
        <label for="name" >{#__('Name')}<em>*</em></label>        
        <input class="{if $err_name}error{/if}" type="text" id="name" name="name" value="{$data['name']}" />        
        <em class="err_detail">{$err_name}</em>
		</div>
        
        <div>
        <label for="email" >{#__('Email')}<em>*</em></label>        
        <input class="{if $err_email}error{/if}" type="text" id="email" name="email" value="{$data['email']}" />        
        <em class="err_detail">{$err_email}</em>
		</div>
		
		<div>
        <label for="password" >{#__('Password')}<em>*</em></label>               
        <input class="{if $err_password}error{/if}" type="password" id="password" name="password" value="{$data['password']}" />        
        <em class="err_detail">{$err_password}</em>
		</div>
		
		<div>
        <label for="password_confirm" >{#__('Confirm password')}<em>*</em></label>                
        <input class="{if $err_password_confirm}error{/if}" type="password" id="password_confirm" name="password_confirm" value="{$data['password_confirm']}" />        
        <em class="err_detail">{$err_password_confirm}</em>
		</div>
        <div class="check-box">
        <label for="services[]" >{#__('Subscribe to service')}</label>        
        {foreach $services as $service}
        <input id="services" type="checkbox" {if $data['services']} checked="checked" {/if} name="services[0]" value="{$service->name}" />{$service->description}<br />
        {/foreach}
        </div>
    </fieldset>    
    
   	<fieldset class="services">
        <div class="short">
        <label for="phone">{#__('Phone')}<em>*</em></label>        
        <input class="{if $err_phone}error{/if}" type="text" id="phone" name="phone" value="{$data['phone']}" />        
        <em class="err_detail">{$err_phone}</em>
		</div>
        
        <div class="short">
        <label for="mobile">{#__('Mobile')}</label>        
        <input class="{if $err_mobile}error{/if}" type="text" id="mobile" name="mobile" value="{$data['mobile']}" />        
        <em class="err_detail">{$err_mobile}</em>
		</div>
        
        <div class="short">
        <label for="fax">{#__('Fax')}</label>        
        <input class="{if $err_fax}error{/if}" type="text" id="fax" name="fax" value="{$data['fax']}" />        
        <em class="err_detail">{$err_fax}</em>
		</div>

		<div>
        <label for="address">{#__('Address')}<em>*</em></label>        
        <input class="{if $err_address}error{/if}" type="text" id="address" name="address" value="{$data['address']}" />         
        <em class="err_detail">{$err_address}</em>
		</div>
        	
        <div class="short">
        <label for="city">{#__('City')}<em>*</em></label>            
        <input class="{if $err_city}error{/if}" type="text" id="city" name="city" value="{$data['city']}" />        
        <em class="err_detail">{$err_city}</em>
		</div>
        
        <div class="short">
        <label for="province">{#__('State/Province')}<em>*</em></label>              
        <input class="{if $err_province}error{/if}" type="text" id="province" name="province" value="{$data['province']}" />   
        <em class="err_detail">{$err_province}</em>       
        </div>
        
        <div class="short">
        <label for="postal_code" >{#__('Postal code')}</label>        
        <input type="text" id="postal_code" name="postal_code" value="{$data['postal_code']}" />
        <em class="err_detail">{$err_postal_code}</em>       
        </div>
     
	 	<div class="subs-select-box">       
        <label for="country" >{#__('Country')}<em>*</em></label>        
        {#widget::load('country_select', array('option' => $data['country']))}
        <em class="err_detail">{$err_country}</em>
        </div>

        <div>
        <label for="company" >{#__('Company')}</label>               
        <input class="{if $err_company}error{/if}" type="text" id="company" name="company" value="{$data['company']}" />   
        <em class="err_detail">{$err_company}</em>     
        </div>
               
        <div>
        <label for="message" >{#__('Comment')}</label>        
        <textarea class="{if $err_message}error{/if}" id="message" name="message" >{$data['message']}</textarea>
        <em class="err_detail">{$err_message}</em>
        </div>
   	</fieldset>
           
   <div class="btn-send">
    <input type="image" id="submit" name="submit" class="btn-send" src="{$media_url}imgs/btn_enviar.png" value="{#__('send')}"/>
    </div><br />                   

</form>
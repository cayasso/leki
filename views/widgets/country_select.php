<select name="country" id="country" class="{if $err_country}error{/if}">
	<option value="">--- {#__('Select your country')} ---</option>
    {foreach $countries as $country}
    <option {if $option == $country}selected="selected"{/if} value="{$country}">{$country}</option>
    {/foreach}
</select>
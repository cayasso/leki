
<h2>{#__('Good news! you have a new subscriptor to the :service', array(':service' => $subscribed_service))}</h2>

<p>
<strong>{#__('Name')}:</strong> {$name}<br />
<strong>{#__('Email')}:</strong> {$email}<br />

{if $subscribe}
<strong>{#__('Phone')}:</strong> {$phone}<br />
<strong>{#__('Mobile')}:</strong> {$mobile}<br />
<strong>{#__('Fax')}:</strong> {$fax}<br />
<strong>{#__('Address')}:</strong> {$address}<br />
<strong>{#__('City')}:</strong> {$city}<br />
<strong>{#__('State/Province')}:</strong> {$province}<br />
<strong>{#__('Postal code')}:</strong> {$postal_code}<br />
<strong>{#__('Country')}:</strong> {$country}<br />
<strong>{#__('Company')}:</strong> {$company}<br />
<strong>{#__('Message')}:</strong> {$message}<br />
{/if}
</p>

<p>
<strong>{#__('Date/Time')}:</strong> {$date}<br />
<strong>{#__('Form url')}:</strong> {#HTML::anchor($form_url)}<br />
</p>
---------------------------------------------------------------------------
<p><strong>{#__('THIS IS AN AUTOMATIC GENERATED MESSAGE, PLEASE DO NOT REPLY')}</strong></p>
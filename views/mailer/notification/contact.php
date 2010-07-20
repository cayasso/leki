<h2>{#__('New contact message from: :email', array(':email' => $email))}</h2>

<p><strong>{#__('Name')}:</strong> {$name}</p>

<p><strong>{#__('Email')}:</strong> {$email}</p>

<p><strong>{#__('Subject')}:</strong> {$subject}</p>

<p><strong>{#__('Message')}:</strong> {$message}</p>

<p><strong>{#__('Date/Time')}:</strong> {$date}</p>

<p><strong>{#__('Form url')}:</strong> {#HTML::anchor($form_url)}</p>

---------------------------------------------------------------------------
<p><strong>{#__('THIS IS AN AUTOMATIC GENERATED MESSAGE, PLEASE DO NOT REPLY')}</strong></p>
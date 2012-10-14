<?php
$xml='
<?xml version=“1.0”?>
<methodCall>
  <methodName>Greetings</methodName>
    <params>
      <param>
        <value>How is it going?</value>
      </param>
    </params>
</methodCall>';
$xml = htmlspecialchars($xml);
?>

<form method='post' action='http://localhost/ciapp/backend/xmlrpc_client'>
<input type='text' name='xml' value='<?php echo $xml;?>'>
<input type='submit' name='submit' value='submit'>
<form>
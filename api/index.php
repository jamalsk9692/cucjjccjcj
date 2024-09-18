
<?php

$client = new Client();

$response = $client->request('POST', 'https://mob2.temp-mail.org/mailbox');

echo $response->getBody();

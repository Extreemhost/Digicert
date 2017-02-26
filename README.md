## Digicert API Client


## Requirements ##
To use the Digicert API client, the following things are required:

+ Access to digicert API 
+ PHP >= 5.5
+ PHP cURL extension

## Getting started ##

```php

	require_once('class.digicert.php');

	$client = new DigiCert('[Account]:[API AUTH]');
	$request = array(
		'server_type'	=> 2,
		'csr'		=> ''
	);
	$client->_call('/111222', $request);
```

## API documentation ##

Please visit the [Digicert API Documentation](https://www.digicert.com/clients/rest/docs/retail).
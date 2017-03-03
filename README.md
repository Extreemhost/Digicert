## Digicert API Client
[![Code Climate](https://codeclimate.com/github/Extreemhost/Digicert/badges/gpa.svg)](https://codeclimate.com/github/Extreemhost/Digicert)

## Requirements ##
To use the Digicert API client, the following things are required:

+ Access to digicert API 
+ PHP >= 5.5
+ PHP cURL extension

## Getting started ##

```php

	require 'vendor/autoload.php';

	$client = new DigiCert\DigiCert('[Account]:[API AUTH]');
	$request = array(
		'server_type'	=> 2,
		'csr'		=> ''
	);
	$client->CurlConnection('/111222', $request);
```

## API documentation ##

Please visit the [Digicert API Documentation](https://www.digicert.com/clients/rest/docs/retail).
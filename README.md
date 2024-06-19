## Introduction

Here is the PHP implementation of the Atom Apis which can be found in Atom API documentation - https://www.atom.com/api-docs/index.php

## Installation

This library supports PHP 5.6 and later

The recommended way to install atom-php is through Composer:

```
composer require atom-api/atom-php
```

## Clients

Initialize your object using your auth token and user_id:

```
$aa = new AtomApi('<auth_token>', '<user_id>');
```

Incase if you are want to create the client object with the environment as the third variable, default is production.

```
$aa = new AtomApi('<auth_token>', '<user_id>', 'dev');
```

Auth token for the sandbox and production are different, you should be able to find them from your API Access page in Atom Dashboard.


## Seller Apis

#### Get Domains

```
$params = array("type" => "premium"); //  default is empty array
$domains = $aa->getDomains($params);
```

Default values of the params are empty and more information can be found in the documentation - https://www.atom.com/api-docs/index.php

For any queries / questions reach out to ramu@atom.com




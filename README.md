# Hürriyet Public Api
[![Latest Stable Version](https://poser.pugx.org/barisesen/hurriyet/v/stable)](https://packagist.org/packages/barisesen/hurriyet)
[![Total Downloads](https://poser.pugx.org/barisesen/hurriyet/downloads)](https://packagist.org/packages/barisesen/hurriyet)
[![Latest Unstable Version](https://poser.pugx.org/barisesen/hurriyet/v/unstable)](https://packagist.org/packages/barisesen/hurriyet)
[![License](https://poser.pugx.org/barisesen/hurriyet/license)](https://packagist.org/packages/barisesen/hurriyet)

Hürriyet Api client for Php

## Installation
Composer json file:
```json
{
    "require": {
        "barisesen/hurriyet": "^1"
    }
}
```
After run the install command.
```
$ composer install
```

OR run the following command directly.

```
$ composer require barisesen/hurriyet
```

## Examples

[Hurriyet API Client Example](https://github.com/barisesen/Hurriyet-Php-Api-Client/tree/master/Examples)

## Usage

The following gateways are provided by this documentation:

 * [Hürriyet](https://developers.hurriyet.com.tr/docs/versions/1.0)

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Esen\Hurriyet;

// create a new client instance
$hurriyet = new Hurriyet('your-hurriyet-api-token');

// Filtered article list
$arr = [
    'select' => 'Title,Id',
    'top'  => '10'
];
$data = $hurriyet->get('articles', $arr);

// List id = 40530799 Article 
$arr = [
    'id' => '40530799'
];
$data = $hurriyet->get('articles', $arr);
var_dump($data);
```

## Licence
The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Contributing

1. Fork it ( https://github.com/barisesen/Hurriyet-Php-Api-Client )
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -am 'Add some feature')
4. Push to the branch (git push origin my-new-feature)
5. Create a new Pull Request

## Contributors

- [barisesen](https://github.com/barisesen) [barisesen.com](https://barisesen.com) Barış Esen - creator, maintainer

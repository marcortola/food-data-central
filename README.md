# Community API client for the Food Data Central USDA nutrient database

[![Latest Version](https://img.shields.io/github/release/marcortola/food-data-central.svg?style=flat-square)](https://github.com/marcortola/food-data-central/releases)
[![Build Status](https://img.shields.io/travis/marcortola/food-data-central.svg?style=flat-square)](https://travis-ci.org/marcortola/food-data-central)

Installation
------------

1. [Install Composer](https://getcomposer.org/download/)
2. Execute:

```
$ composer require marcortola/food-data-central
```

Usage
------------
```php
$foodDataCentralClient = FoodDataCentralClient::create('your_api_key');

// Find food by FDC ID.
$foodItem = $foodDataCentralClient->food()->food(781125);
```
Read the Food Data Central API documentation [here](https://fdc.nal.usda.gov/api-spec/fdc_api.html).

License
------------

Licensed under the MIT License. See [License File](LICENSE) for more information about it.

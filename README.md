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

This wrapper doesn't bundle the HTTP client so you are free to use your preferred one. You can inject it in the FoodDataCentralClient constructor or let the wrapper discover it. If you don't know what I am talking about, the fast solution is to require these packages:

```
$ composer require php-http/curl-client nyholm/psr7 php-http/message
```

Usage
------------
```php
$foodDataCentralClient = FoodDataCentralClient::create('your_api_key');

// Find food by FDC ID.
$foodItem = $foodDataCentralClient->food()->food(781125);

// Find food nutrients. See the FoodItem interface for more nutrient finders.
$calcium = $foodDataCentralClient->food()->food(781125)->getCalcium();

```
Read the Food Data Central API documentation [here](https://fdc.nal.usda.gov/api-spec/fdc_api.html).

License
------------

Licensed under the MIT License. See [License File](LICENSE) for more information about it.

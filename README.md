# A Laravel client for positionstack.com

A simple Laravel client to execute forward and reverse queries on positionstack.com

## Installation

You can install the package via composer:

```bash
composer require filippo-toso/positionstack
```

### Laravel support

Edit your `config/services.php` file and add the following fields:

```php
    'positionstack' => [
        'key' => env('POINTSTACK_KEY_ID'),
    ],
```

### Usage

In your Laravel application, you can execute calls as follow:

```php
$data = PositionStack::forward('1600 Pennsylvania Ave NW, Washington DC');

// ...

$data = PositionStack::reverse('40.7638435,-73.9729691');
```

Both methods include a second optional parameter you can fill with the optional parameters described in [the official documentation](https://positionstack.com/documentation).
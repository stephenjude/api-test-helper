# Laravel API Test Helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephenjude/api-test-helper.svg?style=flat-square)](https://packagist.org/packages/stephenjude/api-test-helper)
[![Build Status](https://img.shields.io/travis/stephenjude/api-test-helper/master.svg?style=flat-square)](https://travis-ci.org/stephenjude/api-test-helper)
[![Quality Score](https://img.shields.io/scrutinizer/g/stephenjude/api-test-helper.svg?style=flat-square)](https://scrutinizer-ci.com/g/stephenjude/api-test-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/api-test-helper.svg?style=flat-square)](https://packagist.org/packages/stephenjude/api-test-helper)

This is a collection of helper methods to for testing and debugging API endpoints.

## Installation

You can install the package via composer:

```bash
composer require stephenjude/api-test-helper
```


## Usage

``` php
use stephenjude\ApiTestHelper\WithApiHelper;
...
...
use WithApiHelper;

public function testGetAllUsers()
{
    $actualUsers = User::all();

    $this->response = $this->getJson('/users');

    // Assert response is 200
    $this->response->assertOk();

    // Dump api data to the console
    $this->dumpApiData();

    // Write api data to the log file
    $this->logApiData();

    // Decode api response data
    $responseData = $this->decodeResponse();

    // Assert API data is a collection 
    $this->assertApiResponseCollection($actualUsers);
}
```

## Avaialble Helpers


### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email stephenjudesuccess@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Jude](https://github.com/stephenjude)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

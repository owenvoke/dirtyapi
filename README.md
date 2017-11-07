# dirtyapi

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP class for utilising the [DirtyMarkup] API.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/dirtyapi
```

## Usage

```php
use \pxgamer\DirtyApi\Beautifier();
$beautifier = new Beautifier;
```

#### Methods

Method Name            | Parameters  | Returns
---------------------- | ----------- | -------
`$beautifier->html()`  | string, int | `string (json)`
`$beautifier->css()`   | string, int | `string (json)`
`$beautifier->js()`    | string, int | `string (json)`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [@claviska]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[@claviska]: https://twitter.com/claviska
[comp]: https://getcomposer.org

[ico-version]: https://img.shields.io/packagist/v/pxgamer/dirtyapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/dirtyapi/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/73825365/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/dirtyapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/dirtyapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/dirtyapi
[link-travis]: https://travis-ci.org/pxgamer/dirtyapi
[link-styleci]: https://styleci.io/repos/73825365
[link-code-quality]: https://codecov.io/gh/pxgamer/dirtyapi
[link-downloads]: https://packagist.org/packages/pxgamer/dirtyapi
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors

# dirtyapi

A PHP class for utilising the DirtyMarkup API.


[DirtyMarkup](https://dirtymarkup.com/docs) has an API endpoint for cleaning `html`, `css` and `javascript`. This PHP class is an easy way to use the API.

## Usage

#### Using Composer

`composer require pxgamer/dirtyapi`

```php
require 'vendor/autoload.php';
```

#### Including the file manually

```php
include 'src/Beautifier.php';
```

Once included, you can initialise the class using either of the following:
```php
$beautifier = new \pxgamer\dirtyApi\Beautifier;
```
```php
use \pxgamer\dirtyApi\Beautifier;
$beautifier = new Beautifier;
```

## Class Methods

Method Name  | Parameters  | Returns
------------ | ----------- | -------
html()       | string, int | `string (json)`
css()        | string, int | `string (json)`
js()         | string, int | `string (json)`

## Notes

DirtyMarkup has a soft rate limit of 1,000 requests per day per IP address. If you consistently exceed the limit, your IP address will be blacklisted to preserve resources for other users.

Again, DirtyMarkup is a free service. If you're application will require significant usage of the API, please contact [@claviska][@claviska] about sponsoring the service before launching.

[@claviska]: https://twitter.com/claviska
[comp]: https://getcomposer.org

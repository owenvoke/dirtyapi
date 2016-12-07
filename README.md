# dirtyapi

A PHP class for utilising the DirtyMarkup API.


[DirtyMarkup](https://dirtymarkup.com/docs) has an API endpoint for cleaning `html`, `css` and `javascript`. This PHP class is an easy way to use the API.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/dirtyapi`  
```php
<?php
require 'vendor/autoload.php';
$dirtyAPI = new \pxgamer\dirtyAPI();
```
- Including the file manually  
```php
<?php
include 'src/dirtyAPI.php';
$dirtyAPI = new \pxgamer\dirtyAPI();
```

__Beautifying html__  
`$dirtyAPI::html($code, $indentation);`  
__Beautifying css__  
`$dirtyAPI::css($code, $indentation);`  
__Beautifying javascript__  
`$dirtyAPI::js($code, $indentation);`  

## Variables

Variable Name | Variable Type | Variable Description      | Required?
------------- | ------------- | ------------------------- | ---------
`$code`       | String        | The code to be formatted. | true
`$indent`     | Integer       | The indentation used.     | true

## Notes

DirtyMarkup has a soft rate limit of 1,000 requests per day per IP address. If you consistently exceed the limit, your IP address will be blacklisted to preserve resources for other users.

Again, DirtyMarkup is a free service. If you're application will require significant usage of the API, please contact [@claviska][@claviska] about sponsoring the service before launching.

[@claviska]: https://twitter.com/claviska
[comp]: https://getcomposer.org

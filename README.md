# VErroHandler
- Handling exceptions or errors coming from the PocketMine server or regular php applications!

# Example
```php
VErrorHandler::init();
VErrorHandler::register(function (string $errorMessage) {
    throw new ErrorException($errorMessage); // you can throw new ErrorException or not!
});
```

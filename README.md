# VErroHandler
- Handling exceptions or errors coming from the PocketMine server or regular php applications!

# Features
- Handle errors and exceptions in your server or php application easily!
- Avoid unexpected exceptions or errors that close the server or application!

# Example
```php
VErrorHandler::init();
VErrorHandler::register(function (string $errorMessage) {
    throw new ErrorException($errorMessage); // you can throw new ErrorException or not if you did not want stop server or your application!
});
```

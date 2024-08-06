<?php

declare(strict_types=1);

namespace venndev\verrorhandler;

final class VErrorHandler
{

    private static array $handlers = [];
    private static bool $initialized = false;

    public static function init(): void
    {
        if (self::$initialized) return;
        /**
         * @throws VErrorException
         */
        $fncError = function (int $errno, string $errstr, string $errfile, int $errline) {
            /** @var VError $handler */
            foreach (self::$handlers as $handler) {
                $errorMessage = "Error with code [$errno]: $errstr in $errfile on line $errline";
                $result = $handler->getCallback()($errorMessage);
                if ($result instanceof VErrorException) throw $result;
            }
        };
        set_error_handler($fncError);
        set_exception_handler($fncError);
        self::$initialized = true;
    }

    public static function register(callable $handler): void
    {
        self::$handlers[] = new VError($handler);
    }

}
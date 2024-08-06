<?php

declare(strict_types=1);

namespace venndev\verrorhandler;

use Exception;

final class VErrorException extends Exception
{

    public function __construct(
        private readonly string $errorMessage
    )
    {
        parent::__construct($this->errorMessage);
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

}
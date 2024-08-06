<?php

declare(strict_types=1);

namespace venndev\verrorhandler;

use InvalidArgumentException;

final readonly class VError
{

    public function __construct(
        private mixed  $callback
    )
    {
        if (!is_callable($this->callback)) throw new InvalidArgumentException('Callback must be callable');
    }

    public function getCallback(): mixed
    {
        return $this->callback;
    }

}
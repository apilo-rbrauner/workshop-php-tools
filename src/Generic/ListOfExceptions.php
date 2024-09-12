<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App\Generic;

use Exception;

/**
 * @template T of Exception
 */
class ListOfExceptions
{
    /**
     * @param T $exception
     * @return ListOfExceptions<T>
     */
    public function add($exception): self
    {
        return $this;
    }

    /**
     * @return T[]
     */
    public function getAll(): array
    {
        return [];
    }
}

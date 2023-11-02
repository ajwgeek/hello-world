<?php

/**
 * This file is part of ajwgeek/hello-world
 *
 * @copyright Copyright (c) Michigan Technological University <umc@mtu.edu>. All rights reserved.
 */

declare(strict_types=1);

namespace AJWGeek\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
